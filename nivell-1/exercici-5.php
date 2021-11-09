<?php

$arr = array(5, 4, 8, 12, 7);
$arr2 = array(11, 2, 18);

array_push($arr2, 5);

$mergedArr = array_merge($arr, $arr2);

echo "Merged Array Length = " . count($mergedArr) . "\r\n";
print_r($mergedArr);

?>