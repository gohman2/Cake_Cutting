<?php

require_once 'scenario_one.php';
//require_once 'scenario_two.php';
//require_once 'scenario_three.php';


function solution($x, $y, $k, $a, $b)
{
    $xCut = [];
    $yCut = [];
    $countA = count($a);
    $countB = count($b);
    $parts = [];

    for ($i = 0; $i < $countA; $i++) {

        if ($i == 0) {
            $xCut[] = $a[$i];
        } else {
            $xCut[] = $a[$i] - $a[$i - 1];
        }
    }
    $xCut[] = $x - $a[$countA - 1];

    for ($n = 0; $n < $countB; $n++) {
        if ($n == 0) {
            $yCut[] = $b[$n];
        } else {
            $yCut[] = $b[$n] - $b[$n - 1];
        }
    }
    $yCut[] = $y - $b[$countB - 1];


    for ($iY = 0; $iY < count($yCut); $iY++) {
        for ($iX = 0; $iX < count($xCut); $iX++) {
            $parts[] = $yCut[$iY] * $xCut[$iX];
        }
    }
    rsort($parts);
    return $parts[$k - 1];
}


echo solution($x, $y, $k, $a, $b);



