<?php
 session_start();

 //connect to SQLiteDatabas
 $db = mysqli_connect("fareham.city.ac.uk" , "adbc524" , "190053110" , "adbc524");
    $username ="";
 if (isset($_POST['login_btn'])) {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    $password = md5($password);
    $sql = "SELECT* FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) == 1){
      $_SESSION['login_user'] = $username;

      $_SESSION['message'] = "You are now logged in";
      $_SESSION['username'] = $username;
      header("location:index.php"); //redirect to home page
    }else{
        $_SESSION['message'] = "Username/password combination incorrect";
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
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="register_style.css">

	</head>
	
	<header>
			<div class="container">
				<div class="topnav">
					<nav id="myTopnav">
						<a href=index.php>Home</a>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="LoginDb.php">Login</a></li>
						<li><a href="signUpDb.php">SignUp</a></li>
						<a class="icon" onclick="myFunction()">
							<i class="fa fa-bars"> </i>
						</a>
					</nav>
				</div>
			</div>
	</header>
	<body>

	<?php
	  if(isset($_SESSION['message'])){
	  echo "<div id='error_msg'>".$_SESSION['message']."</div>";
	  unset($_SESSION['message']);
	}
	?>

	<form method="post" action="loginDb.php">
	  <table>
		<tr>
		  <td>Username:</td>
		  <td><input type="text" name="username" class="textInput"></td>
		</tr>

		<tr>
		  <td>Password:</td>
		  <td><input type="password" name="password" class="textInput"></td>
		</tr>

		<tr>
		  <td></td>
		  <td><input type="submit" name="login_btn" value="Login"></td>
		</tr>

	</form>
			
		<h2> Login Here</h2>
		
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