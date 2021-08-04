<?php

$servername = "localhost";

$username = "root";

$password = "";

$database = "player";
$no =1;



try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //pagination code start
    $limit = 10;
    if(isset($_REQUEST['page']))
    {
        $page = $_REQUEST['page'];
    }
    else
    {
        $page = 1;
    }
    $offset = ($page -1) * $limit;
      //pagination code end
    $stmt = $conn->prepare("SELECT * FROM player_registration LIMIT {$offset},{$limit}");
    $stmt->execute();

  // set the resulting array to associative
    $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
// print_r($result);
// die();

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}
$conn = null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>All Players List</h2>
  <a href="create.php" class="btn btn-success">Create Player</a>     <div class="table-responsive">       
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr.NO</th>
        <th>Firstname</th>
        <th>Lastname</th>
      
      <th>Edit</th>
        <th>Delete</th>
        <th>Score</th>
        <th>Status2</th>
        
      </tr>
    </thead>
    <tbody>
      <?php foreach($result as $player){  ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $player['first_name']; ?></td>
        <td><?php echo $player['last_name']; ?></td>
       
      
        
        <td><a href="edit.php?id=<?php echo $player['id']; ?>" class="btn btn-info">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $player['id']; ?>" class="btn btn-danger">Delete</a></td>
        <td><?php echo $player['score']; ?></td>
        <td><?php echo $player['status']; ?></td>
      </tr>
    <?php }   
   ?>
      
    </tbody>
  </table>
  <?php
                                         $con=mysqli_connect("localhost","root","","player");
                                        $query = "SELECT * FROM `player_registration`";
                                        $result = mysqli_query($con, $query) or die("Query field");

                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            $total_record = mysqli_num_rows($result);
                                            $limit = 10;
                                            $total_page = ceil($total_record/$limit);
                                            echo ' <h6 class="card-title">Showing '.($offset + 1).' to '.($offset + $limit).' of '.$total_page.' entries</h6>
                                                   <div class="bootstrap-pagination">
                                                   <nav>
                                                   <ul class="pagination justify-content-end">';
                                            if($page > 1)
                                            {
                                            echo '<li class="page-item"><a class="page-link" href="view.php?page='.($page - 1).'">Previous</a></li>';
                                            }
                                            for($i = 1; $i <= $total_page; $i++)
                                            {
                                                if($i == $page)
                                                {
                                                    $active = "active";
                                                }
                                                else
                                                {
                                                    $active = "";
                                                }
                                                
                                                    echo '<li class="page-item '.$active.'"><a class="page-link" href="view.php?page='.$i.'">'.$i.'</a></li>';

                                              
                                            }

                                           if($total_page > $page)
                                            {
                                                echo ' <li class="page-item"><a class="page-link" href="view.php?page='.($page + 1).'">Next</a></li>';
                                            }
                                            echo '</div></nav></ul>';
                                        }
                                        ?>
  </div>
</div>

</body>
</html>
