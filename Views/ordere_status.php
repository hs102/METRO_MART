<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Status</title>
    <link rel="stylesheet" href="../Styles/order_status.css">
    <link rel="icon" href="../Images/MetroLogo.jpg" type="image/x-icon">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1>Order Status</h1>
        <div class="order-container">
            <div class="order-item">
                <span>Order #1001</span>
                <span>Processing</span>
            </div>
            <div class="order-item">
                <span>Order #1002</span>
                <span>Shipped</span>
            </div>
            <div class="order-item">
                <span>Order #1003</span>
                <span>Delivered</span>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
