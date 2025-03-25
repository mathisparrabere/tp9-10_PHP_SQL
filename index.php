<?php
require("Model/pdo.php");

$resultat = $dbPDO->prepare("SELECT * FROM etudiants");
$resultat ->execute();
$etudiants= $resultat->fetchAll();

echo "<br><br> Les étudiants : <br><br>";

foreach($etudiants as $etudiants) {
   echo $etudiants['nom']." ".$etudiants['prenom']."<br>";
}

$resultat = $dbPDO->prepare("SELECT * FROM classes");
$resultat ->execute();
$classes= $resultat->fetchAll();

echo "<br><br> Les classes : <br><br>";

foreach($classes as $classes) {
   echo $classes['libelle']."<br>";
}

$resultat = $dbPDO->prepare("SELECT * FROM professeurs");
$resultat ->execute();
$professeurs= $resultat->fetchAll();

echo "<br><br> Les professeurs : <br><br>";

foreach($professeurs as $professeurs) {
   echo $professeurs['nom']." ".$professeurs['prenom']."<br>";
}
?>