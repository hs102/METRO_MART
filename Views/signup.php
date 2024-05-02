<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href = "../Styles/auth.css" rel = "stylesheet" type = "text/css">
    <script src="../validate.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/MetroLogo.jpg" type="image/x-icon">
</head>
<body>
<div class="container">
    <main>
        <img src="../images/MetroWide.jpg" alt="Logo" style="float: left;">
        <h1>Register</h1>
        <form action="../Controllers/register.php" method="post">
        <label for="name">Name:</label><input name="name" type="text" id="name" placeholder="Enter Your Name" required>
        <label for="email">Email:</label><input name="email" type="text" id="email" placeholder="Enter Your Email" oninput="validateForm()" required>
        <label for="password">Password:</label><input name="password" type="password" id="password" placeholder="Enter Your Password" oninput="validateForm()" required>
            <ul id="passwordRules">
                <li id="length">At least 8 characters</li>
                <li id="upper">At least one uppercase letter</li>
                <li id="lower">At least one lowercase letter</li>
                <li id="number">At least one number</li>
                <li id="special">At leas    t one special character</li>
            </ul>
            <input id="submit" type="submit" value="Register" disable >
            <a href="loginFE.php">have an account? Login</a>

        </form>
    </main>

</div>
</body>
</html>