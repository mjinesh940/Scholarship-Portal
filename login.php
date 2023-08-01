<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>
	<?php
	$host = "localhost";
	$password = "";
	$user = "root";
	$database = "login";
	
	$conn = mysqli_connect($host,$user,$password,$database);
	if (!$conn){
		die("connection failed". mysqli_connect_error());
	}
	if (isset($_POST['Register'])) {
    // Assuming you have established a database connection

    // Get the data from the form
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$password = $_POST['password'];

		$sql_insert = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    	if(mysqli_query($conn,$sql_insert)) {
        }
        else {
        	echo"could not insert record";
    	}
	}
	if (isset($_POST['login'])){
		$email = $_POST['email'];
    	$password = $_POST['password'];
		$sql_sel = "SELECT * FROM user WHERE email = '$email' and password= '$password'";
    	$result = mysqli_query($conn,$sql_sel);
    	if(mysqli_num_rows($result) == 1) {
    		echo "fetched!!";
    		header("Location:home.html");
			exit();
    	}
	}
	mysqli_close($conn);
	?>
    <!-- <h2>Weekly Coding Challenge #1: Sign in/up Form</h2> -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
	    <form method = "POST">;
			<h1>Create Account</h1>
			<div class="social-container">
			</a>
			<a href="#" class="google btn">
			  <i class="fa fa-google fa-fw"></i> Sign in with Google
			</a>
			
			</div>
			<input type="text" id="nameInput" name = "name" placeholder="Name" />
			<input type="email" id="emailInput" name = "email" placeholder="Email" />
			<input type="password" id="passwordInput" name = "password" placeholder="Password" />
			<button name = "Register">Sign Up</button>

		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Login</h1>
			<div class="social-container">
			</a>
			<a href="#" class="google btn">
			  <i class="fa fa-google fa-fw"></i> Login with Google
			</a>
			</div>
			<span>or use your account</span>
			<form action="index.php" method="post">
				<input type="text" name="email" placeholder="Email" required>
				<input type="password" name="password" placeholder="Password" required>
				<button name = "login" type="submit">Login</button>
			</form>			
			<!-- <input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" /> -->
			<a href="#">Forgot your password?</a>
			<button>Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		<!-- <div class="footer">
			<div class="row">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			</div> -->

		

		<div class="row">
			<ul>
			<li><a href="#">Contact us</a></li>
			<li><a href="#">Our Services</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Terms & Conditions</a></li>
			<li><a href="#">Career</a></li>
			</ul>
			</div>
		
		<a target="_blank" href="/home.html">Scholarship portal</a>
		Go to our home page
		<a target="_blank" href="/home.html">here</a>.

		
			
			<!-- <div class="row">
			SCHOOLARSHIP Copyright © 2023 Scholarship - All rights reserved  
			</div> -->
			</div>
	</p>
</footer>
</body>
<script src="/javascript/login.js"></script>
</html>