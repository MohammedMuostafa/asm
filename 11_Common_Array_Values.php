<?php
$arr1 = ['a', 'b', 'c', 'd'];
$arr2 = ['c', 'd', 'e', 'f'];
$same = [];

foreach ($arr1 as $item) {
    if (in_array($item, $arr2)) {
        $same[] = $item;
    }
}

echo implode("-", $same);
