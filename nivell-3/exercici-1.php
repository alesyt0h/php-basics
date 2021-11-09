<?php

function strToArr(string $texto){
    $texto = str_replace(" ", "", $texto);
    $arr =  str_split($texto);

    print_r($arr);
}

strToArr("Welcome to this exercise");

?>