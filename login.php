<?php
$username=$_POST['username'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","radio");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login` WHERE `username`='$username'&& `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['log']=1;
	header("refresh:1;url=welcome.php");

}
else
{
	echo "please fill proper details";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}

$_SESSION['id']=mysqli_insert_id($con);
$_SESSION['username']=$username;
?>