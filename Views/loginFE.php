<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../Styles/auth.css">
    <link rel="icon" href="../Images/MetroLogo.jpg" type="image/x-icon">
</head>
<body>

<div class="container">
    <main>
    <img src="../images/MetroWide.jpg" alt="Logo" style="float: left;">
        <h1>Login</h1>
        <form action="../Controllers/login.php" method="post">

            <label for="email">Email:</label>
            <input type="text" name="email" id="email"  value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
            <label for="password">Password:<?php if (isset($error)) echo '<small> '.$error.'</small>'?></label>
            <input type="password" name="password" id="password" required oninput="validateEmail()">
            <input id="submit" type="submit" value="Login" >
            <a href="signup.php">Create account</a>
        </form>
    </main>
</div>
</body>
</html>