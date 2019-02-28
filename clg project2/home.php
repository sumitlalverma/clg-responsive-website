<?php

session_start();

if (!isset($_SESSION['logged_in']))
{
	header('location:index.php');
}else{

}

?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<style type="text/css">
			.container{
				z-index: 2;
			}
		h1{
	position: relative;
    margin: 0;
	padding: 0;
	font-size: 8em;
	text-transform: uppercase;
	text-align: center;
	background:url(sot.jpg);
	background-attachment: fixed;
	-webkit-background-clip:text;
	-webkit-text-fill-color:transparent;		
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: sans-serif;

   }
   body{
   	margin: 0;
	padding: 0;
	background:url(sot.jpg);
	background-size: cover;
	background-attachment: fixed;
	opacity: 0.6px;
   }
   h1:before{
   	content: attr(data-text);
   	position: absolute;
   	top: 19%;
   	left:1%;
   	z-index:-2;
   	text-shadow: -5px 5px 20px #000,
   				 -10px 10px 20px #000,
   				 -20px 15px 40px #000,
   				 -25px 20px 70px #000;

   }

	</style>
</head>
<body>
	
	<div class="container">
 <h2 class="welcome">welcome <span class="text"><?php
  $name = $_SESSION['login_name'];
  echo $name;
   ?></span>
  	<hr>
  </h2> 
 <a href="logout.php" class="logout"> LOGOUT</a>
</div> 
<h1 data-text="Government polytechnic mandi adampur.">Government polytechnic mandi adampur.	</h1>
</body>
</html>