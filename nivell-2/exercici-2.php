<?php

function extractReverse(string $text){

    $first = substr($text, 0, 1);
    $last  = substr($text, -1, 1);
    // $last  = (string) substr($text, -1, 1);
    
    $newText = substr_replace($text, $last , 0, 1);
    $newText = substr_replace($newText, $first , -1, 1);
    
    return $newText;

}

echo extractReverse("wxyz");
echo "\r\n";
echo extractReverse("a");
echo "\r\n";
echo extractReverse("ab");

?>