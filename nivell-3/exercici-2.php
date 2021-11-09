<?php

$myArr = array(2, 3, 4, 3, 3, 2, 5, 2, 2);

function countValues(array $arr){
    print_r( array_count_values($arr) );
}

countValues($myArr);

?>