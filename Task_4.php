<?php
function generateFibonacci($n) {
    $firstValue = 0;
    $secondValue = 1;

    for ($i = 2; $i < $n; $i++) {
        $nextValue = $firstValue + $secondValue;
        echo $nextValue . " ";
        $firstValue = $secondValue;
        $secondValue = $nextValue;
    }
}

generateFibonacci(15);
