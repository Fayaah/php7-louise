<?php //PAGE 1
//commentaire sur une seule ligne
print "\tCoucou\n"; //(\t alinéa) retour à la ligne interprété
print '\tCoucou\n';//(\n ou .PHP_EOL est un retour à la ligne) retour à la ligne non interprété

/*
commentaire sur plusieurs lignes
*/

#ne pas utiliser ce style de commentaire

print 'C\'est finit'; //
print ("C'est finit"); //garder les ' pour les caractères

//VARIABLES EN ANGLAIS

//définition d'une variable avec un $
$captainAge = 75; //variable en camelCase
$parrotName = "Kikou";
$shipName = "L'Insubmersible";
$captainAge = 32; // C'est la dernière valeur affectée à $captainAge qui sera pris en compte

echo $captainAge;//afficher variables
echo $captainAge . "\n";// concaténation
echo 'Mon perroquet : ' .$parrotName. ', mon bateau : ' . $shipName . "\n";
?>

//PAGE 2
======
Types scalaires 👌
======

<?php
// 4 types "scalar"
$captainName = "Morgan"; //type string
$captainAge = 23; //type integer
$captainHeight = 1.70; //type float (chiffre à virgule)
$captainDead = FALSE; //type boolean (true ou false)

// un tableau simple "array"
$captainStats = [
    'name' => $captainName, //clé => valeur contenue dedans
    'age' => $captainAge,
    'height' => $captainHeight,
    'is_dead' => $captainDead,
];
?>

=====
Vérification des types
=====

<?php
// pour débugger le contenu d'une variable
var_dump($captainName); //var_dump = affiche-moi le contenu de cette variable à ce moment là
var_dump($captainAge);
var_dump($captainHeight);
var_dump($captainDead);
print_r($captainStats); // debug mais moins descriptif

// savoir de quel type est une variable
var_dump(is_string($captainAge));
var_dump(is_int($captainAge));
var_dump(is_bool($captainAge));
var_dump(is_array($captainAge));
?>

====
TYPE NULL
====

<?php
// variable qui n'est pas définie
// contient null
var_dump($gabriel); // NULL
var_dump(isset($gabriel)); // false
var_dump(isset($captainAge)); // true

// enlever la valeur d'une variable
$captainAge = null;
var_dump($captainAge);
var_dump(isset($captainAge));
?>

====
LES CONSTANTES
====

<?php
// définition d'une constante
define('PIRATE_FLAG', '💀');

// affichage SANS $
echo PIRATE_FLAG;

// on ne peut pas la modifier
//PIRATE_FLAG = '🎏'; syntax error
//define('PIRATE_FLAG', '🎏'); ALREADY DEFINED
?>

//PAGE TROIS : TRANSTYPAGE

<?php
$captainAge = 33;
$captainAgeString = (string)$captainAge;

var_dump($captainAge);
var_dump($captainAgeString);
var_dump((bool)1337); //true
var_dump((bool)0); //FALSE
var_dump((bool) -1); //true
var_dump((float) -1); //-1
var_dump((int)3.9); //3
var_dump((bool)"true"); //true
var_dump((bool)"false"); //true
var_dump((bool)""); //false
 ?>

 //CONDITIONS PAGE 4

 <?php
$captainDead = true;

if ($captainDead) {
    print "Il est mort 😱 \n"; //alinéa de quatres espaces
} else {
    print "Il est en vie 😱 \n";
}
  ?>

// IF AND SWITCH PAGE 5

<?php
$captainAlive = true;

 // équivaut à : if ($captainAlive) {
 if ($captainAlive == true) {
     print "Il est en vie 😱\n";
 } else {
     print "Il est mort 😱\n";
 }

 // point d'exclamation = "non logique"
 // inversion d'un boolean true -> false, false -> true
 if (!$captainAlive) {
     // équivaut à $captainAlive == false
     print "Il est pas en vie.";
 }

 // explicite, évite de faire une double négation
 $captainDead = !$captainAlive;
 if ($captainDead) {
     print "Il est mort.";
 }

 $captainAge = 23;
 if ($captainAge < 18) {
     print "Le capitaine est mineur.\n";
 } elseif ($captainAge < 30){
     print "Le capitaine est un jeune vieux.\n";
 // si toutes mes conditions sont évaluées à false
 } else {
     print "Le capitaine est vieux\n";
 }

 print "C'est la fin.";
 ?>
