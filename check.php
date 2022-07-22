<?php
$table=["","","","","","","","",""];

$data = [
    $table = $_POST["arr"]
];

if(($table[0] == 'X' && $table[1] == 'X' && $table[2] == 'X') ||
   ($table[3] == 'X' && $table[4] == 'X' && $table[5] == 'X') ||
   ($table[6] == 'X' && $table[7] == 'X' && $table[8] == 'X') ||
   ($table[0] == 'X' && $table[3] == 'X' && $table[6] == 'X') ||
   ($table[1] == 'X' && $table[4] == 'X' && $table[7] == 'X') ||
   ($table[2] == 'X' && $table[5] == 'X' && $table[8] == 'X') ||
   ($table[0] == 'X' && $table[4] == 'X' && $table[8] == 'X') ||
   ($table[2] == 'X' && $table[4] == 'X' && $table[6] == 'X') )
   echo("Победа за X!");
elseif(($table[0] == '0' && $table[1] == '0' && $table[2] == '0') ||
($table[3] == '0' && $table[4] == '0' && $table[5] == '0') ||
($table[6] == '0' && $table[7] == '0' && $table[8] == '0') ||
($table[0] == '0' && $table[3] == '0' && $table[6] == '0') ||
($table[1] == '0' && $table[4] == '0' && $table[7] == '0') ||
($table[2] == '0' && $table[5] == '0' && $table[8] == '0') ||
($table[0] == '0' && $table[4] == '0' && $table[8] == '0') ||
($table[2] == '0' && $table[4] == '0' && $table[6] == '0') )
echo("Победа за О!");
elseif(in_array("",$table)==false) echo ("Ничья!");
?>
