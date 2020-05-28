<?php
session_start();
?><html>
<head>
<meta charset="UTF-8">
       
 <meta name="viewport" content="width=device-width,intial-scale=1">
        
<title>RadioShack</title>
        
        
<style>
           
 .one{
  border: 5px solid #303c6c;
  margin-top:10px;
   margin-right:20px;  
            margin-left:20px;
 } 
       
ul {
 list-style-type: none;
      
        margin: 0;
               
        padding: 0;
               
        width:auto;
               
        overflow: hidden;
              
      background-color:#032C48;
     }
     .li1{
  float: left;
   color: white;
    font-family:cursive;
 }           

            
a {
                float:right;
            }
   
li a {
    display: block;
                
           color: white;
               
          padding: 14px 16px;
               
          text-decoration: none;
              
          font-family:cursive;
            }
         
li a:hover {
                background-color: #111;
            }
            
 
            
  #pic{
    margin-bottom:5px;
    margin-right: 5px;
    margin-left: 5px;
    margin-top:5px;
    height:90px;
    width:130px;
  }    
  .hotelinfo{
    height:150px;
    width:132px;
  }      
  .thumbnail1{
                display: inline-block;
               
                                        height: auto;
               
                                        margin-left:58px;
                                        margin-top: 30px;
                                        margin-bottom:30px;
                
                                        background-color: #fff;
               
                                        border: 5px solid #303c6c;
               
                                        text-align: right;
                
                                        font-family:cursive;
                
            }

       
.thumbnail{
                display: inline-block;
               
                                        height: auto;
               
                                        margin-left:58px;
                                        margin-top: 30px;
                                        margin-bottom:30px;
                
                                        background-color: #fff;
               
                                        border: 5px solid #303c6c;
               
                                        text-align: center;
                
                                        font-family:cursive;
                
            }
       
 </style>

</head>
    

<body>
     

        
<ul>
 <li class="li1"><h2 style="margin-left:20px">RadioShack</h2></li>
            
        <li><a  href="welcome.php">Home</a></li>
          <li><a href="#"><?php echo $_SESSION['username'];?></a></li>
          <li><a href="index.php" >logout</a></li>

   
        
        
</ul>
        
        
<!-----------navbar end---------------------->
 

<div>
   
<div class="one">
  <center><h2 style=" color:white;font-family:cursive;background: #032C48"><b>Audio's Available</b></h2></center>
  <div class="thumbnail">
            <img src="music.jpg" id="pic"alt="BKC HOTEL"><br>
          <form method="POST" action="order.php"><center>
              <label>name</label><input type="text" name="song"value="Despacito"style=" color:white;font-family:cursive;background: #032C48"size="5"readonly><br>
              <label>price</label><input type="text" name="price"value="70"style=" color:white;font-family:cursive;background: #032C48 "size="1"readonly><br>
              <input type="submit"value="add"></center>
          </form>

</div>    
<div class="thumbnail">
            <img src="music.jpg" id="pic"alt="BKC HOTEL"><br>
          <form method="POST" action="order.php"><center>
              <label>name</label><input type="text" name="song"value="Cheap Thrills"style=" color:white;font-family:cursive;background: #032C48"size="5"readonly><br>
              <label>price</label><input type="text" name="price"value="45"style=" color:white;font-family:cursive;background: #032C48 "size="1"readonly><br>
              <input type="submit"value="add"></center>
          </form>

</div>  
<div class="thumbnail">
            <img src="music.jpg" id="pic"alt="BKC HOTEL"><br>
          <form method="POST" action="order.php"><center>
              <label>name</label><input type="text" name="song"value="Taki Taki"style=" color:white;font-family:cursive;background: #032C48"size="5"readonly><br>
              <label>price</label><input type="text" name="price"value="95"style=" color:white;font-family:cursive;background: #032C48 "size="1"readonly><br>
              <input type="submit"value="add"></center>
          </form>

</div>  
<div class="thumbnail">
            <img src="music.jpg" id="pic"alt="BKC HOTEL"><br>
          <form method="POST" action="order.php"><center>
              <label>name</label><input type="text" name="song"value="Trampoline"style=" color:white;font-family:cursive;background: #032C48"size="5"readonly><br>
              <label>price</label><input type="text" name="price"value="75"style=" color:white;font-family:cursive;background: #032C48 "size="1"readonly><br>
              <input type="submit"value="add"></center>
          </form>

</div>  
<div class="thumbnail">
            <img src="music.jpg" id="pic"alt="BKC HOTEL"><br>
          <form method="POST" action="order.php"><center>
              <label>name</label><input type="text" name="song"value="Ghost"style=" color:white;font-family:cursive;background: #032C48"size="5"readonly><br>
              <label>price</label><input type="text" name="price"value="55"style=" color:white;font-family:cursive;background: #032C48 "size="1"readonly><br>
              <input type="submit"value="add"></center>
          </form>

</div>  
<div class="thumbnail">
            <img src="music.jpg" id="pic"alt="BKC HOTEL"><br>
          <form method="POST" action="order.php"><center>
              <label>name</label><input type="text" name="song"value="Havana"style=" color:white;font-family:cursive;background: #032C48"size="5"readonly><br>
              <label>price</label><input type="text" name="price"value="110"style=" color:white;font-family:cursive;background: #032C48 "size="1"readonly><br>
              <input type="submit"value="add"></center>
          </form>

</div>  <div class="thumbnail">
            <img src="music.jpg" id="pic"alt="BKC HOTEL"><br>
          <form method="POST" action="order.php"><center>
              <label>name</label><input type="text"id="in" name="song"value="Bala"style=" color:white;font-family:cursive;background: #032C48"size="5"readonly><br>
              <label>price</label><input type="text" id="in"name="price"value="50"style=" color:white;font-family:cursive;background: #032C48 "size="1"readonly><br>
              <input type="submit"value="add"></center>
          </form>

</div>  <div class="thumbnail">
            <img src="music.jpg" id="pic"alt="BKC HOTEL"><br>
          <form method="POST" action="order.php"><center>
              <label>name</label><input type="text"id="in" name="song"value="Duniya"style=" color:white;font-family:cursive;background: #032C48"size="5"readonly><br>
              <label>price</label><input type="text" id="in"name="price"value="50"style=" color:white;font-family:cursive;background: #032C48 "size="1"readonly><br>
              <input type="submit"value="add"></center>
          </form>

</div>      

 
<form method="POST" action="bill.php">
    <center>
     <button> <h2 style=" font-family:cursive;background: #90ccf4">Order</h2></button>  
   </center>
     </form>       </body>
    </html>



