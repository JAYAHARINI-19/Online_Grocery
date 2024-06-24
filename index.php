<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {
        $_SESSION['cart'][$product_id] = array(
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1
        );
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vegetables</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="images/Ez_Groceries.png" alt="Shop Logo" style="width:40px;" class="rounded-pill"> 
    </a>
    <a class="navbar-brand" href="#">EZ Grocez</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer.html">Customer Details</a>
        </li>
      </ul>
    </div>
  </nav>
  <h2 class="text-center mb-4">Fresh Vegetables</h2>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/vegetable1.jpeg" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Carrot</h5>
            <p class="card-text">$0.99/100g</p>
          </div>
          <div class="card-footer text-center">
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="1">
              <input type="hidden" name="product_name" value="Carrot">
              <input type="hidden" name="product_price" value="0.99">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/vegetable2.jpeg" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Broccoli</h5>
            <p class="card-text">$1.99/100g</p>
          </div>
          <div class="card-footer text-center">
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="2">
              <input type="hidden" name="product_name" value="Broccoli">
              <input type="hidden" name="product_price" value="1.99">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/vegetable3.jpeg" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Spinach</h5>
            <p class="card-text">$0.99/100g</p>
          </div>
          <div class="card-footer text-center">
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="3">
              <input type="hidden" name="product_name" value="Spinach">
              <input type="hidden" name="product_price" value="0.99">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/vegetable4.jpeg" alt="Product 4">
          <div class="card-body">
            <h5 class="card-title">Tomato</h5>
            <p class="card-text">$0.99/100g</p>
          </div>
          <div class="card-footer text-center">
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="4">
              <input type="hidden" name="product_name" value="Tomato">
              <input type="hidden" name="product_price" value="0.99">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/vegetable5.jpeg" alt="Product 5">
          <div class="card-body">
            <h5 class="card-title">Cauliflower</h5>
            <p class="card-text">$1.99/100g</p>
          </div>
          <div class="card-footer text-center">
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="5">
              <input type="hidden" name="product_name" value="Cauliflower">
              <input type="hidden" name="product_price" value="1.99">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/vegetable6.jpeg" alt="Product 6">
          <div class="card-body">
            <h5 class="card-title">Cucumber</h5>
            <p class="card-text">$0.99/100g</p>
          </div>
          <div class="card-footer text-center">
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="6">
              <input type="hidden" name="product_name" value="Cucumber">
              <input type="hidden" name="product_price" value="0.99">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/vegetable7.jpeg" alt="Product 7">
          <div class="card-body">
            <h5 class="card-title">Bell Pepper</h5>
            <p class="card-text">$2.99/100g</p>
          </div>
          <div class="card-footer text-center">
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="7">
              <input type="hidden" name="product_name" value="Bell Pepper">
              <input type="hidden" name="product_price" value="2.99">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/vegetable8.jpeg" alt="Product 8">
          <div class="card-body">
            <h5 class="card-title">Eggplant</h5>
            <p class="card-text">$1.99/100g</p>
          </div>
          <div class="card-footer text-center">
            <form method="POST" action="">
              <input type="hidden" name="product_id" value="8">
              <input type="hidden" name="product_name" value="Eggplant">
              <input type="hidden" name="product_price" value="1.99">
              <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer bg-dark text-white mt-4">
    <div class="container text-center">
      <span class="text-muted">© 2024 EZ Grocez. All rights reserved.</span>
    </div>
  </footer>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>