<?php
include "connection.php";
$data = [
    $login = $_POST['login'],
    $point = $_POST['point']
    ];
$sql= 'update user set points =\''.$point.'\' WHERE (login = \''.$login.'\')';
if($link->query($sql)){
header("Location: index.php");
}

?>