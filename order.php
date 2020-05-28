<?php

  //order.php
$con=mysqli_connect("localhost","root","","radio")
or die(mysqli_error($con));
session_start();
if(isset($_POST)){
 $order=$_POST['song'];

 $price=$_POST['price'];
$userid=$_SESSION['username'];
 $sql = "insert into audio(song,username,price)values('$order','$userid','$price')";

if (mysqli_query($con, $sql)) {

    echo "ADDED in ur list";
    header("refresh:2;url=bkc.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>

