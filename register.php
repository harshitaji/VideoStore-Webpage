
<?php
session_start();
?>

<html>
<head>
<style>
body 
{
  font-family: cursive;
}

* {
  box-sizing: border-box;
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
  background: #f1f2f3;
}

input[type=text]:focus, input[type=password]:focus 
{
  background-color: #ddd;
  outline: none;
}







.registerbtn 
{
  background-color: #505abf;
  color: white;
  padding: 5px 2px;
  margin: 8px 0;
  cursor: pointer;
  width: 70%;
  opacity: 0.9;
border : none
}

.registerbtn:hover 
{
  opacity: 1;
}


.signin 
{
  background-color: #f1f1f1;
  text-align: center;
}

</style>
</head>
<body>

<center>
<form action="register1.php"method="POST">
  <div class="container">
    <h1>Register Youself</h1>
    <p>Fill in this form to create an account.</p>
   

    <label for="username"style="float:left;"><b>UserID:</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"style="float:left;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="address"style="float:left;"><b>Address</b></label>
    <input type="text" placeholder="Add Location" name="address" required>
   <button type="submit"  class="registerbtn">Register</button>
   
  </div>
 
</form>
</center>
</body>
</html>

<?php
session_destroy();
?>