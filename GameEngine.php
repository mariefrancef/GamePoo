<?php
echo "<pre>";


class GameEngine{

    public $personnages = array();

    public function addCombattant($personnage){
        array_push($this->personnages, $personnage);
    }

    public function start(){
        if(count($this->personnages) < 2){
            echo "Veuillez rajouter un combattant pour lancer le duel !";
            // echo count($this->personnages);
            exit;
        }
        elseif(count($this->personnages) > 2){
            echo "Il y a trop de combattants pour lancer le duel !";
            // echo count($this->personnages);
            exit;
        }

        $combattant1 = $this->personnages[0];
        $combattant2 = $this->personnages[1];

        echo "Le duel commence entre " . $combattant1->nom . " et " . $combattant2->nom . " !<br>";

        while (!$this->fin($combattant1, $combattant2)) {
            $this->tourDeJeu($combattant1, $combattant2);
        }
        $this->nettoyerMort();
        echo "<br>";

    }

    // retourne un id aléatoire
    public function getId(){
        $id = rand(0, 100);
        return $id;
    }

    // retourne un joueur aléatoirement
    public function getJoueur(){
        // -1 car il inclus le 0 dans le tableau :
        $personnageID = rand(0, count($this->personnages)-1);
        return $this->personnages[$personnageID];
    }

    // effectue les actions de chaque tour
    public function tourDeJeu($combattant1, $combattant2){

        $degats = $combattant1->force / 2;
        $combattant2->pv = $combattant2->pv - $degats;  
        echo $combattant1->nom . " attaque " . $combattant2->nom . " et lui inflige " . $degats . " points de dégâts !<br>";

        if ($combattant2->pv <= 0) {
            echo $combattant2->nom . " est K.O. !<br>";
        } else {
            echo $combattant2->nom . " a " . $combattant2->pv . " pv restants.<br>";
        }
    }

    // enleve un mort de l’arene si il y a en a un
    public function nettoyerMort(){
        if ($this->personnages[0]->pv <= 0) {
            echo $this->personnages[0]->nom . " est nettoyé de l'arène !<br>";
        }
        else{
            echo $this->personnages[1]->nom . " est nettoyé de l'arène !<br>";
        }
    }

    // return true si le combat est fini
    public function fin($combattant1, $combattant2){
        if($combattant1->pv <= 0 || $combattant2->pv <= 0){
            return true;
        }
        else{
            return false;
        }  
    }
}

