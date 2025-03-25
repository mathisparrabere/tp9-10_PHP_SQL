<?php
    require("../Model/pdo.php");?>

<?php
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];

    $id = $_GET['id'];

    $resultat = $dbPDO->prepare("UPDATE etudiant SET prenom = $prenom, nom = $nom WHERE id = $id");
    $resultat ->execute();
?>