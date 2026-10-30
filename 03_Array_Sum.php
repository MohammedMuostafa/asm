<?php
function sumArray($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

$numbers = [2, 4, 6, 8];
echo sumArray($numbers);
