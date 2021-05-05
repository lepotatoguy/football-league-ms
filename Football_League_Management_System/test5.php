<?php

session_start();

// initiatilizng variables

$errors = array();

// connect to db

$db = mysqli_connect('localhost', 'root','','bfpl') or die("could not connect to database.");

$sql1 = "INSERT INTO team_test  VALUES (NULL,'test')";

        mysqli_query($db, $sql1);
          
        
$sql = "SELECT * FROM  team_test";
    $result = mysqli_query($db, $sql);
    while ($row = $result->fetch_assoc()) {
echo $row['id'];
    }
// //team_id name founded_at details current_rakn achievements logo
// header('location: add_team.php');
?>