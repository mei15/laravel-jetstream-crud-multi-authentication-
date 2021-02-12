<?php
$a = "Ameilia";
$b = "Meil";

$a ^= $b;
$b ^= $a;
$a ^= $b;

echo $a . "<br/>";
echo $b;
?>