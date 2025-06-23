<?php
session_start();
require("../include/db.php");
if(isset($_POST["Login"])){
    $stmt=$con->prepare("SELECT * FROM user WHERE Name=?");
    $stmt->bind_param('s',$_POST["username"]);
    $stmt->execute();
    $result=$stmt->get_result();
    if($row=$result->fetch_assoc()){
        if(password_verify($_POST['password'],$row["Password"])){
            $_SESSION["username"]=$_POST["username"];
            header("Location: ../dashboard.php");
            exit();
        }
        else{
            echo "<script>alert('Wrong Password!')</script>";
        }
    }
    else{
        echo "<script>alert('User not found!')</script>";
    }
}
?>
<form action="" method="post">
    <label for="">Name:</label>
    <input type="text" name="username" id="" required>
    <label for="">Password:</label>
    <input type="password" name="password" id="" required>
    <input type="submit" value="Login" name="Login">
</form>