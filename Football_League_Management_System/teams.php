<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Teams | BFPL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">

  <script src="https://kit.fontawesome.com/0bc265037a.js" crossorigin="anonymous"></script>



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <!--<a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <<a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 02 966 14 56</a> -->
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@bfpl.gov.bd</a> 
          </div>
          <div class="col-lFg-3 text-right">
            <a href="login.php" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <i class="fas fa-futbol fa-3x"></i>
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.php" class="nav-link text-left">Home</a>
                </li>
                <li class="has-children">
                  <a href="about.php" class="nav-link text-left">About</a>
                  <ul class="dropdown">
                    <li><a href="players.php">Our Players</a></li>
                    <li><a href="teams.php">Our Teams</a></li>
                    <li><a href="about.php">Our Premier League</a></li>
                  </ul>
                </li>

                <li class="has-children">
                  <a href="#" class="nav-link text-left">Matches</a>
                  <ul class="dropdown">
                    <li><a href="upcoming_matches.php">Upcoming Matches</a></li>
                    <li><a href="prev_matches.php">Previous Matches</a></li>
                  </ul>
                </li>
                
                
                <li>
                    <a href="contact.php" class="nav-link text-left">Contact</a>
                  </li>
                  
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Teams</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="#">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span>About</span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Teams</span>
      </div>
    </div>
      

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Our Teams</span>
            </h2>
          </div>
        </div>
        <div class="row">
          

          <?php
$sql = "SELECT * FROM `teams` ORDER BY `teams`.`current_rank` ASC";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($result)){
    

?>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
            <div class="feature-1 border person text-center">
              <?php
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['logo']) . '"
            class="img-fluid" />';
                            ?>
              <div class="feature-1-content">
                <h2><?php echo $row['teamname'] ?></h2>
                <span class="position mb-3 d-block">Current Rank: <?php echo $row['current_rank'] ?></span>    
                <p><?php echo $row['details'] ?></p>
                <p>Achievements: <?php echo $row['achievements'] ?></p>
              </div>
            </div>
</div> <?php } ?>

     
        </div>
      </div>
    </div>


    <div class="footer">
      <div class="container">
        <div class="row">
         <!--<div class="col-lg-3">
            <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>-->

          <div class="col-lg-3">
            <h3 class="footer-heading"><span>BFPL</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Fixtures</a></li>
                <li><a href="#">Results</a></li>
                <li><a href="#">Tables</a></li>
                <li><a href="#">Transfers</a></li>
                <li><a href="#">Broadcast</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Players</a></li>
                <li><a href="#">Managers</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Social</a></li>
                <li><a href="#">Fantasy</a></li>
            </ul>
          </div>

          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Stats</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Player Stats</a></li>
                <li><a href="#">Club Stats</a></li>
                <li><a href="#">All-time Stats</a></li>
                <li><a href="#">Records</a></li>
                <li><a href="#">Head-to-Head</a></li>
                <li><a href="#">Player Comparison</a></li>
                <li><a href="#">Awards</a></li>
            </ul>
          </div>

          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Teams</span></h3>
              <ul class="list-unstyled">
                  <li><a href="https://www.bracu.ac.bd/academics/departments/architecture">Abahani FC</a></li>
                  <li><a href="https://www.bracu.ac.bd/academics/institutes-and-schools/brac-business-school">Mohamedan FC</a></li>
                  <li><a href="https://www.bracu.ac.bd/academics/departments/computer-science-and-engineering">Hatem Ali FC</a></li>
                  <li><a href="https://www.bracu.ac.bd/academics/departments/electrical-and-electronic-engineering">FC Sheikh Jamal</a></li>
                  <li><a href="https://www.bracu.ac.bd/academics/departments/english-and-humanities">Sheikh Kamal FC</a></li>
                  <li><a href="https://www.bracu.ac.bd/academics/departments/economics-and-social-sciences">Dhanmondi Boys FC</a></li>
                  <li><a href="https://www.bracu.ac.bd/academics/departments/mathematics-and-natural-sciences">Sheikh Rasel FC</a></li>
                  <li><a href="https://www.bracu.ac.bd/academics/departments/pharmacy">Kodu Mia FS</a></li>
                  
              </ul>
          </div>

          

          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://facebook.com/joyanta.j.mondal" target="_blank" >Joyanta J. Mondal</a>
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>