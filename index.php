<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="index.css">
  
  <title>CORNERSTONE CHURCH</title>

</head>
<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-secondary fixed-top">
    <div class="container">
        <!-- logo -->
        <a class="navbar-brand" href="index.php">CORNERSTONE CHURCH</a>
        <!--Toggle Btn-->
        <button class="navbar-toggler shawdow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Side bar-->
        <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <!-- Sidebar Header-->
            <div class="offcanvas-header text-center text-black border-bottom">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CORNERSTONE CHURCH</h5>
                <button type="button" class="btn-close btn-close-white shawdow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!--Sidebar Body-->
            <div class="offcanvas-body d-flex-column p-4">
                <ul class="navbar-nav justify-content-end-center align-items-center fs-10 flex-grow-1 pe-3">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="resources.php">Resources</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <!-- Login / Sign up / Logout -->
                <div class="d-flex justify-content-center align-items-center gap-3">
                    <?php if (isset($_SESSION['email'])): ?>
                        <a href="logout.php" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: black;">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="text-black">Login</a>
                        <a href="signup.php" class="text-black text-decoration-none px-3 py-1 rounded-4" style="background-color: gold;">Signup</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</nav>

  
<section class="w-100 vh-100 d-flex flex-column justify-content-center align-items-center fs-2" style="background-image: url('bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; color: white;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="image-container">
            <img src="indexpic.jpg" alt="Cornerstone Church">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h2>Welcome to Cornerstone</h2>
          <p>We are delighted to have you here! At Cornerstone Church, we believe in the power of community and the impact of giving back.</p>
          <p>Our volunteer management system is designed to streamline the volunteer process, making it easier for you to find and participate in opportunities that match your skills and interests.</p>
        </div>
      </div>
    </div>
</section>

    <!-- Upcoming Events Section -->
    <section class="events-section">
        <h2>Upcoming Events</h2>
        <div class="event-cards">
            <div class="event-card">
                <h3>An Overflowing Hope</h3>
                <p>May the God of hope fill you with all joy and peace as you trust in him, so that you may overflow with hope by the power of the Holy Spirit.
                Romans 15:13 NIV</p>
            </div>
            <div class="event-card">
                <h3>Event 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
            <div class="event-card">
                <h3>Event 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
            <div class="event-card">
                <h3>Event 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
            <div class="event-card">
                <h3>Event 5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
            <div class="event-card">
                <h3>Event 6</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</p>
            </div>
        </div>
    </section>
        <!-- Footer -->
        <footer id="colophon" class="site-footer">
            <div class="wrapper-medium row footer-main">
                <div class="column large-4 small-12">
                    <div class="details">
                        <h2>Business Office Address</h2>
                        <p>Quirino Highway, Tungkong Mangga San Jose del Monte City, Bulacan</p>
                    </div>
                </div>
                <div class="column large-4 small-12">
                    <div class="details">
                        <h2>Contact Numbers</h2>
                        <p>+63933-819-1360  |  +63948-229-7036 | +63905-501-0165</p>
                    </div>
                </div>
            </div>
            <div class="wrapper-medium">
                <div class="footer-info">
                    <div class="divider"></div>
                    <img src="https://cornerstonephilippines.com/wp-content/themes/cornerstone-main/dist/images/logo/cs_white.png" alt="Cornerstone" class="footer-logo">
                    <p class="info">&copy;2024 CornerstoneGlobal, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
