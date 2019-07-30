<?php

$array = [7, 9, 6, 5, 65, 57, 56, 79];

function findMin($array)
{
    $min = $array[0];
    for ($i = 1; $i < count($array); $i++) :
        if ($min > $array[$i]) {
            $min = $array[$i];
        }
    endfor;
    return $min;
}

echo findMin($array);