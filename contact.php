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
    <link rel="stylesheet" href="contact.css" />
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="map-container">
                        <h1 class="text-center fs-4">Location Map | CORNERSTONE CHURCH</h1>   
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1733203007205!6m8!1m7!1sDS85eVGW-l3cjyeyjGfa7w!2m2!1d14.73487664389186!2d121.0559352617377!3f306.19429155201874!4f-7.75136871825174!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <h2 class="text-center fs-4 mb-4">Share Your Thoughts</h2>
                        <form id="feedbackForm" method="post">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="subject" required>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                            <button type="submit">Submit</button>
                        </form>
                        <div class="contact-method">
                            <!-- Your contact methods here -->
                        </div>
                        <div id="feedbackNotification" style="display: none;" class="alert alert-success mt-3" role="alert">
                            Feedback submitted successfully!
                        </div>
                    </div>
                </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#feedbackForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            // Check if the user is logged in (you can replace this with your actual authentication check)
            var isLoggedIn = checkLoginStatus();

            if (!isLoggedIn) {
                // If the user is not logged in, display a message prompting them to sign up or log in
                $('#feedbackNotification').removeClass('alert-danger').addClass('alert-danger').text('You have to sign up or log in before submitting feedback').fadeIn();
                return;
            }

            // If the user is logged in, proceed with form submission
            var formData = $(this).serialize();
            var form = this;

            $.ajax({
                type: 'POST',
                url: 'submit_feedback.php',
                data: formData,
                success: function(response) {
                    $('#feedbackNotification').removeClass('alert-danger').addClass('alert-success').text('Feedback submitted successfully!').fadeIn();
                    form.reset();
                    setTimeout(function() {
                        $('#feedbackNotification').fadeOut();
                    }, 3000); // Fade out after 3 seconds
                },
                error: function(xhr, status, error) {
                    // Handle errors
                }
            });
        });
    });

    // Dummy function to check login status
    function checkLoginStatus() {
        // Replace this with your actual authentication check
        return true; // Return true if user is logged in, false otherwise
    }
</script>


</body>
</html>
