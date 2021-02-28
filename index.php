<!DOCTYPE html>
<!--Gera Jahja:IN1010: Web Development Coursework 2: Database-Driven Web Application-->
<!--W3 schools(https://www.w3schools.com/) and my work from labs(Moodle)have been used as aid in programming this website-->
<html lang="en" dir="ltr">
	<head>
		 <title>A quick introduction to computer MotherBoards</title>
		 <meta charset="utf-8">
		 <!--the following imports are Bootstrap, allows me to access them-->
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		 
		 <!--import my css file (style.css)-->
		 <link rel="stylesheet" type="text/css" href="style.css">
		 
		 <!--required for a hamburger menu (lab 3)-->
		 <link rel="stylesheet" href=“https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 
		 <!-- Add jQuery to your HTML file in order for the JavaScript file to function correctly -->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<!-- HTML5 Shiv -->
		<script src="js/html5shiv.js">  </script>
		
	</head>
	<body>
	
		<div class="jumbotron text-center">
			<h1> INTERACTIVE MOTHERBOARD</h1>
		</div>
		
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
		

		<section id="showcase"> 

			<!--
			*    Title: Responsive images
			*    Author: W3Schools.com
			*    Date: 2020
			*    Availability: https://www.w3schools.com/bootstrap/bootstrap_images.asp
			-->
			<div class="container">
				<h2>LEARN ABOUT THE DIFFERENT PARTS OF A MOTHERBOARD </h2>
				<!--The .img-responsive class makes the image scale nicely to the parent element-->
				<p>A motherboard is one of the most essential parts of a computer system. It holds together many of the crucial components of a computer.</p>
				<!-- definition from:https://study.com/academy/lesson/what-is-a-motherboard-definition-function-diagram.html -->
				
			</div>
			  
			<div class="container">
			  <div class="row">
				<div class="col-sm-4">
				  <h3>Click a section on the image bellow to find out more about that specific part of the motherboard</h3>
				  <p>When you're confident, come back and complete the quiz!</p>
				</div>
				
			  </div>
			</div>
		</section>

	</body>
	

	<body>
		<img class="img-responsive" src="Mother_Board.jpg" alt="MotherBoard" usemap=#motherBoardMap> 
			<!-- the image has been taken from the website:https://www.kencorner.com/computer-motherboard-components/ -->	
			<!--the code bellow allows the user to find out more depening on which number they click
			*i used this website to find coordinates for sections f the image: https://www.image-map.net/
			-->
		<map name="motherBoardMap">
			<area shape="rect" coords="487,112,458,74" href="index1.php" alt="1">
			<area shape="rect" coords="432,78,458,109" href="index1.php" alt="2">
			<area shape="rect" coords="336,67,431,116" href="index1.php" alt="3">
			<area shape="rect" coords="349,194,405,245" href="index1.php" alt="4">
			<area shape="rect" coords="281,246,484,298" href="index1.php" alt="5">
			<area shape="rect" coords="279,298,366,313" href="index1.php" alt="6">
			<area shape="rect" coords="363,339,283,317" href="index1.php" alt="7">
			<area shape="rect" coords="156,130,256,250" href="index1.php" alt="8">
			<area shape="rect" coords="81,108,154,291" href="index1.php" alt="9">
			<area shape="circle" coords="235,277,23" href="index1.php" alt="10">
			<area shape="rect" coords="279,272,263,160" href="index1.php" alt="11">
			<area shape="rect" coords="291,159,480,180" href="index1.php" alt="12">
			<area shape="rect" coords="400,123,483,145" href="index1.php" alt="13">
		</map>

		
		<div class="jumbotron text-center">
			<h1>Quiz</h1>
		</div>
		
        <div class="quiz-container"><!--calls the javascript class "quiz-container", the code has been based off of lab 4(moodle)--> 
            <div id="quiz"></div>
        </div>

        <button id="previous">Previous Question</button>
        <button id="next">Next Question</button>
        <button id="submit">Submit Quiz</button>
        <div id="results"></div>
        
        <script src="quiz-behaviour.js"></script>
    </body>
	
	<?php
      if(isset($_SESSION['message'])){
      echo "<div id='error_msg'>".$_SESSION['message']."</div>";
      unset($_SESSION['message']);
    }
    ?>
	<!--javascript code for highlighting navigation bar-->
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
	
	<footer>
		<p>Gera Jahja:Coursework 2: IN1010: Web Development, Copyright &copy; 2020</p>
	</footer>
</html>