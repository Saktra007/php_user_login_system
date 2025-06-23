<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Auth/Login.php");
    exit();
}
else {
    header("Location: dashboard.php");
    exit();
}
?>