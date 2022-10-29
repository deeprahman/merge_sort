<?php
declare(strict_types=1);
namespace App;

class MergeSort
{

    /**
     * Merges two subarray into one
     *
     * @return void
     */
    public function merge(array &$arr, int $p, int $q, int $r)
    {
        echo "p is ".$p; echo "  q is ". $q; echo " r is ". $r;
        echo PHP_EOL;
        // $L <- $arr[$p ... $Q] and $M <- $arr[$q+1 ... $r]
        $L = []; $M = [];
        $n1 = $q - $p + 1;  $n2 = $r - $q;
        echo "n1 is ".$n1; echo " n2 is ".$n2;
        echo PHP_EOL;
    
        for($i=0; $i < $n1; $i++){
            $L[$i] = $arr[$p + $i];
        }

        for ($j = 0; $j < $n2; $j++) {
            $M[$j] = $arr[$q + 1 + $j];
        }
        print_r($L);
        print_r($M);
        echo PHP_EOL;
        $i = 0; $j = 0; $k = $p;
        echo "i is ".$i; echo " j is ".$j; echo " k is ".$k;
        echo PHP_EOL;
        while($i < $n1 && $j < $n2 ){
            echo "Inside sorter loop\n";
            echo "i is ".$i; echo " j is ".$j; echo " k is ".$k;
            if($L[ $i ] <= $M[ $j ]){
                $arr[$k] = $L[$i];
                $i++;
            }else{
                $arr[$k] = $M[$j];
                $j++;
            }
            $k++;
            // break;
        }

        print_r($arr);
        echo "i is ".$i; echo " j is ".$j; echo " k is ".$k;
        echo PHP_EOL;
        echo PHP_EOL;
        // exit;

        while($i < $n1){
            $arr[$k] = $L[$i];
            $i++;
            $k++;
        }
        While($j < $n2){
            $arr[$k] = $M[$j];
            $j++;
            $k++;
        }
    }
}