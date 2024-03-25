<?php
	//$servername = "localhost";
	//$username = "scaws";
	//$password = "Isscoste2k";
	//$db = "dbname";
	//try {
	//$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password, $db);
	// set the PDO error mode to exception
	//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully";
	//}
	//catch(PDOException $e)
	//{
	//echo "Connection failed: " . $e->getMessage();
	//}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF_8">
    <meta http-equiv="X-UA-Comptable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & register</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Honk" rel="stylesheet">
</head>
<body>

<header>
    <div class="logo">
        <img src="assets/logo.png"><div class="p-logo1">Cloud</div><div class="p-logo2">Zone</div></img>
    </div>
    <div class="navigation">
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </div>
</header>

<div class="wrapper">
    <span class="icon-close">
	    <ion-icon name="close-outline"></ion-icon>
    </span>

    <div class="form-box-login">
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="at-outline"></ion-icon></span>
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn" name="login">Login</button>
            <div class="login-register">
                <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
            </div>
        </form>
    </div>
</div>
<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
