<?php

use App\MergeSort as MS;

require_once __DIR__ . DIRECTORY_SEPARATOR . "MergeSort.php";

$arr = [2,1];

$N = sizeof($arr);
$p=0;
$q = 0;
$r= $N - 1;

$ms = new MS();

$ms->merge($arr, $p, $q, $r);

print_r($arr);
