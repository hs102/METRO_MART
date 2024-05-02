<?php


require 'navbar.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Supermarket Homepage</title>
    <link rel="stylesheet" href="../Styles/index.css">
    <link rel="icon" href="../Images/MetroLogo.jpg" type="image/x-icon">

    <style>
        
    </style>
</head>
<body>
    <?php include 'searchbar.php'; ?>

    <h1>Welcome to Metro Mart!</h1>

    <h2>Featured Products</h2>
    <div class="product-card">
        <img src="product1.jpg" alt="Product 1">
        <h3>Product 1</h3>
        <p>Description of Product 1</p>
        <p>Price: $9.99</p>
    </div>

    <div class="product-card">
        <img src="product2.jpg" alt="Product 2">
        <h3>Product 2</h3>
        <p>Description of Product 2</p>
        <p>Price: $19.99</p>
    </div>

    <div class="product-card">
        <img src="product3.jpg" alt="Product 3">
        <h3>Product 3</h3>
        <p>Description of Product 3</p>
        <p>Price: $29.99</p>
    </div>

    <?php include 'footer.php'; ?>
</html>

<?php