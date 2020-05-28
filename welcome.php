<?php
session_start();

if(isset($_SESSION['log']))
{
 
       
?>

<html>
<head>
<title></title>
</head>
<body>


<html>
<head>
<meta charset="UTF-8">
       
 <meta name="viewport" content="width=device-width,intial-scale=1">
        
<title>Foody</title>
        
        
<style>
           
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
            
            
.background{
                 background-image: url("banner2.jpg");
                 background-color:linear-gradient(#032C48,#0897F6 );
                 background-repeat: no-repeat;
                  
                  background-size: 1000px 200px;
                
                
                                            padding:15px;
                 
                                            color:#FAFBFC;
                 
                                             font-family:cursive;
                
                                             font-size:40px;
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
    

<body>
 <ul>
 <li><a class="active" href="welcome.php">Home</a></li>
 <li><a href="#"><?php echo $_SESSION['username'];?></a></li>
       
            
        
        <li><a href="index.php" >logout</a></li>


        
</ul>
            
<div class="background">
            
<center>
                
<div class="content">
                    
<h3>RadioShack</h3>
            
                
</div>
             
</center>
        
</div>
        
        

        
<!-----------navbar end---------------------->
      
<center>
            
<div class="one">
             
   <div class="thumbnail">
    <img src="audio.jpg" alt="BKC HOTEL"style="height: 280;width:300px;">
    <a href="bkc.php">
      <h2>Audio's</h2></a>
    </div>

   <div class="thumbnail">
    <img src="video.jpg" alt="BKC HOTEL"style="height: 280;width:300px;">
      <a href="video.php"><h2>Video's</h2></a>
   </div>
</div>
</center>
   </body>
    </html>








<?php
}
else
{
	echo "please fill proper details";
	header("refresh:2;url=index.php");
}

?>