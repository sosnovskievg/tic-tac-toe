<?php
include "connection.php";

    $login = $_POST["Login"];
    $name = $_POST["UserName"];
    $password = $_POST["Password"];
   

echo ($login);
$sql = "Insert into user (login,username,password) Values ('$login','$name','$password');";
if($link->query($sql)){
header("Location: index.php");
}

?>