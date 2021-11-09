<?php

// By key
$myArr = array (10, 20, 30, 40, 50);

function delArrayByKey(array $arr, int $index){
    print_r($arr);
    unset($arr[$index]);
    $arr = array_values($arr);
    print_r($arr);
}

delArrayByKey($myArr, 3);

// By value

// $myArr = array (10, 20, 30, 40, 50);

// function delArrayByValue(array $arr, int $value) {
//     $key = array_search($value, $arr);
//     print_r($arr);
//     unset($arr[$key]);
//     $arr = array_values($arr);
//     print_r($arr);
// }

// delArrayByValue($myArr, 30);

?>