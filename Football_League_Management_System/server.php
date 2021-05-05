<?php

session_start();

// initiatilizng variables

$username = "";
$email = "";
$password = "";
$confirm_password = "";

$errors = array();

// connect to db

$db = mysqli_connect('localhost', 'root','','bfpl') or die("could not connect to database.");


// REGISTER SERVER (FAN)

if(isset($_POST['reg_user'])){

//escape string gula baad deyar jonno eta use kora hoise (such as space/blabla)
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
$users = mysqli_real_escape_string($db, $_POST['user']);


// validating form

if(empty($username)) {array_push($errors, "Username is required.");}
if(empty($email)) {array_push($errors, "Email is required.");}
if(empty($password)) {array_push($errors, "Password is required.");}

if($password != $confirm_password) {array_push($errors, "Password is not the same.");}

// checking database for existing user

// limit 1 reson ekta hoilei hoise
$user_check_query = "SELECT * FROM users WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){

    if($user['username'] == $username) {array_push($errors, "Username already exists.");}
    if($user['email'] == $username) {array_push($errors, "Email already exists.");}
}

// register the user (if no error)

if(count($errors) == 0){

     $password_final = md5($password); //this will encrypt a password 
     $query = "INSERT INTO users (email, username, user, password) VALUES ('$email', '$username', '$users', '$password_final')";

     mysqli_query($db, $query);
     $_SESSION['username'] = $username;
     $_SESSION['user'] = $user;
     $_SESSION['success'] = "You are now logged in.";
     
     
      header('location: dashboard_fan.php');


}

}

// REGISTER SERVER (Player)

if(isset($_POST['reg_player'])){

   //escape string gula baad deyar jonno eta use kora hoise (such as space/blabla)
   $username = mysqli_real_escape_string($db, $_POST['username']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $password = mysqli_real_escape_string($db, $_POST['password']);
   $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
   $users = mysqli_real_escape_string($db, $_POST['user']);
   
   
   // validating form
   
   if(empty($username)) {array_push($errors, "Username is required.");}
   if(empty($email)) {array_push($errors, "Email is required.");}
   if(empty($password)) {array_push($errors, "Password is required.");}
   
   if($password != $confirm_password) {array_push($errors, "Password is not the same.");}
   
   // checking database for existing user
   
   // limit 1 reson ekta hoilei hoise
   $user_check_query = "SELECT * FROM players WHERE username = '$username' or email = '$email' LIMIT 1";
   
   $results = mysqli_query($db, $user_check_query);
   $user = mysqli_fetch_assoc($results);
   
   if($user){
   
       if($user['username'] == $username) {array_push($errors, "Username already exists.");}
       if($user['email'] == $username) {array_push($errors, "Email already exists.");}
   }
   
   // register the user (if no error)
   
   if(count($errors) == 0){
   
        $password_final = md5($password); //this will encrypt a password 
        $query = "INSERT INTO players (email, username, user, password) VALUES ('$email', '$username', '$users', '$password_final')";
   
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['user'] = $user;
        $_SESSION['success'] = "You are now logged in.";
        
        
           header('location: dashboard_player.php');
        
        
   
   }
   
   }


// REGISTER SERVER (Manager)

if(isset($_POST['reg_manager'])){

   //escape string gula baad deyar jonno eta use kora hoise (such as space/blabla)
   $username = mysqli_real_escape_string($db, $_POST['username']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $password = mysqli_real_escape_string($db, $_POST['password']);
   $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
   $users = mysqli_real_escape_string($db, $_POST['user']);
   
   
   // validating form
   
   if(empty($username)) {array_push($errors, "Username is required.");}
   if(empty($email)) {array_push($errors, "Email is required.");}
   if(empty($password)) {array_push($errors, "Password is required.");}
   
   if($password != $confirm_password) {array_push($errors, "Password is not the same.");}
   
   // checking database for existing user
   
   // limit 1 reson ekta hoilei hoise
   $user_check_query = "SELECT * FROM managers WHERE username = '$username' or email = '$email' LIMIT 1";
   
   $results = mysqli_query($db, $user_check_query);
   $user = mysqli_fetch_assoc($result);
   
   if($user){
   
       if($user['username'] == $username) {array_push($errors, "Username already exists.");}
       if($user['email'] == $username) {array_push($errors, "Email already exists.");}
   }
   
   // register the user (if no error)
   
   if(count($errors) == 0){
   
        $password_final = md5($password); //this will encrypt a password 
        $query = "INSERT INTO managers (email, username, user, password) VALUES ('$email', '$username', '$users', '$password_final')";
   
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['user'] = $user;
        $_SESSION['success'] = "You are now logged in.";
        
        
           header('location: dashboard_manager.php');
        
        
   
   }
   
   }


// LOGIN USER (Fan)

if(isset($_POST['login_user'])){

     $username = mysqli_real_escape_string($db, $_POST['username']);
     $password = mysqli_real_escape_string($db, $_POST['password']);

    // if(empty($username)) {array_push($errors, "Username is required.");}
    // if(empty($password)) {array_push($errors, "Password is required.");}

    // if(count($errors) == 0){

        $password = md5($password); //this will encrypt a password 

        $query = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        if(mysqli_num_rows($results)){
            while($row = $results->fetch_assoc()){
                $_SESSION['username'] = $username;
                //$_SESSION['user'] = $user;
                $_SESSION['success'] = "Logged in Successfully.";
                // header("location: welcome.php");
              
                // $_SESSION['user'] = $row['user'];
                $user =$row['user'];
    
                if($user == 'manager'){
                    
                     header('location: dashboard_manager.php');
                 }
                 else if($user == 'player'){
                   
                     header('location: dashboard_player.php');
                 }
                 else if($user == 'fan'){
                    header('location: dashboard_fan.php');
                 }
            }
            
            
            

        
            }



}



// LOGIN Admin

if(isset($_POST['login_admin'])){

   $username = mysqli_real_escape_string($db, $_POST['username']);
   $password = mysqli_real_escape_string($db, $_POST['password']);

  // if(empty($username)) {array_push($errors, "Username is required.");}
  // if(empty($password)) {array_push($errors, "Password is required.");}

  // if(count($errors) == 0){

     // $password = md5($password); //this will encrypt a password 

      $query = "SELECT * FROM admin WHERE username = '$username' AND password='$password'";
      $results = mysqli_query($db, $query);

      if(mysqli_num_rows($results)){
          while($row = $results->fetch_assoc()){
              $_SESSION['username'] = $username;
              //$_SESSION['user'] = $user;
              $_SESSION['success'] = "Logged in Successfully.";
              // header("location: welcome.php");
            
              // $_SESSION['user'] = $row['user'];
              $user =$row['user'];
              header('location: dashboard_admin.php');
  
          }
          
          
          

      
          }



}

//Add Team

if(isset($_POST['add_team'])){

   //escape string gula baad deyar jonno eta use kora hoise (such as space/blabla)
   $teamname = mysqli_real_escape_string($db, $_POST['teamname']);
   $founded_at = mysqli_real_escape_string($db, $_POST['founded_at']);
   $current_rank = mysqli_real_escape_string($db, $_POST['current_rank']);
   $details = mysqli_real_escape_string($db, $_POST['details']);
   $achievements = mysqli_real_escape_string($db, $_POST['achievements']);
   //$logo =  $_POST['logo'];
   #$target = "images/".basename($_FILES['logo']['name']) //place to save imgs

   #$logo =  $_FILES['logo']['name'];
   
   // validating form
   
   if(empty($teamname)) {array_push($errors, "Team Name is required.");}
   if(empty($founded_at)) {array_push($errors, "Rank is required.");}
   if(empty($current_rank)) {array_push($errors, "Rank is required.");}
   if(empty($details)) {array_push($errors, "Detail is required.");}
   if(empty($achievements)) {array_push($errors, "Achievement is required.");}
   
   

   
   // checking database for existing user
   
   // limit 1 reson ekta hoilei hoise
   $user_check_query = "SELECT * FROM teams WHERE teamname = '$teamname'";
   
   $results = mysqli_query($db, $user_check_query);
   $user = mysqli_fetch_assoc($results);
   
   if($user){
   
       if($user['teamname'] == $teamname) {array_push($errors, "Team name already exists.");}
   }
   
   // register the team (if no error)
   
   // $sql1 = "INSERT INTO team_test  VALUES (NULL,'test')";

   // mysqli_query($db, $sql1);
   $sql1 = "INSERT INTO teams  VALUES (NULL,'$teamname', $founded_at, '$details', $current_rank, '$achievements', '')";

   $res = mysqli_query($db, $sql1);
   // if (move_uploaded_file($_FILES['tmp_name']['name'], $target)){
   //    echo "image uploaded successfully";
   // }
   if($res){
      $insert = true;
   }
   
      //    $quer4 = "INSERT INTO teams  VALUES (Null,'test', 0, 'test', 0, 'test', '')";
      //   mysqli_query($db, $query4);
         //team_id name founded_at details current_rakn achievements logo
        //header('location: add_team.php');

   
   
   }

//Add Player

if(isset($_POST['add_player'])){

   //escape string gula baad deyar jonno eta use kora hoise (such as space/blabla)
   $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
   $birth_date = $_POST['birth_date'];
   $position1 = mysqli_real_escape_string($db, $_POST['position1']);
   $position2 = mysqli_real_escape_string($db, $_POST['position2']);
   $position3 = mysqli_real_escape_string($db, $_POST['position3']);
   $current_club = mysqli_real_escape_string($db, $_POST['current_club']);
   $prev_club = mysqli_real_escape_string($db, $_POST['prev_club']);
   $total_goals = mysqli_real_escape_string($db, $_POST['total_goals']);
   $total_cards = mysqli_real_escape_string($db, $_POST['total_cards']);
   //$logo =  $_POST['logo'];
   #$target = "images/".basename($_FILES['logo']['name']) //place to save imgs

   #$logo =  $_FILES['logo']['name'];
   
   // validating form
   
   // if(empty($teamname)) {array_push($errors, "Team Name is required.");}
   // if(empty($founded_at)) {array_push($errors, "Rank is required.");}
   // if(empty($current_rank)) {array_push($errors, "Rank is required.");}
   // if(empty($details)) {array_push($errors, "Detail is required.");}
   // if(empty($achievements)) {array_push($errors, "Achievement is required.");}
   
   

   
   // checking database for existing user
   
   // limit 1 reson ekta hoilei hoise
   // $user_check_query = "SELECT * FROM teams WHERE teamname = '$teamname'";
   
   // $results = mysqli_query($db, $user_check_query);
   // $user = mysqli_fetch_assoc($results);
   
   // if($user){
   
   //     if($user['teamname'] == $teamname) {array_push($errors, "Team name already exists.");}
   // }
   
   // register the team (if no error)
   
   // $sql1 = "INSERT INTO team_test  VALUES (NULL,'test')";
   
   
   

   
   // mysqli_query($db, $sql1);
   $sql1 = "INSERT INTO player_info  VALUES (NULL,'$full_name', '$birth_date', '$position1', '$position2', '$position3', $current_club, '$prev_club', '$total_goals', '$total_cards', '')";

   $res = mysqli_query($db, $sql1);
   // if (move_uploaded_file($_FILES['tmp_name']['name'], $target)){
   //    echo "image uploaded successfully";
   // }
   if($res){
      $insert = true;
   }
   
      //    $quer4 = "INSERT INTO teams  VALUES (Null,'test', 0, 'test', 0, 'test', '')";
      //   mysqli_query($db, $query4);
         //team_id name founded_at details current_rakn achievements logo
        //header('location: add_team.php');

   
   
   }


?>