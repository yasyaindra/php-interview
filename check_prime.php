<?php
function check_prime($number){
    if ($number == 1)
    return "Bukan Bilangan Prima";
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return "Bukan Bilangan Prima";
    }
    return "Bilangan Prima";
}

echo 'Soal Nomer 2: ' . check_prime($result);