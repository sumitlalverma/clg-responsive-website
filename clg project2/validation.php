<?php
session_start();
if (empty($_SESSION['logged_in']))
{
	$con=mysqli_connect('localhost','root');
	if($con){
		echo "connection sucessfull";
	}else{
		echo "unsucessful";
	}
	mysqli_select_db($con,'practical');
	//$rolno= $_POST['Roll'];
	$name= $_POST['name'];
	$pass= $_POST['Password'];
	$q = "SELECT * FROM `signin` WHERE name='".$name."' && password='".$pass."' ";
	$result=mysqli_query($con,$q);
	$row = mysqli_fetch_assoc($result);
	// echo "<pre>";print_r($row['name']);exit;
	$num = count($row);
	if($num>0){
		$name = $row['name'];
		$l_id = $row['id'];
		$_SESSION['logged_in'] = true;
		$_SESSION['login_id'] = $l_id;
		$_SESSION['login_name'] = $name;
		header('location:home.php');
	}else{
		header('location:index.php');
	}
}else{
	header('location:index.php');
}
?> 
	