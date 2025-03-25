<?php
    require("../Model/pdo.php");

    $id = $_GET['id'];

    $resultat = $dbPDO->prepare("DELETE FROM etudiants WHERE id = $id");
    $resultat ->execute();

    echo "Suppression réussie !"

?>