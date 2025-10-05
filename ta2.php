<?php
$a = 10;
$b = 20;

echo "Before swapping: a = $a, b = $b <br>";

$a = $a + $b;  // a = 30
$b = $a - $b;  // b = 10
$a = $a - $b;  // a = 20

echo "After swapping: a = $a, b = $b";
?>
