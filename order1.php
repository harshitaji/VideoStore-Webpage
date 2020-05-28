<?php

  //order.php
$con=mysqli_connect("localhost","root","","radio")
or die(mysqli_error($con));
session_start();
if(isset($_POST)){
 $order=$_POST['movie'];

 $price=$_POST['price'];
$userid=$_SESSION['username'];
 $sql = "insert into video(movie,username,price)values('$order','$userid','$price')";

if (mysqli_query($con, $sql)) {

    echo "ADDED in ur list";
    header("refresh:2;url=video.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>

