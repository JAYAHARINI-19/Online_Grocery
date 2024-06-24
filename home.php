<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to EZ Grocez</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="C:\Users\Amirtha\Downloads\Ez Groceries.png" alt="Shop Logo" style="width:40px;" class="rounded-pill">
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
          <a class="nav-link" href="cart.html">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer.html">Customer Details</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="C:\Users\Amirtha\Downloads\Default_Vibrant_advertisement_illustration_in_digital_painting_1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="C:\Users\Amirtha\Downloads\Default_Vibrant_shopping_bag_illustration_on_a_warm_sunkissed_3 (1).jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="C:\Users\Amirtha\Downloads\Default_Design_a_compelling_image_for_a_flash_sale_at_an_EZ_Gr_3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Categories Section -->
  <div class="container mt-4">
    <h2 class="text-center mb-4">Product Categories</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="fruit.jpg" alt="Fruits">
          <div class="card-body">
            <h5 class="card-title">Fruits</h5>
            <a href="fruits.html" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="veg.jpg" alt="Vegetables">
          <div class="card-body">
            <h5 class="card-title">Vegetables</h5>
            <a href="vegetable.html" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="dairy.jpg" alt="Dairy">
          <div class="card-body">
            <h5 class="card-title">Dairy</h5>
            <a href="dairy.html" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="bakery.jpg" alt="Bakery">
          <div class="card-body">
            <h5 class="card-title">Bakery</h5>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="grains.jpg" alt="Food grains">
          <div class="card-body">
            <h5 class="card-title">Food Grains</h5>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="meat.jpeg" alt="Meat">
          <div class="card-body">
            <h5 class="card-title">Meat</h5>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="juice.jpeg" alt="Beverages">
          <div class="card-body">
            <h5 class="card-title">Beverages</h5>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="chips.jpeg" alt="Snacks">
          <div class="card-body">
            <h5 class="card-title">Snacks</h5>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="pantry.jpeg" alt="Pantry">
          <div class="card-body">
            <h5 class="card-title">Pantry</h5>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Featured Products Section -->
  <div class="container mt-4">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="candy.jpg" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Chocolate</h5>
            <p class="card-text">$9.99</p>
          </div>
          <div class="card-footer text-center">
            <button class="btn btn-primary add-to-cart" data-product-id="1" data-product-name="Chocolate" data-product-price="9.99">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="lays.jpg" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Lays Combo</h5>
            <p class="card-text">$14.99</p>
          </div>
          <div class="card-footer text-center">
            <button class="btn btn-primary add-to-cart" data-product-id="2" data-product-name="Lays Combo" data-product-price="14.99">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="ramen.jpg" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Korean Ramen Combo</h5>
            <p class="card-text">$24.99</p>
          </div>
          <div class="card-footer text-center">
            <button class="btn btn-primary add-to-cart" data-product-id="3" data-product-name="Korean Ramen Combo" data-product-price="24.99">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="avo.jpg" alt="Product 4">
          <div class="card-body">
            <h5 class="card-title">Frozen Avocado</h5>
            <p class="card-text">$29.99</p>
          </div>
          <div class="card-footer text-center">
            <button class="btn btn-primary add-to-cart" data-product-id="4" data-product-name="Frozen Avocado" data-product-price="29.99">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  // Database connection
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "customer_d";

  try {
      $pdo = new PDO("mysql:host=$server;dbname=$database", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die("Connection failed: " . $e->getMessage());
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Example user ID (you would typically get this from your session)
      $user_id = 1;

      // Example product details (you should validate and sanitize user input in a real application)
      $product_id = $_POST['product_id'];
      $quantity = $_POST['quantity'];

      // Fetch product details from the products table
      $stmt = $pdo->prepare("SELECT name, price FROM products WHERE id = ?");
      $stmt->execute([$product_id]);
      $product = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$product) {
          die("Product not found.");
      }

      $product_name = $product['name'];
      $product_price = $product['price'];
      $total_price = $product_price * $quantity;

      // Insert into cart_products table
      try {
          $stmt = $pdo->prepare("INSERT INTO cart_products (user_id, product_id, quantity, price, created_at) VALUES (?, ?, ?, ?, NOW())");
          $stmt->execute([$user_id, $product_id, $quantity, $total_price]);
          
          echo "Product '$product_name' added to cart successfully.";
      } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
  }
  ?>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const addToCartButtons = document.querySelectorAll('.add-to-cart');
      
      addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
          const productId = this.getAttribute('data-product-id');
          const productName = this.getAttribute('data-product-name');
          const productPrice = parseFloat(this.getAttribute('data-product-price'));

          // Prepare the item object
          const item = {
            id: productId,
            name: productName,
            price: productPrice,
            quantity: 1
          };

          // Initialize or retrieve existing cart from session storage
          let cart = JSON.parse(sessionStorage.getItem('cart')) || [];

          // Check if the product is already in the cart
          const existingItemIndex = cart.findIndex(item => item.id === productId);

          if (existingItemIndex !== -1) {
            // If product already exists in cart, increase its quantity
            cart[existingItemIndex].quantity++;
          } else {
            // Otherwise, add new product to cart
            cart.push(item);
          }

          // Update cart in session storage
          sessionStorage.setItem('cart', JSON.stringify(cart));

          // Optionally, you can redirect to the cart page or show a success message
          alert('Product added to cart!');
        });
      });
    });
  </script>
</body>
</html>