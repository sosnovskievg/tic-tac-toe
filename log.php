<?php
$login="";
$password="";
include "connection.php";
$data = [
    $login = $_POST['login'],
    $password = $_POST['password']
    ];
$sql = 'select username, points from user where login=\''.$login.'\' and password=\''.$password.'\'';
if($result=$link->query($sql)){
    foreach($result as $row){
    $username= $row["username"];
    $points = $row["points"];
    }
echo json_encode(array("login"=>$login, "points"=>$points));
}
?>