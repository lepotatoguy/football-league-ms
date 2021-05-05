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



    <title>Add Team | BFPL</title>
    
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
    <h2>Add Team: </h2>
<form role = "form" action= "add_team.php" method = "POST">
  <div class="form-group">
    <label for="teamname">Team Name: </label>
    <input type="text" class="form-control" id="teamname" name="teamname">
  </div>
  <div class="form-group">
    <label for="current_rank">Current Rank: </label>
    <input type="number" class="form-control" id="current_rank" name="current_rank">
  </div>
  <div class="form-group">
    <label for="founded_at">Founded At: </label>
    <input type="number" class="form-control" id="founded_at" name="founded_at">
  </div>

  <div class="form-group">
    <label for="details">Club Details:</label>
    <textarea class="form-control" id="details" name="details" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="achievements">Achievements:</label>
    <textarea class="form-control" id="achievements" name="achievements" rows="3"></textarea>
  </div>
  <form>
  <div class="form-group">
    <label for="logo">Logo:</label>
    <input type="file" class="form-control-file" id="logo" name="logo">
  </div>
  <button type="submit" name="add_team" class="btn btn-primary">Submit</button>
</form>
  

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