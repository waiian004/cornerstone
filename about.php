<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['email']);

// Include any other necessary files or configurations here

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="about.css" />

  <title>CORNERSTONE CHURCH</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">CORNERSTONE CHURCH</a>
            <button class="navbar-toggler shawdow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header text-center text-black border-bottom">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CORNERSTONE CHURCH</h5>
                <button type="button" class="btn-close btn-close-white shawdow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
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
                    <div class="d-flex justify-content-center align-items-center gap-3">
                        <?php if ($isLoggedIn): ?>
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


     <!-- Main Section -->
     <section class="main-section">
        <div class="about-container">
            <div class="text-box">
                <h2>About Cornerstone Church</h2>
                <p>Cornerstone Church has been a cornerstone of our community for over 50 years, providing spiritual guidance, support, and a sense of belonging. Our mission is to spread love, compassion, and service through various outreach programs and volunteer initiatives.</p>
            </div>
            <div class="text-box">
                <h2>Our Volunteer Program</h2>
                <p>Our volunteer program is essential to our mission. We offer a wide range of opportunities for you to get involved, whether you have a few hours to spare or want to commit to a long-term project. Your contributions help us reach more people and create a stronger, more supportive community.</p>
            </div>
        </div>
        <div class="about-image">
            <img src="volunteers.png" alt="Cornerstone Volunteers">
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <h2>Meet Our Team</h2>
        <p>Our dedicated team is here to support you every step of the way. From our volunteer coordinators to our administrative staff, we are committed to ensuring your volunteer experience is rewarding and impactful.</p>
        <div class="team-grid">
            <div class="team-member">
                <img src="team1.png" alt="Team Member">
                <h3>Juan Dela Cruz</h3>
                <p>Volunteer Coordinator</p>
            </div>
            <div class="team-member">
                <img src="team2.png" alt="Team Member">
                <h3>Jane Smith</h3>
                <p>Administrative Assistant</p>
            </div>
            <div class="team-member">
                <img src="team3.png" alt="Team Member">
                <h3>John Doe</h3>
                <p>Outreach Manager</p>
            </div>
            <div class="team-member">
                <img src="team4.png" alt="Team Member">
                <h3>Emma Johnson</h3>
                <p>Community Engagement Specialist</p>
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
  </body>
</html>
