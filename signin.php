

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Welcome - Document</title>
    <link rel="stylesheet" href="signin.css">
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
        <br><br>
    </nav>

    <div class="wrapper">
        <form action="">
            <h1>Login</h1>

            <div class="input-box">
                <input type="text" placeholder="Email" required>
                <box-icon type='solid' name='user'></box-icon>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <box-icon type='solid' name='lock-alt'></box-icon>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account?<a href="r.php">Register</a></p>
            </div>
        </form>
    </div>
</body>