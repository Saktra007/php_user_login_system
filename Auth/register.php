<?php
require("../Include/db.php");
if(isset($_POST["submit"])){
    $name=$_POST["username"];
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
    $check=$con->prepare("SELECT * FROM user WHERE Name=?");
    $check->bind_param("s",$name);
    $check->execute();
    $result=$check->get_result();
    if($result->num_rows>0){
        echo "user already exists!";
    }
    else{
        $stmt=$con->prepare("INSERT INTO user (Name,Password) values(?,?)");
        $stmt->bind_param('ss',$name,$password);
        if($stmt->execute()){
            echo "success";
        }
        else{
            echo "failed";
        }
    }
}
?>
<form action="" method="post">
    <label for="">Name:</label>
    <input type="text" name="username" id="" required>
    <label for="">password:</label>
    <input type="password" name="password" id="" required>
    <input type="submit" value="Submit" name="submit">
</form>