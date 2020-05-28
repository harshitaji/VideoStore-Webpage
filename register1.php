<?php
if(isset($_POST)){
 $username=$_POST['username'];
 $address=$_POST['address']; 
 $password=$_POST['password'];
 session_start();
 $con=mysqli_connect("localhost","root","","radio");//mysqli("localhost","username of database","password of database","database name")
$sql = "INSERT INTO login (username,address,password) VALUES('$username','$address','$password')";



if (mysqli_query($con, $sql)) {
	$_SESSION['log']=1;
	header("refresh:1;url=index.php");

    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>




	