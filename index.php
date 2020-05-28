<?php
session_start();
?>
<html>
<head>
<style>
a,body 
{
  font-family: cursive;
}


.container 
{
  width: 600px;
  height: 500px;
  padding:5px;
}

input[type=text], input[type=password] 
{
  width: 100%;
  padding: 8px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #c5c7c9;
}

input[type=text]:focus, input[type=password]:focus 
{
  background-color: #d6d6c2;
  outline: none;
}

hr 
{
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn 
{font-family:cursive;
  background-color: #505abf;
  color: white;
  padding: 5px 2px;
  margin: 8px 0;
  cursor: pointer;
  width: 65%;
  opacity: 0.9;
border : none
}

.registerbtn:hover 
{
  opacity: 1;
}




</style>
</head>
<body>



  <center>
  	 <div class="container">
<h1> RadioShack</h1>
 <h2>Login</h2>
 <form method="POST" action="login.php">
	<label for="username"style="float:left;"><b>UserID:</b></label><input type="text" name="username"size="10"><br><br>
    <label for="password"style="float:left;"><b>Password</b></label><input type="password" name="password"size="10"><br><br>
	
    <center><button type="submit"  class="registerbtn">Register</button></center>
  <a href="register.php">click here to register</a>


</form>
</div>
</center>
</body>
</html>
</form>
</center>
</body>
</html>

<?php
session_destroy();
?>


