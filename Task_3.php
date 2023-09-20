<?php
$firstValue = 0;
$secondValue = 1;

for ($i = 2; $i < 20; $i++) {
    $nextValue = $firstValue + $secondValue;
    if($nextValue > 100){
        break;
    }
    $firstValue = $secondValue;
    $secondValue = $nextValue;
    
}
