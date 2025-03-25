<?php
require("Model/pdo.php");?>

<form action="Views/nouvel_etudiant.php" method="post">
   Nouvel étudiant <br>
   Prénom : <input type="text" name="prenom" />
   Nom : <input type="text" name="nom" />

   <input type="submit" value="Valider" />
</form>

<form action="Views/nouvelle_matiere.php" method="post">
        
   Nouvelle Matière : <input type="text" name="matiere" />

   <input type="submit" value="Valider" />
</form>

<?php
$resultat = $dbPDO->prepare("DELETE FROM etudiants WHERE id = 9");
$resultat ->execute();

$resultat = $dbPDO->prepare("SELECT * FROM etudiants");
$resultat ->execute();
$etudiants= $resultat->fetchAll();

echo "<br><br> Les étudiants : <br><br>";

foreach($etudiants as $etudiants) {
   echo $etudiants['nom'].' '.$etudiants['prenom'].'<br><a href="Views/modif_etudiant.php?nom='.$etudiants['nom'].'&prenom='.$etudiants['prenom'].'&id='.$etudiants['id'].'">Modifier</a><br><a href="Views/suppression_etudiant.php?id='.$etudiants['id'].'">Supprimer</a><br>';
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

$resultat = $dbPDO->prepare("SELECT * FROM matiere");
$resultat ->execute();
$matiere = $resultat->fetchAll();

echo "<br><br> Les matiere : <br><br>";

foreach($matiere as $matiere) {
   echo $matiere['lib']."<br>";
}
?>