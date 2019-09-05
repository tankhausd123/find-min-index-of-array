<?php
$myArray = [80,32,21,23,41,8678675,326,67,688,9876];
function findMin($arr){
    $min = $arr[0];
    $index = 0;
    foreach ($arr as $item => $value){
        if ($value <= $min){
            $min = $arr[$item];
            $index = $item;
        }
    }
    return $index;
}
var_dump($myArray);
echo 'index of min for array is: ' .findMin($myArray);
