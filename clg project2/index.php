<?php
session_start();
if (isset($_SESSION['logged_in']))
{
	header('location:home.php');
}else{

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Clg project</title>
	<link rel="stylesheet" type="text/css" href="sonu.css">
	<link rel="stylesheet" type="text/css" href="earth.css">
	<link rel="stylesheet" type="text/css" href=".css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<style type="text/css">
		.cross{
			position: absolute;
			top: 0%;
			right: 4%;
			font-size: 2em;
			font-family: sans-serif;
			transform: rotate(45deg);
		}
		.cross a{
			text-decoration: none;
			color: #fff;
		}
		.cross1{
			position: absolute;
			top: 0%;
			right: 4%;
			font-size: 3em;
			font-family: sans-serif;
			transform: rotate(45deg);
		}
		a{
			text-decoration: none;
			color: red;
		}
		.sign-up input:hover{
			border-bottom:2px solid red;
			border-bottom-color: red;

		}
		.login-Box input:hover{
			border-bottom:2px solid blue;
		}
	</style>
	
</head>
<body onload="dog()">
	<div id="loader">
	<div>
		<img src="logo.png" class="img">
	</div>
	<div class="container">
		<div class="line">
			<div class="circle"></div>
		</div>
		<div class="line">
			<div class="circle"></div>
		</div>
		<div class="line">
			<div class="circle"></div>
		</div>
		<div class="line">
			<div class="circle"></div>
		</div>
		<div class="line">
			<div class="circle"></div>
		</div>
		<div class="line">
			<div class="circle"></div>
		</div>
		<div class="line">
			<div class="circle"></div>
		</div>
		<div class="line">
			<div class="circle"></div>
		</div>
		<div class="line">
			<div class="circle"></div>
		</div>
	</div>
</div>
	<HEADER>
		<nav>
			<div class="row clearfix">
				<img src="logo.png" class="logo">
				  <ul class="main-nav animated SlideInDown" id="check">
				  	<li class="toc"><a href="#">Department</a></li>
				  	<li><a href="#">Admission</a></li>
				  	<li><a href=#">Student Corner</a></li>
				  	<li><a href="http://www.gpadampur.ac.in/#">About Us</a></li>
				  </ul>
				<a href="#"class="mobile-icon"  onclick="slideshow()"><i class="fas fa-align-justify"></i></a>
			</div>
		</nav>
		<div class="main-content-header">
		<h1>
			Welcome TO<span class="colorchange"> Government</span><br>
			     <span class="colorchangew">Polytechnic</span>
		     Mandi Adampur.
		</h1>
		  <a href="#" class="btn btn-full" onclick="sumit()">Click On Login</a>
		  <a href="#" class="btn btn-nav" onclick="azzad()">Click On Sign up</a>
	</div>
	<div class="hod">
		<H3 class="mesg">Principal Message</H3>
		<img src="principal.jpg">
		      <span class="res">The institution is spread over an area of 18 acres consisting of administrative and teaching blocks, multi-purpose hall, three hostels and 22 staff residence, Under World Bank Project, adequate infrastructure has been created in terms of building, machinery, equipment, books, furniture, etc.</span>
	</div>
	<div class="sharp"><p>“Failure is the opportunity to begin again more intelligently.” – Henry Ford</p></div>
	<div class="login-Box" id="some">
		<img src="logo.png" class="user">
		<h2>Login In Here</h2>
		<div class="cross1"><a href="index.php">+</a></div>
		<form action="validation.php" method="post">
			<p>Name</p>
			     <input type="text" name="name" placeholder="Enter your name" required="required">
			<p>Password</p>
			     <input type="Password" name="Password" placeholder="********" required="required">
			<input type="submit" name="submit" value="Sign In">
			     <a href="#" class="sa">Forget Password</a>
		</form>
	</div>	
    <div class="sign-up" id="egg">
		<img src="logo.png" class="red">
		<div class="cross"><a href="index.php">+</a></div>
		<h2>Sign up Here</h2>
		<form action="registration.php" method="post">
			<p>Name</p>
			<input type="text" name="Name" placeholder="Enter your full name" required="required">
			<p>Roll no.</p>
			<input type="text" name="Roll" placeholder="Enter your Roll no." required="required">
			
            <p>Branch</p> 
			<select name="Branch" class="dr">
  <option value="Computer Engg">Computer Engg</option>
  <option value="Electronics">Electronics</option>
  <option value="Civil">Civil</option>
  <option value="Food Technology">Food Technology</option>
  <option value="Mechanical">Mechanical</option>
  <option value="DBm">DBM</option>
            </select>
            <p>Semester</p> 
			<select name="Semester" class="rt">
  <option value="1st">First sem.</option>
  <option value="2nd">Second sem.</option>
  <option value="3rd">Third sem.</option>
  <option value="4th">Forth sem.</option>
  <option value="5th">Fifth sem.</option>
  <option value="6th">Sixth sem.</option>
            </select>
            <p>Contact no.</p>
			<input type="number" name="contact" placeholder="Enter your contact no.">
			<p>Password</p>
			<input type="Password" name="Password" placeholder="********" required="required">
			<input type="submit" name="submit" value="sign-up">
			<a href="#" class="sa">Forget Password</a>
		</form>

	</div>
	  <div class="earth"></div>
	</HEADER>
      <script type="text/javascript">
      	function slideshow(argument) {
      		var x=document.getElementById('check');
      		if(x.style.display==="none"){
      			x.style.display="block";
      		}else{
      			x.style.display="none";
      		}
      	}
      	function sumit(argument) {
      		var y=document.getElementById('some');
      		if(y.style.display==="none"){
      			y.style.display="block";
      		}else{
      			y.style.display="none";
      		}
      	}
      	function azzad(argument) {
      		var y=document.getElementById('egg');
      		if(y.style.display==="none"){
      			y.style.display="block";
      		}else{
      			y.style.display="none";
      		}
      	}
      	var preloader=document.getElementById('loader'); 
      	function dog(){
      		preloader.style.display='none';
      	}
      </script>
      
</body>
</html>
