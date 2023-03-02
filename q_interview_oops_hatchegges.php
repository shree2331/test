<?php

class FireDragon implements Reptile
{
    public function layEgg() : ReptileEgg {
        return new ReptileEgg(new FireDragon());
    }
}

class ReptileEgg
{
    private $hatchCount = 0;
    private $Reptile;

    public function __construct($Reptile){
        $this->Reptile = $Reptile;
    }

    public function hatch(){
        if($this->hatchCount > 0) {
            throw new Exception('The egg already hatched');
        }
        
        $this->hatchCount++;
        return $this->Reptile;
    }
}

$drag = new FireDragon();
$egg = $drag->layEgg();
$childdrag = $egg->hatch();

print_r($childdrag);