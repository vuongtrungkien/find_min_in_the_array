<?php
$arr = [0,1,2,3,4,5,7,8,4,5,6,9,8,5,22,-10,15];

function findTheSmallestValue($arr) {
    $arrLength = count($arr);
    $min = $arr[0];
    $index = 0;
    for ($x = 1;$x < $arrLength;$x++) {
        if ($min > $arr[$x]) {
            $min = $arr[$x];
            $index = $x;
        }
    }
    return $index;
}

echo findTheSmallestValue($arr);
