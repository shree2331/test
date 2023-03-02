<?php

$array = array(80,250,30,40,90,10,50,60,50);            // 250  2-times
$max = $max2 = 0;

foreach ($array as $key =>$val) {
    echo $max;echo "<br>";
    if ($max < $val) {
        $max2 = $max;
        $max = $val;      
        echo "max-down".$max;echo "<br>";
        echo "max2-down".$max2;echo "<br>";
    } elseif ($max2 < $val && $max != $val) {
        $max2 = $val; 
        echo "max2-elseif".$max2;echo "<br>";
    }
}

echo "Highest Value is : " . $max . "<br/>";           //output: 250
echo "Second highest value is : " . $max2 . "<br/>";   //output: 90