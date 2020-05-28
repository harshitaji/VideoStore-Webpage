<?php

$username = "root";
$password = "";
$db="hotel_login";

// Create connection
$conn = new PDO("mysql:host=localhost; dbname=$db",$username, $password);

// Check connection
if (isset($_POST['add'])) {
   $quantity=$_POST['quantity'];
   $sql=$conn->prepare("  Insert into food(food)
                                                  values(:quantity)");
   $conn->beginTransaction();
   $sql->execute(array($quantity));
   echo "<h2>order added</h2>";
 $conn->commit();
    }
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
</style>
</head>
<body>
<h1>Menu</h1>
<p>We serve with Love....</p>
<br>

<form method="post" action="h1.php">
    <select name="quantity">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  </p>
<button type="submit" name="add">add</button>
   </form>

</body>
</html>
