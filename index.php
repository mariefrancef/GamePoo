<?php
echo "<pre>";

include "./Personnage.php";
include "./Orc.php";
include "./Humain.php";
include "./Elfe.php";
include "./GameEngine.php";

$orc1 = new Orc(100, 30, 30, "Ogolgrub");
$humain1 = new Humain(30, 100, 50, "Ianius");
$elfe1 = new Elfe(50, 30, 100, "Galawen");

$game1 = new GameEngine;
$game1->addCombattant($orc1);
$game1->addCombattant($humain1);

print_r($game1);
$game1->getId();

print_r($game1->getId());

echo "<br>";
//print_r($orc1);

//$orc1->attaquer($humain1);


/*
function duel($combattant1, $combattant2){
    echo "Le duel commence entre " . $combattant1->nom . " et " . $combattant2->nom . " !<br>";

    while ($combattant1->pv > 0 && $combattant2->pv > 0){
        $degats = $combattant1->force / 2;
        //$combattant2->pv - $degats;
        $combattant2->pv = $combattant2->pv - $degats;
        
        echo $combattant1->nom . " attaque " . $combattant2->nom . " et lui inflige " . $degats . " points de dégâts !<br>";

        if ($combattant2->pv <= 0) {
            echo $combattant2->nom . " est K.O. !<br>";
        } else {
            echo $combattant2->nom . " a " . $combattant2->pv . " pv restants.<br>";
        }
    }

    echo "<br>";

    $domeDuTonnere = array($combattant1, $combattant2);
    print_r($domeDuTonnere);
}
*/
echo "<br>";
$game1->start();
echo "<br>";
print_r($game1->getJoueur());


