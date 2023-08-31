<?php

$input = 123456789;
function number_func(int $num) {
    $num_str = str_split($num);
    $data = [];
    $indexes = [0, 3, 8, 5];

    if(count($num_str)){
        foreach($indexes as $index) {
            array_push($data, $num_str[$index]);
        }
    } else {
        return false;
    }
    return intval(implode('', $data));
};
