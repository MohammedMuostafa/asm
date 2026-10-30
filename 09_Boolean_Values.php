<?php
$tests = [1, "tariq", 1.5, true, 7, 's', false];

echo "Using for:";
for ($i = 0; $i < count($tests); $i++) {
    if (is_bool($tests[$i])) {
        echo $tests[$i] ? "Yes" : "NO";
    } else {
        echo $tests[$i];
    }
    echo PHP_EOL;
}

echo"Using while:";
$i = 0;
while ($i < count($tests)) {
    if (is_bool($tests[$i])) {
        echo $tests[$i] ? "Yes" : "NO";
    } else {
        echo $tests[$i];
    }
    echo PHP_EOL;
    $i++;
}
