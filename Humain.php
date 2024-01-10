<?php

class Humain extends Personnage{
    
    protected $race = "Humain";
    public $persoHumain = array();

    public function __construct(int $f, int $pv, int $endu, $n){
        $this->force = $f;
        $this->pv = $pv;
        $this->endurance = $endu;
        $this->nom = $n;
    }

    


}
