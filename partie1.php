<?php
    class Personne {
        public $nom;
        public $prenom;
        private $dateNaissance;
        private $villeNaissance;
        protected $cin;

        function __construct($nom, $prenom, $dateNaissance, $villeNaissance, $cin) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = $dateNaissance;
            $this->villeNaissance = $villeNaissance;
            $this->cin = $cin;
        }

        public function getName() : string {
            return $this->prenom . " " . $this->nom;
        }

        private function getAge(): int {
            $naissance = new DateTime($this->dateNaissance);
            $aujourdhui = new DateTime();

            return $naissance->diff($aujourdhui)->y;
        }
    }

    $p = new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");
    echo $p->getName() . "<br>";
    echo $p->nom . "<br>";
    // echo $p->getAge();

    
    echo "<br><br><b>1.1</b><br>";
    echo '<i>echo $p->cin; et echo $p->dateNaissance donne erreur, car la variable est privet<br>aussi p->getAge() car il est privet</i>';
    
    echo "<br><br><b>1.2 et 1.3</b><br>";
    echo "<i>c'est dangereux de laisser cin en public car on peut recupéré facilement (question de sécurité)</i>";
    
    echo "<br><br><b>1.4</b><br>";
    echo "<i>si on change la visibilité de cin a protected, la comportement ne change pas, aussi protected var on peut l'acceder pas a l'éxterieur du class</i>";
?>