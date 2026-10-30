<?php
function RouteBubble($numbers) {
    $length = count($numbers);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    return $numbers;
}

$numbers = [6, 4, 9, 3, 12, 8, 7];
$sorted = RouteBubble($numbers);
echo implode(" ", $sorted);
