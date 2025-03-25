<?php
    require("../Model/pdo.php");

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];

    $resultat = $dbPDO->prepare("INSERT INTO etudiant(prenom, nom, classeid) VALUES ('$prenom', '$nom', 1)");
    $resultat ->execute();

    if(isset($_POST['prenom']) && isset($_POST['nom'])){
        echo "<br>Etudiant ".$_POST['prenom']." ".$_POST['nom']." ajouté ";
    }else{
        echo '<br>Erreur dans les données saisies.';
    }

    
?>

<a href="../index.php"></a>