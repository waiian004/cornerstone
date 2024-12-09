<?php
require_once 'database.php'; // Include the database connection
session_start();
$errors = array();
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $sql = "SELECT * FROM user_table WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $token = bin2hex(random_bytes(32)); // Generate a secure token
        $expires = date("U") + 3600; // Token expires in 1 hour    

        $sql = "INSERT INTO password_resets (email, token, expires) VALUES ('$email', '$token', '$expires')
        ON DUPLICATE KEY UPDATE token='$token', expires='$expires'";
        
        if ($conn->query($sql) === TRUE) {
            // Send reset link via email
            $reset_link = "http://yourdomain.com/reset_password.php?token=$token";
            mail($email, "Password Reset Request", "Click the link to reset your password: $reset_link", "From: no-reply@yourdomain.com");
            $success = "A password reset link has been sent to your email.";
        } else {
            $errors[] = "Failed to process the request.";
        }
    } else {
        $errors[] = "Email address not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Forgot Password</title>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center bg-body-secondary">
    <div class="card text-center shadow" style="width: 400px;">
        <div class="card-header bg-body-primary">
            <h3>Forgot Password</h3>
        </div>
        <div class="card-body">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <?php echo $error; ?><br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if ($success): ?>
                <div class="alert alert-success">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>
            <form method="POST">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <button type="submit" class="btn btn-primary">Send Reset Link</button>
            </form>
        </div>
    </div>
</body>
</html>
