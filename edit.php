<link rel="icon" href="images/GTAV-LSCustoms-Logo.webp" >
<?php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fName = $_POST['fName'] ?? null;
    $lName = $_POST['lName'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $gender = $_POST['gender'] ?? null;
    $age = $_POST['age'] ?? null;
    $date = $_POST['date'] ?? null;

    // Validate input (additional validation can be added here)
    if ( $fName && $lName && $email && $password&& $gender && $age && $date) {
        $sql = "INSERT INTO users (  fName  lName  email  password gender  age  date) VALUES ( '$fullname', '$password', '$Reenter_password', '$email_address')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "All fields are required.";
    }

    $conn->close();
}
?> 