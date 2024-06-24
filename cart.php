<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Grocery Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.html">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer_details.html">Customer Details</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Cart Items -->
  <div class="container mt-4">
    <h2>Your Cart</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Product 1</td>
          <td>1</td>
          <td>$10.00</td>
          <td>$10.00</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td>2</td>
            <td>$10.00</td>
            <td>$10.00</td>
            <td><button class="btn btn-danger">Remove</button></td>
          </tr>
          <tr>
            <td>Product 2</td>
            <td>2</td>
            <td>$10.00</td>
            <td>$10.00</td>
            <td><button class="btn btn-danger">Remove</button></td>
          </tr>
        <!-- Repeat for more cart items -->
      </tbody>
    </table>
    <button class="btn btn-success">Checkout</button>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
