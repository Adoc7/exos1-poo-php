<!--## Exercice 1-->
<!--* Écrire une classe PHP simple qui affiche le message suivant « Bonjour tout le monde !».-->
<!--* Utiliser une méthode __contstruc() publique.-->


<?php
// class : c'est l'usine
class Parler {
    // je déclare ma variable dans une propriété
    private $propriete1 = 'Bonjour tout le monde !';
    // une fonction qui construit un nouvel objet
    function __construct()
    {
        //j'affiche avec $this (celui-ci) la propriété 1
        echo $this->propriete1;
    }

//    public function parler() {
//        //Fait quelque chose...
//    }
}
// création d'un nouvel objet (instanciation d’une classe) Parler
$objet = new Parler;
?>

<br/>

<!--## Exercice 2-->
<!--* Ecrire une classe PHP contenant la propriété **$chaine** suivante: "Bonjour Tout Le Monde, moi c'est "-->
<!--* Créer la méthode **presentation** qui permet d'afficher la chaine suivi de **VotreNom**".-->
<!--* **VotreNom** est un argument(paramètre) de la méthode **presentation**.-->
<?php
class Entree1 {
    private $chaine = "Bonjour Tout Le Monde, moi c'est ";
    function __construct()  {
        //j'affiche avec $this (celui-ci) la propriété 1
        echo $this->chaine;
    }
}

class Entree2 extends Entree1 {
    private $presentation = "Cap'tain Adoc";
    function __construct() {
        parent::__construct();
        echo $this->presentation;
    }
}

class Entree3 extends Entree2 {
    private $toto= " Toto";
    function __construct() {
        parent::__construct();
        echo $this->toto;
    }
}
$objet = new Entree3 ;
?>
<br>
<!--## Exercice 3-->
<!--* Définissez la classe **Phrase** qui contient :-->
<!---->
<!--- Une propriété private nommée "chaine"-->
<!--- Quatre méthodes de type public nommées gras(), italique(), souligne() et majuscules()-->
<!--qui retournent respectivement la chaîne passée en argument mise en gras, en italique,-->
<!--soulignée et mise en majuscules(voir le résultat image1.png)-->
<?php
class Phrase{
    private $chaine = "Programmation orientée objet en php";
    function __construct(){
        echo $this->chaine;
    }
    function gras(){
        echo "<p><b>".$this->chaine."</b></p>";
    }
        function italique(){
             echo "</b><p><i>".$this->chaine."</i></p>";
        }

    function souligne (){
                echo "<p><u>".$this->chaine."</u></p>";
    }
    function majuscule(){
        echo strtoupper($this->chaine);

    }
}
$objet = new Phrase;

$objet->gras();
$objet->italique();
$objet->souligne();
$objet->majuscule();

?>
<br>
<br>
//## Exercice 4
//* Écrivez une classe PHP qui trie un tableau d'entiers
// dans l'ordre croissant en utilisant la fonction **sort()** de PHP.
//* Créer une méthode __construc() qui prend en argument le tableau.
//* Créer la méthode **tri** qui renvoie le tableau trié.
//* Afficher le tableau trié à l'aide de **var_dump** ou **print_r**
//
//          Exemple:
//          Tableau d'entiers : array(11, -2, 4, 35, 0, 8, -9)
<br>
//          Résultat :
<br>

//Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
<br><br><br>
<?php

class TriTableau{

    private $_tableau;
    public function __construct($_tableau)
    {
        $this->tableau = $_tableau;
    }
    public function tri(){
        $tabAtrier = $this -> tableau;
        sort($tabAtrier);
        return $tabAtrier;
    }
}

$tabTrie = new TriTableau (array(11, -2, 4, 35, 0, 8, -9));
print_r($tabTrie->tri());
?>

<!--## Exercice 4-->
<!--* Réaliser une calculatrice:-->
<!--* Ecrire une classe PHP avec un constructeur qui possède deux arguments,-->
<!--* Écrire les méthodes qui permettent de calculer l'addition, la soustraction , la multiplication,  ou la division des deux arguments.-->
<!---->
<!--Exemple d'exécution:-->
<!--$calc = new MaCalculatrice( 8, 4);-->
<!--echo $calc- > ajout(); // affichera 12-->
<!--echo $calc- > produit(); // affichera32-->


<?php
class Calculatrice{
    private $_ch1;
    private $_ch2;
    function __construct($a,$b){
        echo $this->_ch1=$a;
        echo $this->_ch2=$b;
    }
    function addition(){
        return $this->_ch1 + $this->_ch2.'<br>';
    }
    function soustraction(){
        return $this->_ch1 - $this->_ch2.'<br>';
    }
    function multiplication(){
        return $this->_ch1 * $this->_ch2.'<br>';
    }
    function division(){
        return $this->_ch1 / $this->_ch2.'<br>';
    }
}
$operation = new calculatrice(251,13);

echo $operation->addition();
echo $operation->soustraction();
echo $operation->multiplication();
echo $operation->division();

?>
<br>
<br>

