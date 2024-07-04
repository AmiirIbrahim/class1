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
    <form method="post" action="processes.php">
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
        Deadline: <input type="date" name="deadline"><br/><br/>
        <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" value="Reset" />
        
    </form>
</body>
</html>
