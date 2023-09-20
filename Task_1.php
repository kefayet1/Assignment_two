<?php
//even number with for loop
function evenPrinter($start, $end, $step){
    $start++;
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i."\n";
        }
    }
}

evenPrinter(1, 20, 2);
echo "\n";

// even number with while loop
function evenPrinterWithWhile($start, $end, $step){
    $start++;
    $x = $start;
    while ($x <= $end) {
        if ($x % 2 === 0) {
            echo $x . "\n";
        }
        $x+=$step;
    }
}

evenPrinterWithWhile(1,20,2);
echo "\n";

// even number with do while loop
function evenPrinterWithDowhileLoop($start, $end, $step){
    $start++;
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . "\n";
        }
        $i += $step;
    } while ($i <= $end);
}

evenPrinterWithDowhileLoop(1, 20, 2);


