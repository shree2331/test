<?php
function filterNumbersFromArray(array &$arr) : void
{
    $arr = array_filter($arr,function ($item){
        return is_int($item);
    });
}

$arr = [1, 'a', 'b', 2];
filterNumbersFromArray($arr);
print_r(array_values($arr));