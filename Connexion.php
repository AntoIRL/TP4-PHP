<?php

    try {

        $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');

    }
    catch (PDOException $e)
    {
        echo "Échec lors de la connexion à MySQL !";
        die();
    }

?>
