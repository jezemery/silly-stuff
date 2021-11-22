<?php

function bitDiff($x, $y): int
{
    $bx = base_convert($x,10,2);
    $by = base_convert($y,10,2);
    
    $byl = strlen($by);
    $bxl = strlen($bx);
    
    $pad = max([$byl, $bxl]);

    $bx = sprintf("%0".$pad."d", $bx);
    $by = sprintf("%0".$pad."d", $by);

    $bxs = str_split($bx);
    $bys = str_split($by);
    $diff = array_diff_assoc($bxs,$bys);
    
    return count($diff);
}

$result = bitDiff(5,7);

print("Result: ".$result);
