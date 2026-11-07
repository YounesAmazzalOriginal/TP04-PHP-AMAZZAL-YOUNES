<?php
    class Voiture {
        public $marque;
        public $couleur;

        public function setMarque($m) {
            $this->marque = $m; // $this = l'objet qui appelle la méthode
        }
        public function afficher() {
            echo "Marque : " . $this->marque . " | couleur : " . $this->couleur . "<br>";
        }
        public function setCouleur($couleur) {
            $this->couleur = $couleur;
        }
    }
    
    $v1 = new Voiture();
    $v1->setMarque("Toyota");
    $v1->afficher();

    echo "<br><br><b>0.1</b><br>";
    $v2 = new Voiture();
    $v2->setMarque("Renault");
    
    $v2->couleur = "rouge";
    echo "avant le changement<br>";
    $v2->afficher();

    echo "apres le changement<br>";
    $v2->setCouleur("blue");
    $v2->afficher();

    echo "<br><br><b>0.3</b><br>";
    echo '<i>$v1 et $v2 ne partage pas la meme marque, car on écrire new pour les deux</i>';
?>