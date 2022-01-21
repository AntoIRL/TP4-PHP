<!DOCTYPE HTML>
<html>

    <head>

        <title>CONNEXION</title>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="Script.js"></script>

    </head>


    <body>

        <?php
            require 'EnTete.html';
        ?>

        <div class="Contenue">

            <form method="POST">

                <p>Utilisateur : <input type="text" name="Utilisateur" value="root"></p>
                <br>
                <p>Mot de passe : <input type="password" name="PasswordBDD"></p>
                <br>
                <p>Choix du serveur : <input type="text" name="ChoixServeur" value="MySQL"></p>

                <input type="submit" class="btn" name="Connexion" value="Connexion" onclick="alert('Connexion effectué !')">

            </form>
        </div>

    </body>

</html>