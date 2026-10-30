<?php
function calculateNumbers($num1, $num2) {
    echo "Multiplication: " . ($num1 * $num2) ;
    echo "Difference: " . ($num1 - $num2) ;

    if ($num1 != 0 || $num2 != 0 ) {
        echo "Division: " . ($num1 / $num2) ;
    } else {
        echo "Cannot divide by zero" ;
    }
}

calculateNumbers(12, 3);
