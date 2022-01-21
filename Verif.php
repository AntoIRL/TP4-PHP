<!--

On peut après envoi du formulaire vérifier la saisie des champs. On utilisera la fonction
isset() (ou empty()) pour vérifier qu'une variable existe, et la fonction strpos() permettra de
vérifier la présence d'un caractère particulier dans une chaîne de caractères.

A faire :

    Dans la page verif.php précédemment créée, écrire le texte seulement si :
    l'âge est compris entre 0 et 150,
    si le format du mail est : "xx@xx.xx",
    si les deux mots de passes sont équivalents.
    Dans le cas contraire afficher un message d'erreur.
    Prise en compte des corrections
    Une page PHP peut tout à fait se rappeler elle même, et ainsi prendre en compte les
    corrections éventuelles effectuées par un utilisateur. On peut alors transmettre les
    variables non corrigées en champs cachés.
    Les variables peuvent être retransmises à l'aide de champs cachés.

A faire :
    Reprendre la page verif.php et l'adapter en re-proposant un formulaire pour saisir à
    nouveau les champs qui ne convenaient pas, si il y en avait. Ce formulaire rappellera la
    même page, en lui passant toutes les variables de sa connaissance.
    L'utilisateur pourra corriger autant de fois qu'il le souhaite jusqu'à voir enfin le texte de
    validation apparaître.

-->

<div class="Contenue">

    <?php

    /*
     require 'Connexion.php';

    $RecupInfo = $bdd->query('SELECT Age, AdresseMail, MotDePasse, MotDePassebis, Commentaire, Sexe, Hobbies FROM identification WHERE Nom	='.$_REQUEST['Nom'].' AND Prenom = '.$_REQUEST['Prenom']);

    $donnees = $RecupInfo->fetch();

    if ($donnees['AdresseMail'] == "")
    {
    */
        $bVerif = true;

        if (empty($_REQUEST['Nom']) OR empty($_REQUEST['Prenom']) OR empty($_REQUEST['Age']) OR empty($_REQUEST['Mail']) OR empty($_REQUEST['MDP']) OR empty($_REQUEST['MDPbis']) OR empty($_REQUEST['Commentaire']))
        {
            $bVerif = false;
            ?>
            <p><img src="Image/info.png" id="info"> Veuillez remplir tous les champs ! </p> <br>

            <?php
        }

        $Contien = strpos($_REQUEST['Mail'],'@');
        if ($Contien === false)
        {
            $bVerif = false;
            ?>

            <p> <img src="Image/info.png" id="info"> Le format du mail doit être "xx@xx.xx" ! </p> <br>

            <?php
        }

        if ($_REQUEST['MDP'] != $_REQUEST['MDPbis'])
        {
            $bVerif = false;
            ?>

            <p> <img src="Image/info.png" id="info"> Le mot de passe ne correspond pas ! </p> <br>

            <?php
        }

        $type = gettype($_REQUEST['Age']);

        if ($_REQUEST['Age']>100 OR $_REQUEST['Age']<0)
        {
            $bVerif = false;
            ?>

            <p> <img src="Image/info.png" id="info"> L'âge est incorrect ! </p> <br>

            <?php
        }

        if ($bVerif == false)
        {
            require 'Formulaire.php';
        }
        else
        {
            if ($_REQUEST['Sexe'] == "Homme")
            {
                $Genre = "M.";
            }
            else
            {
                $Genre = "Mme.";
            }

            $Hobbies = "";

            foreach ($_REQUEST['Hobbies'] as $selected)
            {
                $Hobbies = $Hobbies. $selected. ", ";
            }

            $Hobbies = substr($Hobbies, 0, -2);


            echo  "Bonjour, ",$Genre, $_REQUEST['Nom']," ", $_REQUEST['Prenom'], " vous  avez  ",$_REQUEST['Age'], " ans. Vous  aimez  ",$Hobbies,". Nous avons bien noté vos commentaires: ",$_REQUEST['Commentaire'],".";

            ?>

            <br> <br>

            <button class="btn" name="Revenir_form" value="Revenir_form" onclick='window.location.href="index.php"'>Revenir au formulaire !</button>

            <?php
        }

    /*}
    else
    {
        echo  "Bonjour, ",$donnees['Sexe'] , $donnees['Nom']," ", $donnees['Prenom'], " vous  avez  ",$donnees['Age'], " ans. Vous  aimez  ",$donnees['$Hobbies'] ,". Nous avons bien noté vos commentaires: ",$donnees['Commentaire'],".";

    }

    $RecupInfo ->closeCursor();*/

    ?>


</div>