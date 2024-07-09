<?php

require_once 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $deadline = $_POST["deadline"];

    
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

   
    $sql = "INSERT INTO user (first_name, last_name, email, password, gender, age, deadline) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssis", $fName, $lName, $email, $password_hash, $gender, $age, $deadline);
    $stmt->execute();


    if ($stmt->affected_rows > 0) {
        echo "User added successfully!";
    } else {
        echo "Error adding user: " . $stmt->error;
    }

  
    $stmt->close();
    $conn->close();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        session_start();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
        header("Location: index.php");
        exit;
    } else {
        echo "Invalid email or password";
    }

    $stmt->close();
}
?>