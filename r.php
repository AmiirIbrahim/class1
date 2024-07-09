<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="icon" href="images/GTAV-LSCustoms-Logo.webp" >
<?php
require 'includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fName = $_POST['fNmae'] ?? null;
    $lName=$_POST['lName']?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $gender= $_POST['gender'] ?? null;
    $age = $_POST['age'] ?? null;
    $date = $_POST['date'] ?? null;
    
   

    // Validate input (additional validation can be added here)
    if ( $fName && $lName &&  $email && $password && $gender && $age && $date ) {
        $sql = "INSERT INTO newaccount ( fName,lName,email,password,gender,age,date) VALUES ( '$fName','$lName,'$email,'$password', '$gender', '$age')";
        
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
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Welcome - Document</title>
    <link rel="stylesheet" href="r.css">
    <style>
        
        a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <a href="index.php">About</a>
        <a href="fleet.php">Fleet</a>
        <a href="destination.php">Destinations</a>
        <a href="mobile.php">Mobile App</a>
        <a href="r.php">Sign up</a>
        <a href="signin.php">Sign in</a>
        <a href="booking.php">Book a flight</a>
        <a href="services.php">Services</a>
    </nav>
    <br><br>
    <?php
    require_once("connect.php");
   
?>
    <div class="feedback">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off" class="feedback">
        First name: <input type="text" name="fName" id="fName" /><br/><br/><br/>

        Last name: <input type="text" name="lName" id="lName" /><br/><br/><br/>
        Email: <input type="email" name="email" id="email"><br/><br/>
        Password: <input type="password" name="password" id="password" /><br/><br/><br/>
        Gender:
        <select name="gender" id="gender">
            <option value="">--Select Gender--</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Rather not say">Rather not say</option>
        </select><br/><br/><br/>
        Age: <input type="number" name="age" id="age"><br/><br/>
        Date: <input type="date" name="date"><br/><br/>
        <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" value="Reset" />
        
    </form>
    </div>
</body>
</html>


