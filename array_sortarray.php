<?php

$array=array('2','4','8','5','1','7','6','9','10','3');

echo "Unsorted array is: ";
echo "<br />";
print_r($array);
echo "<br />";


for($j = 0; $j < count($array); $j ++) {

    echo "j".$j;echo "<br>";
    for($i = 0; $i < count($array)-1; $i ++){

        echo "i".$i;echo "<br>";
    
        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
             echo $temp."temp";echo "<br>";
             $array[$i+1]=$array[$i];
             echo $array[$i+1];echo "<br>";
             $array[$i]=$temp;
             echo $array[$i];echo "<br>";
        }       
    }
     echo $i ."<br>";print_R($array);
}

//2458176910

echo "Sorted Array is: ";
echo "<br />";
//print_r($array);

?>