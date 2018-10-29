<?php

$numbers = [];
for ($i = 1; $i <= 10; $i++) {
    do {
        $number = mt_rand(1, 100);
    } while (in_array($number, $numbers));

    echo "Pridedame skaičių $number į masyvą " . print_r($numbers, true) . '<br>';
    $numbers[] = $number;
}

var_dump($numbers);
