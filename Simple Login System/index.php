<?php
session_start(); 


if (isset($_SESSION['error_message'])) {
    echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
    unset($_SESSION['error_message']); 
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h2>login</h2>
    <form action="process_login.php" method="POST">
        <label for="username">username</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">password</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="login">
    </form>
</body>
</html>