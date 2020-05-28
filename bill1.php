<?php
$con=mysqli_connect("localhost","root","","radio")
or die(mysqli_error($con));
session_start();

$userid=$_SESSION['username'];
$sql="SELECT * FROM `video` WHERE username='$userid'";
$result=mysqli_query($con,$sql);
$resultcheck=mysqli_num_rows($result);
  
$q1="SELECT SUM(price) as 'total' from video";
$res=mysqli_query($con,$q1);
$data=mysqli_fetch_array($res);
?>
<html>
<head><style>
           
 .one{
  margin-top:40px;
    
            margin-left:50px;
 } 
       
ul {
 list-style-type: none;
      
        margin: 0;
               
        padding: 0;
               
        width:auto;
               
        overflow: hidden;
              
      background-color:#032C48;
     }
            
li {
                float: left;
            }
   
li a {
    display: block;
                
           color: white;
                
          text-align: center;
               
          padding: 14px 16px;
               
          text-decoration: none;
              
          font-family:cursive;
            }
         
li a:hover {
                background-color: #111;
            }
            
body{
     background-image: url("banner.jpg");
    background-repeat: no-repeat;
  background-size: 1050px 600px;
}            

            
            
.thumbnail{
                display: inline-block;
               
                                        height: auto;
               
                                        margin:10px;
                
                                        background-color: #fff;
               
                                        border: 5px solid #032C48;
               
                                        text-align: center;
                
                                        font-family:cursive;
                
            }
       
 </style>
</head>
</html>
<body>
 <ul>
 <li><a class="active" href="welcome.php">Home</a></li>
 <li><a href="#"><?php echo $_SESSION['username'];
?></a></li>
         <li><a href="index.php" >logout</a></li>
       
        
</ul>
 

<br>
<center>
  <div class="thumbnail">
<h2 style=" color:white;font-family:cursive;background: #032C48">Bill</h2>
<?php
if($resultcheck > 0){
  	
  
  	while($row=mysqli_fetch_assoc($result)){
  	
  	echo"<label >Audio Name:</label>", $row['movie']."<br>";
  	echo "<label>Price:</label>",$row['price']."<br>";	
  
   
  	}
  }
  
   echo "<label><b>Total:</b></label>".$data['total'];
    echo "</div><br>";
   
?>
</center>
</body>

