<?php

abstract class Personnage{
    public $force;
    public $pv;
    public $endurance;
    public $nom;

    public function attaquer($cible){
        echo "$this->nom a attaqué $cible->nom !!";
    }

    /*
    public function stocker(Personnage ...$domeDuTonnere){
        foreach($domeDuTonnere as $dome){
            array_push($this->personnages, $dome);
        }
        $nbPersonnage = count($this->personnages);
        return nbPersonnage;
    }
    */
}
