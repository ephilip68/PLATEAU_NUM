<h1>Introduction PHP</h1>

<h2>Sous titre</h2>

<?php

// DECLARATION DE VARIABLES
$chaineDeCaracteres = "mon texte"; // string
$chaineDeCaracteres2 = "mon prix est très intéressant"; //string
$chaineDeCaracteres3 = "mon prix est de"; //string
$entier = 50;   //integer
$flottant = 9.99; // float
$booleen = true; // boolean (true ou false)
$tableau1 = array("texte1", "texte 2", "texte 3"); // array
$tableau2 = ["texte 1", "texte 2"]; //array
$date = new DateTime(); // programmation orientée objet (POO)

// AFFICHAGE
echo "Test<br>";
echo $chaineDeCaracteres. "<br>"; // mon texte
echo $chaineDeCaracteres3. " " .$entier. " euros<br>"; // mon prix est de 50 euros
echo "$chaineDeCaracteres3 $entier euros<br>"; // mon prix est de 50 euros

// FONCTIONS CHAINES DE CARACTERES

// Compter le nombre de caractères (espace inclu !)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres). " caractères<br>";

// Convertir une chaine en majuscules
$chaineMajuscules = strtoupper($chaineDeCaracteres);
echo $chaineMajuscules. "<br>";
echo mb_strtoupper($chaineDeCaracteres2). "<br>"; // prend en compte les caractères accentués

// Copter le nombre de mot
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";

// FONCTIONS TABLEAUX
$tailleTableau1 = count($tableau1);
echo "Le tableau 1 contient $tailleTableau1 élément<br>";
echo "Le tableau 2 contient ".count($tableau2). " élément<br>";

// accéder a la première valeur du tableau
echo $tableau1[0]. "<br>";

$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round ($sommeNotes / $nbNotes, 2);

echo "La moyenne est $moyenne<br>";

// OPERATIONS MATHEMATIQUES

$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT €<br>";

// Afficher le total TTC d'une facture
$tauxTVA = 0.20;

$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
$totalTTC2 = $nbArticles * $prixHT * (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC €<br>";

// Renvoie le type de la variable spécifiée en paramètre
// echo gettype($tableau1). "<br>";

// var_dump($tableau1). "<br>";

//STRUCTURES DE CONTROLE

// Conditions (IF + SI)
$prenom = "Georges";
$age = 17;

if($age < 18) {
    $resultat = "mineur";
} else {
    $resultat = "majeur";
}

echo "$prenom est $resultat<br>";

// Ternaire
$result = $age >= 18 ? "majeur" : "mineur";
echo "$prenom est $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>";

// En fonction de l'âge, afficher une catégorie
/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    sinon junior
*/

if(gettype($age)== "integer" || gettype($age) == "double" ) {
    if($age >= 30) {
        $resultat = "senior";
    } elseif($age >= 20) {
        $resultat = "Cadet";
    } else {
        $resultat = "Junior";
    }
    
    echo "La personne qui a $age ans est : $resultat<br>";
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}

/*
    si la valeur est 1 --> OK
    si la valeur est 1 --> KO
    sinon afficher "valeur non gérée"
*/

$valeur = 0;
switch($valeur) {
    case 0: echo "KO !<br>"; break;
    case 1: echo "OK !<br>"; break;
    default: echo "Valeur non gérée !<br>";
}

$age = 34;
if(gettype($age)== "integer" || gettype($age) == "double" ) {
    switch(true) {
    case $age >= 30: echo "Senior<br>"; break;
    case $age >= 20: echo "Cadet<br>"; break;
    default: echo "Junior<br>"; break;
    } 
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}


// BOUCLES (loop)
// Afficher les choffres de 1 à 10

// FOR (pour)
// $i++ --> $i = $i + 1;

for($i =1; $i <= 10; $i++) {
    echo $i. " ";
}

// WHILE (tant que)

$i = 1;
while($i <= 10) {
    echo $i. " ";
    $i++;
}
// FOREACH  
// $range = range(1.10);
// var_dump($range);

foreach(range(1,10) as $v) {
    echo $v. " ";
}

echo "<br>";

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);

echo "<h3>Méthode for</h3>";
for ($i = 0; $i < $nbMarques; $i++) {
    echo $marques[$i]."<br>";
} 

echo "<h3>Méthode while</h3>";
$i = 0;
while($i < $nbMarques) {
    echo $marques[$i]."<br>";
    $i++;
}

echo "<h3>Méthode foreach</h3>";
foreach($marques as $marque){
    echo $marque."<br>";
}

// TABLEAU ASSOCIATIFS
// clé (key) -> valeur (value) (clé doit être unique)

echo "<h3>Tableau Associatif</h3>";
$formateurs = [
    "stephane" => "mulhouse",
    "virgile" => "strasbourg",
    "mika" => "strabourg",
    "dominique" => "colmar"
];

// var_dump ($formateurs);

ksort($formateurs);

foreach($formateurs as $prenom => $ville) {
    echo ucfirst($prenom)." habite ".mb_strtoupper($ville)."<br>";
}

$clients = [
    "stephane" => [
        "adresse" => "10 rue de la Gare",
        "cp" => "67000",
        "ville" => "STRASBOURG",
        "tel" => "0978552147"
    ],

    "virgile" => [
        "adresse" => "1 rue Principale",
        "cp" => "68000",
        "ville" => "MULHOUSE",
        "tel" => "0652896517"
    ]
];

// var_dump($clients);
echo $clients["stephane"]["ville"]."<br>";

foreach($clients as $prenom => $coordonnees){
    echo ucfirst($prenom)." habite ".$coordonnees["adresse"]." ".$coordonnees["cp"]." ".$coordonnees["ville"].
                " et a comme n° de téléphone : ".$coordonnees["tel"]."<br>";
}

// FONCTIONS

function