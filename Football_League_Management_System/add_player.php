<?php

include('server.php');
error_reporting(0);
$insert = false;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <title>Add Player | BFPL</title>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="login_admin.php">BFPL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login_admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="own_stats.php">My Stats</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_team.php">Team </a>
          <a class="dropdown-item" href="add_player.php">Player </a>
          <a class="dropdown-item" href="#">Manager </a>
        </div>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Show All
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="teams_db.php">Team </a>
          <a class="dropdown-item" href="players_db.php">Player </a>
          <a class="dropdown-item" href="#">Manager </a>
        </div>
      </li>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php 
if($insert == true){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your records has been inserted successfully.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
}
?>

<div class="container my-4">
    <h2>Add Player: </h2>
<form role = "form" action= "add_player.php" method = "POST">
  <div class="form-group">
    <label for="full_name">Full Name: </label>
    <input type="text" class="form-control" id="full_name" name="full_name">
  </div>
  <div class="form-group">
    <label for="birth_date">Current Rank: </label>
    <input type="date" class="form-control" id="birth_date" name="birth_date">
  </div>
  <div class="form-group">
    <label for="position1">Position 1: </label>
    <input type="text" class="form-control" id="position1" name="position1">
  </div>
  <div class="form-group">
    <label for="position2">Position 2: </label>
    <input type="text" class="form-control" id="position2" name="position2">
  </div>
  <div class="form-group">
    <label for="position3">Position 3: </label>
    <input type="text" class="form-control" id="position3" name="position3">
  </div>
  <div class="form-group">
    <label for="current_club">Current Club: </label>
    <input type="text" class="form-control" id="current_club" name="current_club">
  </div>
  <div class="form-group">
    <label for="prev_club">Previous Club: </label>
    <input type="text" class="form-control" id="prev_club" name="prev_club">
  </div>
  <div class="form-group">
    <label for="total_goals">Total Goals: </label>
    <input type="number" class="form-control" id="total_goals" name="total_goals">
  </div>
  <div class="form-group">
    <label for="total_cards">Total Cards: </label>
    <input type="number" class="form-control" id="total_cards" name="total_cards">
  </div>

  <div class="form-group">
    <label for="pic">Picture:</label>
    <input type="file" class="form-control-file" id="pic" name="pic">
  </div>
  <button type="submit" name="add_player" class="btn btn-primary">Submit</button>
</form>
  



</div>


</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>