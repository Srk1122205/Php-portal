<?php

$id = $_GET['id'];

$first_name = $_POST['fname'];

$last_name = $_POST['lname'];



$score = $_POST['score'];



$status = $_POST['status'];

$servername = "localhost";

$username = "root";

$password = "";

$database = "player";



try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "UPDATE player_registration SET first_name= '$first_name',last_name='$last_name',score='$score', status='$status'  WHERE id=$id";

    // use exec() because no results are returned

    $conn->exec($sql);
    header("Location: view.php");

    // echo "New record created successfully";

} catch (PDOException $e) {

    echo $sql . "<br>" . $e->getMessage();

}

?>