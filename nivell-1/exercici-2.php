<?php

$str = (string) "Hello, World!";

echo "To UpperCase: " . strtoupper($str);
echo "\r\n";
echo "Length: " . strlen($str);
echo "\r\n";
echo "Reverse: " . strrev($str);
echo "\r\n";

$str2 = (string) "Aquest és el curs de PHP";

echo "Concat: " . $str . " " . $str2;

?>