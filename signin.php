<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function showSuccessMessage() {
        alert('Account created successfully');
        window.location.href = 'home.php';
    }
</script>
  <style>
    body {
      /* Adjusted background image */
      background-image: url('sea.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-container {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 25%;
      max-width: 400px; /* Ensure it's not too wide on larger screens */
    }
    .form-check-label {
      /* Adjusted checkbox label margin */
      margin-left: 5px;
    }
    .forgot-password-link {
      /* Adjusted style for the forgot password link */
      display: block;
      text-align: right;
      margin-top: 10px;
    }
  </style>
</head>
<body>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "customer_d";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $newpassword = mysqli_real_escape_string($con, $_POST['newpassword']);
    $reenterpassword = mysqli_real_escape_string($con, $_POST['reenterpassword']);

    if ($newpassword !== $reenterpassword) {
        echo "<div class='message'>
                <p>Passwords do not match, try again!</p>
                <button class='btn' onclick='javascript:self.history.back()'>Go Back &amp; Try Again</button>
              </div><br>";
    } else {
        $verify_query = mysqli_query($con, "SELECT email FROM signup WHERE email='$email'");
        if (mysqli_num_rows($verify_query) != 0) {
            echo "<div class='message'>
                    <p>This email is already used, try another!</p>
                  </div><br>";
        } else {
            $insert_query = mysqli_query($con, "INSERT INTO signup (name, email, phone_number, address, newpassword) VALUES ('$name', '$email', '$phone_number', '$address', '$newpassword')");
            if ($insert_query) {
                echo "<script>showSuccessMessage();</script>";
            } else {
                die("Error: " . mysqli_error($con));
            }
        }
    }
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="C:\Users\Amirtha\Downloads\Ez Groceries.png" alt="Shop Logo" style="width:40px;" class="rounded-pill"> 
      </a>
      <a class="navbar-brand" href="#">EZ Grocez</a>
    </div>
  </nav>

<div class="login-container">
    <h2 class="text-center mb-4">Sign in</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number:</label>
            <input type="text" class="form-control" id="phone_number" placeholder="Enter phone number" name="phone_number" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="newpassword" class="form-label">New Password:</label>
            <input type="password" class="form-control" id="newpassword" placeholder="Enter password" name="newpassword" required>
        </div>
        <div class="mb-3">
            <label for="reenterpassword" class="form-label">Reenter Password:</label>
            <input type="password" class="form-control" id="reenterpassword" placeholder="Re-enter password" name="reenterpassword" required>
        </div>
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" id="remember" name="remember">
            <label class="form-check-label" for="remember"> Remember me </label>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
    </form>
</div>
</body>
</html>