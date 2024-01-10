<?php

class Orc extends Personnage{

    protected $race = "Orc";
    public $persoOrc = array();

    public function __construct(int $f, int $pv, int $endu, $n){
        $this->force = $f;
        $this->pv = $pv;
        $this->endurance = $endu;
        $this->nom = $n;
    }
    
    /*
    // à la création de l'objet, le constructeur parent pren le relai :
    public function __construct($f, $pv, $endu, $n){
        parent::__construct(int $f, int $pv, int $endu, $n);
    }
    */
    
}
