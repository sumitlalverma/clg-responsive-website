<?php
session_start();
if (!isset($_SESSION['logged_in']))
{
	header('location:index.php');
}else{

}

session_destroy();
header('location:index.php');


?>