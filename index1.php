<!DOCTYPE html>
<!--Gera Jahja:IN1010: Web Development Coursework 2: Database-Driven Web Application-->
<!--W3 schools(https://www.w3schools.com/) and my work from labs(Moodle)have been used as aid in programming this website-->
<html lang="en" dir="ltr">
	<head>
		 <title>MotherBoard</title>
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
	
	<header>
	<div class="jumbotron text-center">
			<h1> INTERACTIVE MOTHERBOARD</h1>
		</div>
		
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

    <div class="jumbotron text-center" <h1>Parts of motherboard</h1>
		<h2>1. Mouse & keyboard :</h2>
		<p>There are two types of keyboard and mouse  connectors.First type is called PS/2 and second one is called USB.</p>
		
		<h2>USB (Universal serial bus) :</h2>
		<p>USB is Universal serial bus. It is used for connection for PC. There are  different devices which is used to connect with USB port such as mouse, keyboards, scanners, cameras, and even printers.USB connector is used to connect computer motherboard and a peripheral device. You can insert or remove peripheral device connect by USB connector without restarting your system.</p>
		
		<h2>3. Parallel port  :</h2>
		<p>Most of old  printers are used to connect by  parallel port. Parallel port used more than one wire for sending or receiving multiple bits of data at once, while serial port uses only one wire. Parallel ports use a 25-pin female DB connector.</p>
		
		<h2>4. CPU Chip  :</h2>
		<p>CPU refers to a processor, the central processing unit, also called the microprocessor performs all the task that take place inside a computer system.It is also know as brain of computer.
		</p>
		
		<h2>5. RAM slots :</h2>
		<p>RAM slots is for attaching RAM on it in general desktop we can see two slot of RAM but in server motherboard we can see 4+ slot of RAM.RAM comes in different size(memory).</p>
		
		<h2>6. Floppy controller :</h2>
		<p>In old motherboard the floppy drive connects to the computer via a 34-pin ribbon cable, one end of ribbon cable is connect to floppy drive and other is connected to the motherboard.</p>
	
		<h2>7. IDE controller :</h2>
		<p>IDE that is Integrated Drive Electronics,also called as ATA or Parallel ATA (PATA).IDE controller is responsible for controlling the hard drive. Today’s computers no longer come with a IDE controller.</p>
		
		<h2>8. PCI slot :</h2>
		<p>PCI stands for Peripheral Component Interface, PCI slot allows you to insert expansion cards into your computer. PCI used to connect additional PCI device like network cards, sound cards,modems,video cards.Some of today’s computers no longer come with a PCI expansion slot.Its connect audio, video and graphics.</p>
	
		<h2>9. ISA slot : </h2>
		<p>ISA stands for Industry Standard Architecture, It is the standard architecture of the Expansion bus.Its connect modem and input devices.</p>
	
		<h2>10. CMOS Battery :</h2>
		<p>CMOS is complementary metal-oxide-semiconductor is used to store BIOS setting in computer motherboard. CMOS Battery also store date and time.</p>
		
		<h2>11. AGP slot :</h2>
		<p>The Accelerated Graphics Port (AGP) is a high-speed point-to-point channel for attaching a video card to a computer system, If you have a modern motherboard, you will almost certainly notice a single connector that looks like a PCI slot.A fast port for a graphics card</p>
		
		<h2>12. CPU slot :</h2>
		<p>The processor socket (also called a CPU socket) is the connector on the motherboard that connect a CPU.</p>
		
		<h2>13. Power supply plug in :</h2>
		<p>The Power supply provides the necessary electrical power to make the computer system operate. The power supply takes standard 110-V AC power and converts into  +/-12-Volt, +/-5-Volt, and 3.3-Volt DC power.The power supply connector has 20-pins, and the connector can go in only one direction.</p>
	</div>
	</body>
	<?php
      if(isset($_SESSION['message'])){
      echo "<div id='error_msg'>".$_SESSION['message']."</div>";
      unset($_SESSION['message']);
    }
    ?>
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
		