<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="C:\Users\Amirtha\Downloads\Ez Groceries.png" alt="Shop Logo" style="width:40px;" class="rounded-pill"> 
          </a>
          <a class="navbar-brand" href="#">EZ Grocez</a>
        </div>
    </nav>

  <div class="login-container">
    <h2 class="text-center mb-4">Login</h2>
    <form action="" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
        <a href="Resetpassword2.html" class="forgot-password-link">Forgot Password?</a>
      </div>
      <div class="mb-3 form-check">
        <input class="form-check-input" type="checkbox" id="remember" name="remember">
        <label class="form-check-label" for="remember"> Remember me </label>
      </div>
      <button type="submit" class="btn btn-primary btn-block" name="login">Submit</button>
    </form>

    <?php
    session_start();
    
    if (isset($_POST['login'])) {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "customer_d";
    
        $con = mysqli_connect($server, $username, $password, $database);
    
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
    
        $query = "SELECT * FROM signup WHERE email='$email' AND newpassword='$password'";
        $result = mysqli_query($con, $query);
    
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            header("Location: home.php");
        } else {
            echo "<div class='alert alert-danger mt-3'>Invalid email or password. Please try again.</div>";
        }
    
        mysqli_close($con);
    }
    ?>
  </div>
</body>
</html>