<!DOCTYPE html>
<html>

    <head>

        <title>RÉPONSE</title>
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

            <h2> - Exo5. Un poil de sécurité </h2>

            <br><br>

            <p> 2. Modifiez vos fichiers pour utiliser la méthode POST plutôt que GET. Questions
            ouvertes : quels sont les changements que vous observez ? D'après-vous, si vous
            avez dans votre formulaire un mot de passe, quelle méthode est à favoriser pour
            plus de sécurité ?</p>

            <br><br>

            <p> Réponse : <br>

            Avec la méthode POST les informations ne sont pas renseigés dans l'URL contrairement à la méthode GET, ce qui
            est moins sécurisé du point de vue de la confidentialité et de la protection des données, l'utilisateur peut également changer
            ses informations depuis l'URL ce qui pourra causer des bug par la suite. Selon moi, si nous avons dans un formulaire un mot
            de passe, il est préfèrable d'utiliser la méthode POST pour plus de sécurité. </p>

            <br><br>

            <h2> - Exo6. Aller plus loin </h2>

            <br><br>

            <p> 1. La variable globale $_REQUEST est un tableau associatif qui contient par défaut les
            valeurs des variables $_GET, $_POST et $_COOKIE. Changez le code de vos pages
            pour utiliser cette variables plutôt que $_GET ou $_POST. Jouez maintenant avec la
            méthode de validation de votre formulaire et les paramètres donnés à votre page :
            remettez votre formulaire en méthode GET et mettez lui comme action
            « resultat.php?nom=toto », nom étant le nom du champs de saisie du nom de
            l'utilisateur. Validez votre formulaire avec comme nom autre chose que toto.
            Questions ouvertes : quelle est la valeur retenue pour nom ? Quel est l'avantage
            d'utiliser $_REQUEST ? </p>

            <br><br>

            <p> Réponse : <br>

                L'avantage d'utiliser $_REQUEST est qu'on peut sans se demander de quelle manière transite
                l'identifiant de session (soit par cookie, soit par l'url soit par un champ caché d'un formulaire)
                utiliser les données au lieu d'utiliser une cascade de if pour savoir d'où vient l'identifiant. </p>

        </div>

    </body>

</html>