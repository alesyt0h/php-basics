<?php

// x & y

$x = (int) 20;
$y = (int) 7;

echo "x = " . $x . "\r\n";
echo "y = " . $y . "\r\n";
echo "suma = " . $x + $y . "\r\n";
echo "resta = " . $x - $y . "\r\n";
echo "producto = " . $x * $y . "\r\n";
echo "módulo = " . $x % $y . "\r\n\r\n";

// n & m

$n = (double) 23.492;
$m = (double) 1.298;

echo "n = " . $n . "\r\n";
echo "m = " . $m . "\r\n";
echo "suma = " . $n + $m . "\r\n";
echo "resta = " . $n - $m . "\r\n";
echo "producto = " . $n * $m . "\r\n";
echo "módulo = " . fmod($n, $m) . "\r\n\r\n";

// all

echo "doble x = " . $x * 2 . "\r\n";
echo "doble y = " . $y * 2 . "\r\n";
echo "doble n = " . $n * 2 . "\r\n";
echo "doble m = " . $m * 2 . "\r\n";
echo "suma de todas = " . $x + $y + $n + $m . "\r\n";
echo "producto de todas = " . $x * $y * $n * $m . "\r\n";

?>