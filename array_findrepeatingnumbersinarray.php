<?php

$array_values = array(80,250,30,40,90,10,50,60,50);  
$max = $max2 = 0;

$duplicates_values = [];
    for($i = 0; $i < count($array_values); $i++){
        for ($j=$i+1; $j <count($array_values) ; $j++) { 
            if ($array_values[$i] == $array_values[$j]) {
                $duplicates_values[] =  $array_values[$i];
            }
        }
    
    }
    if(count($duplicates_values) > 0){
        print_r(  $duplicates_values);
    }    


/**- with php */
// $dups = array();
// foreach(array_count_values($array_values) as $val => $c)
// if($c > 1) $dups[] = $val;
//  print_R($dups);
