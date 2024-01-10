# GamePoo
1. THE GAME !

Exercice 1 :
Creez une classe Personnage qui reprend les attributs suivants : force, pv, endurance et
nom. Pour simplifier les choses utilisez des entiers.
Un personnage peut attaquer un personnage. Pour ce faire il a une méthode attaquer qui
prend en argument la cible de l’attaque. Implémentez cette méthode. Cette méthode affiche
un message permettant de savoir ce qui s’est passé.
Creez 3 races de personnages qui définissent des valeurs par défauts des attributs pour
chaque type. Orc, Humain, et Elfe. Equilibrez les attributs pour éviter les one shot.

Exercice 2 :
Implémentez un duel dans le « INDEX» :
Pour plus de facilité stockez les duellistes dans un tableau de longueur 2 nommé
domeDuTonnere. Deux combattants rentrent, un seul sort !
beWeb par Fondespierre – 291 chemin de Fondespierre, 34160 Castries


2. GAME ENGINE
   
Exercice 1 :
Creez un objet GameEngine qui va gérer le mécanisme de combat pour plus de violence !!
Cet objet fourni les methodes
- addCombattant(Personnage p)
- start() ;
Il possede les methodes propres au mecanisme de jeu suivantes :
- getId() qui retourne un id aléatoire
- getJoueur() qui retourne un joueur aléatoirement
- tourDeJeu() qui effectue les actions de chaque tour
- nettoyerMort() qui enleve un mort de l’arene si il y a en a un
- fin() qui retourne vrai si le combat est fini
  
Exercice 2 :
Testez le jeu
