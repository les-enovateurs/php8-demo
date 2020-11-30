<h1>PHP 7 - Opérateur Nullsafe</h1>
<h3>Création des classes d'exemples</h3>
<pre>
    class Freelance{
        public Utilisateur $utilisateur;
        public function __construct(Utilisateur $utilisateur=null){
            $this->utilisateur = $utilisateur;
        }
    }

    class Utilisateur
    {
        private Adresse $adresse;
        public function __construct(Adresse $adresse){
            $this->adresse = $adresse;
        }

        public function getAdresse(){
            return $this->adresse;
        }

    }

    class Adresse
    {
        private $ville;
        public $pays;

        public function __construct($ville=null, $pays=null)
        {
            $this->ville = $ville;
            $this->pays    = $pays;
        }
    }
</pre>
<?php

    class Freelance{
        public Utilisateur $utilisateur;
        public function __construct(Utilisateur $utilisateur=null){
            $this->utilisateur = $utilisateur;
        }
    }

    class Utilisateur
    {
        private Adresse $adresse;
        public function __construct(Adresse $adresse){
            $this->adresse = $adresse;
        }

        public function getAdresse(){
            return $this->adresse;
        }

    }

    class Adresse
    {
        private $ville;
        public $pays;

        public function __construct($ville=null, $pays=null)
        {
            $this->ville = $ville;
            $this->pays    = $pays;
        }
    }

 ?>
<h3>Création d'un objet freelance et accès à la propriété pays avec une valeur nulle</h3>
<pre>
        $freelance = new Freelance(new Utilisateur(new Adresse()));
        $pays = null;
        if ($freelance !== null) {
            $utilisateur = $freelance->utilisateur;

            if ($utilisateur !== null) {
                $adresse = $utilisateur->getAdresse();

                if ($adresse !== null) {
                    $pays = $adresse->pays;
                }
            }
        }
        var_dump($pays);
    </pre>
<?php
$freelance = new Freelance(new Utilisateur(new Adresse()));
$pays = null;
if ($freelance !== null) {
    $utilisateur = $freelance->utilisateur;

    if ($utilisateur !== null) {
        $adresse = $utilisateur->getAdresse();

        if ($adresse !== null) {
            $pays = $adresse->pays;
        }
    }
}
var_dump($pays);

?>
<h3>Création d'un objet freelance et accès à la propriété pays avec une véritable valeur</h3>
<pre>
    $freelance = new Freelance(new Utilisateur(new Adresse('Lyon', 'France')));
    if ($freelance !== null) {
        $utilisateur = $freelance->utilisateur;

        if ($utilisateur !== null) {
            $adresse = $utilisateur->getAdresse();

            if ($adresse !== null) {
                $pays = $adresse->pays;
            }
        }
    }

    var_dump($pays);
</pre>

<?php
$freelance = new Freelance(new Utilisateur(new Adresse('Lyon', 'France')));
if ($freelance !== null) {
    $utilisateur = $freelance->utilisateur;

    if ($utilisateur !== null) {
        $adresse = $utilisateur->getAdresse();

        if ($adresse !== null) {
            $pays = $adresse->pays;
        }
    }
}

var_dump($pays);

?>
<h1>PHP 8 - Opérateur Nullsafe</h1>
<h3>Création des classes d'exemples</h3>
<pre>
    class Freelance8{
        public function __construct(public ?Utilisateur8 $utilisateur = null){}
    }

    class Utilisateur8{
        public function __construct(private ?Adresse8 $adresse = null){}
        public function getAdresse(){
            return $this->adresse;
        }
    }

    class Adresse8{
        public function __construct(private ?string $adresse = null, public ?string $pays = null){}
    }
</pre>

<?php

class Freelance8{
    public function __construct(public ?Utilisateur8 $utilisateur = null){}
}

class Utilisateur8{
    public function __construct(private ?Adresse8 $adresse = null){}
    public function getAdresse(){
        return $this->adresse;
    }
}

class Adresse8{
    public function __construct(private ?string $adresse = null, public ?string $pays = null){}
}
?>

<h3>Création d'un objet freelance et utilisation de l'opérateur NullSafe sur une valeur nulle</h3>
<pre>
$freelance = new Freelance8(new Utilisateur8(new Adresse8()));

$pays = $freelance?->utilisateur?->getAdresse()?->pays;
var_dump($pays);
</pre>

<?php

$freelance = new Freelance8(new Utilisateur8(new Adresse8()));

$pays = $freelance?->utilisateur?->getAdresse()?->pays;
var_dump($pays);
?>

<h3>Création d'un objet freelance et utilisation de l'opérateur NullSafe sur une véritable valeur</h3>
<pre>
$freelance = new Freelance8(new Utilisateur8(new Adresse8('Lyon', 'France')));
$pays = $freelance?->utilisateur?->getAdresse()?->pays;


var_dump($pays);
</pre>

<?php

$freelance = new Freelance8(new Utilisateur8(new Adresse8('Lyon', 'France')));
$pays = $freelance?->utilisateur?->getAdresse()?->pays;


var_dump($pays);
    ?>
