<?php

function get_min_and_max($arr) {
    $max = $arr[0];
    $min = $arr[0];

    for($i = 1; $i < count($arr); $i++) {
        if($arr[$i] > $max) {
            $max = $arr[$i];
        }

        if($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    $newArr = ['max'=>$max, 'min'=>$min];
    return $newArr;
}

$array1 = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);

$result = get_min_and_max($array1);

var_dump($result);