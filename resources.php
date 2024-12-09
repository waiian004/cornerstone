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
    <link rel="stylesheet" href="resources.css" />

    <title>CORNERSTONE CHURCH</title>
  </head>
  <body class="vh-100 overflow-hidden">
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
                    <!-- Login / Sign up / Logout -->
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

<section>

    <!-- Main Feature Section -->
    <div class="feature-container">
        <a href="scan-attendance.php" class="feature-item">
            <img src="scanattendance.jpg" alt="Scan Attendance">
            <p>Scan Attendance</p>
        </a>
        <a href="attendance-form.php" class="feature-item">
            <img src="attendanceform.jpg" alt="Attendance Forms">
            <p>Attendance Forms</p>
        </a>
        <a href="attendance-report.php" class="feature-item">
            <img src="attendancereport.jpg" alt="Attendance Report">
            <p>Attendance Report</p>
        </a>
    </div>

</body>
</html>
