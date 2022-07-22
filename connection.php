<?php
$link = new mysqli("sql305.epizy.com", "epiz_32204157", "fVbixU1abir","epiz_32204157_tictactoe");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . $link->connect_error);
    echo "<br>";
}

?>