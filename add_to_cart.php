<?php
// Database connection
$host = 'localhost';
$dbname = 'customer_d';
$username = '';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

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
    $stmt = $pdo->prepare("INSERT INTO cart_products (user_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
    $stmt->execute([$user_id, $product_id, $quantity, $total_price]);
    
    echo "Product '$product_name' added to cart successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>