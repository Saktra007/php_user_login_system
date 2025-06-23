<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Auth/Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="dashborad">
        <h2>Hello <?= htmlspecialchars($_SESSION["username"])?></h2>
        <p>Welcome to the dashboard!</p>
        <a href="Auth/logout.php">Logout</a>
    </div>
</body>
</html>