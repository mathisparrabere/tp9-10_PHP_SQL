<?php
    require("../Model/pdo.php");

    $matiere = $_POST['matiere'];

    $resultat = $dbPDO->prepare("INSERT INTO matiere(lib) VALUES ('$matiere')");
    $resultat ->execute();

    if(isset($_POST['matiere'])){
        echo "<br>Matiere ".$_POST['matiere']." ajoutée ";
    }else{
        echo '<br>Erreur dans les données saisies.';
    }

    
?>

<a href="../index.php"></a>