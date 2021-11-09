<?php

function sumDouble(int $a, int $b){
    return ($a === $b) ? ($a + $b) * 2 : ($a + $b); 
}

echo sumDouble(1,2);
echo "\r\n";
echo sumDouble(3,2);
echo "\r\n";
echo sumDouble(2,2);

?>