<?php
error_reporting(E_ALL); // Show PHP errors

include('database.php'); // Include the database connection file

// Define variables and initialize with empty values
$lastname = $firstname = $middlename = $blk = $lot = $street = $phasesub = $barangay = $state = $city = $mobile_number = $email = $password = $confirm_password = "";
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assign form values to variables
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $middlename = isset($_POST['middlename']) ? $conn->real_escape_string($_POST['middlename']) : ''; // Optional middle name
    $blk = $conn->real_escape_string($_POST['blk']);
    $lot = $conn->real_escape_string($_POST['lot']);
    $street = $conn->real_escape_string($_POST['street']);
    $phasesub = $conn->real_escape_string($_POST['phasesub']);
    $barangay = $conn->real_escape_string($_POST['barangay']);
    $state = isset($_POST['state']) ? $conn->real_escape_string($_POST['state']) : '';
    $city = isset($_POST['city']) ? $conn->real_escape_string($_POST['city']) : '';
    $mobile_number = $conn->real_escape_string($_POST['mobile_number']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    // Perform validation
    if (empty($lastname) || empty($firstname) || empty($blk) || empty($lot) || empty($street) || empty($phasesub) || empty($barangay) || empty($state) || empty($city) || empty($mobile_number) || empty($email) || empty($password) || empty($confirm_password)) {
        array_push($errors, "All fields are required");
    }

    // Check if Email is not valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }

    // Check if passwords do not match
    if ($password !== $confirm_password) {
        array_push($errors, "Passwords do not match");
    }

    // Check if email already exists
    $sql = "SELECT * FROM user_table WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        array_push($errors, "Email already exists");
    }

    // Check if mobile number already exists
    $sql = "SELECT * FROM user_table WHERE mobile_number = '$mobile_number'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        array_push($errors, "Mobile number already exists");
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_table (lastname, firstname, middlename, blk, lot, street, phasesub, barangay, state, city, mobile_number, email, password)
                VALUES ('$lastname', '$firstname', '$middlename', '$blk', '$lot', '$street', '$phasesub', '$barangay', '$state', '$city', '$mobile_number', '$email', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            // Redirect to login page
            header("Location: login.php");
            exit(); // Ensure that no other output is sent
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex justify-content-center align-items-center bg-body-secondary" style="min-height: 100vh;">
<div class="card text-center shadow" style="max-width: 600px; width: 100%;">
    <div class="card-header bg-body-primary text-black d-flex justify-content-start align-items-center">
        <a href="index.php">
            <img src="home_logo.jpg" alt="Home" class="mt-2 me-2" width="50px" height="50px">
        </a>
        <h3 class="mb-0 mx-auto card-header bg-body-primary text-black">REGISTRATION</h3>
    </div>
    <div class="card-body">
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="row mb-2"> <!-- Reduced mb-3 to mb-2 for smaller margin -->
        <div class="col">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname" value="<?php echo $lastname; ?>" required>
        </div>
        <div class="col">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" value="<?php echo $firstname; ?>" required>
        </div>
    <div class="col">
            <label for="middlename" class="form-label">Middle Name</label> <!-- New Middle Name Field -->
            <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middle Name" value="<?php echo $middlename; ?>"> <!-- Optional field -->
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <label for="blk" class="form-label">Blk</label>
            <input type="text" class="form-control" name="blk" id="blk" placeholder="Blk" value="<?php echo $blk; ?>" required>
        </div>
        <div class="col">
            <label for="lot" class="form-label">Lot</label>
            <input type="text" class="form-control" name="lot" id="lot" placeholder="Lot" value="<?php echo $lot; ?>" required>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <label for="street" class="form-label">Street</label>
            <input type="text" class="form-control" name="street" id="street" placeholder="Street" value="<?php echo $street; ?>" required>
        </div>
        <div class="col">
            <label for="phasesub" class="form-label">Phase/Subdivision</label>
            <input type="text" class="form-control" name="phasesub" id="phasesub" placeholder="Phase/Subdivision" value="<?php echo $phasesub; ?>" required>
        </div>
        <div class="col">
            <label for="barangay" class="form-label">Barangay</label>
            <input type="text" class="form-control" name="barangay" id="barangay" placeholder="Barangay" value="<?php echo $barangay; ?>" required>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" name="state" id="state" placeholder="State" value="<?php echo $state; ?>" required>
        </div>
        <div class="col">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?php echo $city; ?>" required>
        </div>
        <div class="col">
            <label for="barangay" class="form-label">Mobile Number</label>
            <input type="tel" class="form-control" name="mobile_number" id="mobile_number" placeholder="Mobile_number" value="<?php echo $mobile_number; ?>" required>
        </div>
    </div>
    <div class="mb-2">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" required>
    </div>
    <div class="mb-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div>
    <div class="mb-2">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
<div class="card-footer bg-body-primary text-black">
    Already have an account? <a href="login.php" class="text-black">Login</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
