<?php

$maxloop = 11; // Isi Disini
if($maxloop % 2 == 0){
    echo "Angka Harus Ganjil";
    exit();
}
$reverse = 0;
$arrayEven[] = 0;
$arrayOdd[] = 0;
// $reverseArrayEven = 
for($x = 0; $x < $maxloop * 2; $x++){
    if($x % 2 == 0){
        $arrayEven[] = $x;
    }else{
        $arrayOdd[] = $x;
    }
}
$ReverseArrayEven = array_reverse($arrayEven);
$ReverseArrayOdd = array_reverse($arrayOdd);
for($x = 0; $x <= $maxloop; $x++)
{
    $char = 0;
    if($x == 0){
        echo "\t";
        for ($y = 1; $y <= $maxloop; $y++) {
            echo $y . "\t";
        }
        echo PHP_EOL;
        continue;
	}

    echo $x . "\t";
    if($x <= ceil($maxloop / 2)){
        for($y = 1; $y < $x ; $y++){
            echo "A\t"; 
            $char++;
        }
        echo $arrayOdd[$x] . "\t";
        for($y = 1; $y < $maxloop - ($char * 2) -1; $y++)
        {
            echo "-\t";
        }
        if($x != ceil($maxloop / 2)){
                echo $ReverseArrayEven[$x-1] . "\t";
        }
        for($y = 1; $y < $x ; $y++){
            echo "B\t"; 
            $char++;
        }
    }else{
        $reverse += 2;
        for($y = $x-(1+$reverse); $y > 0; $y--){
            echo "A\t";
            $char++;
        }
        echo $arrayEven[$x-$reverse] . "\t";
        for($y = 1; $y < $maxloop - ($char * 2) -1; $y++)
        {
            echo "-\t";
        }
        echo $arrayOdd[$x]. "\t";
        for($y = $x-(1+$reverse); $y > 0; $y--){
            echo "B\t";
            $char++;
        }
    }
    echo PHP_EOL; 
}