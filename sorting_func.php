<?php
// input
// ascending
$sort_input = 39247;

function sort_asc_func(int $num) {
    $num_str = str_split($num);
    for($i = 0; $i < count($num_str); $i++ ) {
        for($j = 0; $j < count($num_str)-1; $j++) {
            if($num_str[$j+1] < $num_str[$j]){
                $temp = $num_str[$j+1];
                $num_str[$j+1] = $num_str[$j];
                $num_str[$j] = $temp;
            }
         }
       }
    return intval(implode($num_str));
}

print_r(sort_asc_func($sort_input));


// descending
function sort_dec_func(int $num) {
    $num_str = str_split($num);
    for ($i = 0; $i < count($num_str) - 1; $i++) {
        for ($j = 0; $j < count($num_str) - $i - 1; $j++) {
            if ($num_str[$j] < $num_str[$j + 1]) {
                $temp = $num_str[$j];
                $num_str[$j] = $num_str[$j + 1];
                $num_str[$j + 1] = $temp;
            }
        }
    }
    
    return intval(implode($num_str));
}

print_r(sort_dec_func($sort_input));