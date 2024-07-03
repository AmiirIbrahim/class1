<?php

$firstname = $_POST['fName'];
        $lastname = $_POST['lName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

$sql =  ("INSERT INTO users (firstName, lastName, email, password,age,gender) VALUES ('$firstname','$lastname','$email','$password','$age','$gender)");
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>