<?php

class Elfe extends Personnage{

    protected $race = "Elfe";
    public $persoElfe = array();

    public function __construct(int $f, int $pv, int $endu, $n){
        $this->force = $f;
        $this->pv = $pv;
        $this->endurance = $endu;
        $this->nom = $n;
    }

    
}
