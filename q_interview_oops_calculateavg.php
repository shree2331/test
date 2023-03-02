<?php

class Person
{
    public function __construct(int $height, int $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    public static function calcAvgHeight(array $persons) : float
    {
        if(empty($persons)) return 0;
        $total_age = 0;
        foreach ($persons as $person){
            $total_age += $person->height;
        }
        
        return $total_age / count($persons);
        
        
    }
}

$matt = new Person(174, 69);
$jason = new Person(190, 103);
echo Person::calcAvgHeight( [ $matt, $jason ] );