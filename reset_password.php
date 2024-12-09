<?php
require_once 'database.php'; // Include the database connection
session_start();
$errors = array();
$success = '';

if (isset($_GET['token'])) {
    $token = $conn->real_escape_string($_GET['token']);
    $sql = "SELECT * FROM password_resets WHERE token='$token' AND expires > '" . date("U") . "'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $email = $row['email'];    

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $new_password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);
            $sql = "UPDATE user_table SET password='$new_password' WHERE email='$email'";        
            if ($conn->query($sql) === TRUE) {
                $success = "Your password has been reset successfully.";
                $sql = "DELETE FROM password_resets WHERE email='$email'";
                $conn->query($sql);
            } else {
                $errors[] = "Failed to reset the password.";
            }
        }
    } else {
        $errors[] = "Invalid or expired token.";
    }
} else {
    $errors[] = "No token provided.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Reset Password</title>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center bg-body-secondary">
    <div class="card text-center shadow" style="width: 400px;">
        <div class="card-header bg-body-primary">
            <h3>Reset Password</h3>
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
            <?php else: ?>
                <form method="POST">
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
