<?php
/**
* Just wondering if I can complete some of the Google Interview Questions
*/

function bitDiff($x, $y): int
{
    [$bx, $by] = [base_convert($x,10,2), base_convert($y,10,2)];
    [$bxl, $byl] = [strlen($by), strlen($bx)];
    $pad = max([$byl, $bxl]);
    [$bx, $by] = [sprintf("%0".$pad."d", $bx), sprintf("%0".$pad."d", $by)];
    [$bxs, $bys] = [str_split($bx), str_split($by)];
    return count(array_diff_assoc($bxs,$bys));
}

var_dump(bitDiff(100,200));
