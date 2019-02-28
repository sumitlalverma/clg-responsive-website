<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con){
	echo "connection sucessfull";
}else{
	echo "unsucessful";
}
mysqli_select_db($con,'practical');
$login=$_POST['name'];
$passwd=$_POST['password'];
if($login!='name'&&$passwd!='password')
{
    $query="select * from users where signin=name='".$login."' and passwd='".$passwd."'" ;
    $res=mysqli_fetch_assoc($query);
    if($res){
        $_SESSION['username']=$login;
        echo "welcome to php";
    }
    else
    {
        echo'You entered username or password is incorrect';
    }
}
else
{
    echo'Enter both username and password';
}

?>