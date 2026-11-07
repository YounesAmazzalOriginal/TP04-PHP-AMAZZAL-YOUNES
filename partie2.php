<?php
    class Voiture {
        public string $couleur;
        public int $vitesse;

        public function __construct(string $couleur = "Blanche", int $vitesse = 0) {
            $this->couleur = $couleur;
            $this->vitesse = $vitesse;
        }

        public function afficher(): void {
            echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . "<br>";
        }

    }

    $v1 = new Voiture(); // valeurs par défaut
    $v2 = new Voiture("Rouge", 50); // valeurs personnalisées
    $v1->afficher();
    $v2->afficher();

    $v = new Voiture("Noire");
    // echo $v;

    echo "<br><br><b>2.1a</b><br>";
    echo 'avec new Voiture("Noire"), il va affecter Noire a $couleur et $vitesse = 0<br>';
    echo 'avec new Voiture(120), il va généré erreu car il va affecter 120 dans $couleur, type différent';

    
    echo "<br><br><b>2.1b</b><br>";
    echo '<pre>class Voiture2 {
        public $couleur;
        public $vitesse;

        public function __construct($couleur = "Blanche", $vitesse = 0) {
            $this->couleur = $couleur;
            $this->vitesse = $vitesse;
        }
        public function afficher(): void {
            echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h<br>";
        }
    }</pre>';
    echo "<i>l'aventage de cette écriture c'est determiner le type des parametre d'objet</i>";

    echo "<br><br><b>2.2a</b><br>";
    echo "si on déclare la class Personne avec deux __construct il va généré un erreur de déclaration suivant<br><i>Fatal error: Cannot redeclare Personne::__construct() in C:/xampp/htdocs/tp_poo/partie1.php on line 16</i>";
    
    echo "<br><br><b>2.3 Le destructeur</b><br>";

    
    // $maVoiture = new Voiture("Blanche");
    // unset($maVoiture); // appelle __destruct()
    // echo "Fin du script <br>";


    echo "<h2>2.3 Le destructeur</h2><br>";
    
    echo "<br><b>2.3.a :</b>";
    echo "il va afficher : Voiture Blanche créée, apres Voiture Blanche détruite";
    
    echo "<br><br><b>2.3.b :</b>";
    echo "si on supprime la ligne unset(\$maVoiture); il va afficher Voiture Blanche créée";

    echo "<br><br><b>2.3.c :</b>";
    echo "si on cree deux vbariable \$a et \$b, il va detruite la deuxieme, apres la premier";

    echo "<br><br><b>2.3.d :</b>";
    echo "si on ajoute __destruct contient __CLASS__, la premier destruction de l'objet, il va afficher le nom du class Personne";
?>