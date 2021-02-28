<?php
//website used:https://www.cloudways.com/blog/connect-mysql-with-php/
//allows database access
session_start();

 //connect to SQLiteDatabase
$db = mysqli_connect("fareham.city.ac.uk" , "adbc524" , "190053110" , "adbc524");

if (isset($_POST['register_btn'])) {
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password =test_input($_POST['password']);
    $password2 = test_input($_POST['password2']);

if( $password == $password2){
    //create user
    $password = md5 ($password); // hash password before storing for security purposes
    $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
    mysqli_query($db, $sql);
    $_SESSION['message'] = "You are now logged in";
    $_SESSION['username'] = $username;
    header("location:index.php"); //redirect to home page
  } else {
    $_SESSION['message'] = "The two passwords do not match";
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<!--Gera Jahja:IN1010: Web Development Coursework 2: Database-Driven Web Application-->
<!--W3 schools(https://www.w3schools.com/) and my work from labs(Moodle)have been used as aid in programming this website-->
<html lang="en" dir="ltr">
	<head>
	<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="register_style.css">
	</head>
	
	<header>
			<div class="container">
				<div class="topnav">
					<nav id="myTopnav">
						<a href=index.php>Home</a>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="loginDb.php">Login</a></li>
						<li><a href="signUpDb.php">SignUp</a></li>
						<a class="icon" onclick="myFunction()">
							<i class="fa fa-bars"> </i>
						</a>
					</nav>
				</div>
			</div>
	</header>
	<body>
    <!-- 
			*    Title: Database- login help
			*    Author: EasyTutorials on YouTube
			*    Date: 2020
			*    Availability: https://youtu.be/NXAHkqiIepc			-->
	
    <!-- Using a form so that the php code can be reffered to as a script-->
    <form method="post" action="signUpDb.php">
	  <table>
		<tr>
		  <td>Username:</td>
		  <td><input type="text" name="username" class="textInput"></td>
		</tr>
		<tr>
		  <td>Email:</td>
		  <td><input type="email" name="email" class="textInput"></td>
		</tr>
		<tr>
		  <td>Password:</td>
		  <td><input type="password" name="password" class="textInput"></td>
		</tr>
		<tr>
		  <td>Password again:</td>
		  <td><input type="password" name="password2" class="textInput"></td>
		</tr>
		<tr>
		  <td></td>
		  <td><input type="submit" name="register_btn" value="Register"></td>
		</tr>
	</form>
		
	<h2> SignUp Here</h2>
	</body>
	
	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			 if (x.className === "topnav") {
			 x.className += " responsive";
			 }
			 else {
			 x.className = "topnav";
			 }
		}
	</script>
	
	
</html>

