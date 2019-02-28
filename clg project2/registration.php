<?php
session_start();
header('location:index.php');
$con=mysqli_connect('localhost','root');
if($con){
	echo "connection sucessfull";
}else{
	echo "unsucessful";
}
mysqli_select_db($con,'practical');
$name= $_POST['Name'];
$branch= $_POST['Branch'];
$sem= $_POST['Semester'];
//$email= $_POST['Email'];
$pass= $_POST['Password'];
$rolno= $_POST['Roll'];
	$qy="INSERT INTO `signin`(`name`, `branch`, `sem`, `password`, `roll`) VALUES ('$name','$branch','$sem','$pass','$rolno')";
	$run=mysqli_query($con,$qy);
		
?> 
	