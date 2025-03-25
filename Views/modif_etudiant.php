

<?php
    require("../Model/pdo.php");

    echo "<br>Modification pour ".$_GET['nom']." ".$_GET['prenom']." d'ID : ".$_GET['id'];

    $id=$_GET['id'];

    $resultat = $dbPDO->prepare("SELECT * FROM etudiants WHERE id = $id");
    $resultat ->execute();

?>

<form action="modif_etudiant2.php" method="get">
   <br> Modifier étudiant <br>
   Prénom modifié : <input type="text" name="prenom" />
   Nom modifié : <input type="text" name="nom" />

   <input type="submit" value="Valider" />
</form>