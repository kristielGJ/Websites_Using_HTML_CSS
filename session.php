<?php
	$db = new mysqli('fareham.city.ac.uk', 'adbc524', '190053110', 'adbc524');
	if ($db->connect_errno) {
		printf("Connection failed: %s\n", $db->connect_error);
		exit();
	}
 ?>


<?php
//moodle code helped me with this section
   session_start();
   $login_session="";

   if(isset($_SESSION['login_user'])){
	$user_check = $_SESSION['login_user'];
	$ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session = $row['username'];
	echo $login_session;


	if(!isset($_SESSION['login_user'])){
      header("location:loginDb.php");//redirects to login page
      die();
	}
   }




?>
