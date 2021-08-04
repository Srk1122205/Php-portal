<?php
$id = $_GET['id'];

$servername = "localhost";

$username = "root";

$password = "";

$database = "player";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM player_registration WHERE id = $id";

  // use exec() because no results are returned
  $conn->exec($sql);
  header("Location:view.php");
  //echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
 ?>
