<?php
$con=new mysqli("localhost","root","","userdb");
if($con->connect_error){
    die("Connectio Failed:".$con->connect_error);
}
// echo "successful";
?>