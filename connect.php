<?php

$servername="localhost";
$user="root";
$pass="";
$db="omanair";

$fName="fName";
$lName="lName";
$email="email";
$password="password";
$gender="gender";
$age="age";
$date="date";

$conn=new mysqli($servername,$user,$pass,$db);

if($conn->connect_error){
    die ("Failed to connect DB".$conn->connect_error);
}
echo "Connected successfully";
?>