<div class="Contenue">

    <form action="resultat.php" method="POST">

        <p>Nom : <input type="text" name="Nom" placeholder="Votre nom"></p>
        <br>
        <p>Prénom : <input type="text" name="Prenom" placeholder="Votre prénom"></p>
        <br>
        <p>Age : <input type="text" name="Age"></p>
        <br>
        <p>Adresse mail : <input type="text" name="Mail"></p>
        <br>
        <p>Mot de passe : <input type="password" name="MDP"></p>
        <br>
        <p>Retapez votre mot de passe : <input type="password" name="MDPbis"></p>
        <br>
        <p>Commentaire : <input type="text" name="Commentaire" placeholder="Tapez ici vos commentaires..." id="Commentaire"></p>
        <br>
        <p>Sexe : <input type="radio" name="Sexe" value="Homme" checked> Homme <input type="radio" name="Sexe" value="Femme"> Femme </p>
        <br>
        <p>Hobbies :

            <input type="checkbox" id="Cinema" name="Hobbies" value="Cinema">
            <label for="Cinema">Cinéma</label>

            <input type="checkbox" id="Musique" name="Hobbies" value="Musique">
            <label for="Musique">Musique</label> <br>

            <input class="Choice" type="checkbox" id="Theatre" name="Hobbies" value="Theatre">
            <label for="Theatre">Théatre</label>

            <input type="checkbox" id="Equitation" name="Hobbies" value="Equitation">
            <label for="Equitation">Equitation</label> <br>

            <input class="Choice" type="checkbox" id="PlancheaVoile" name="Hobbies" value="PlancheaVoile">
            <label for="PlancheaVoile">Planche à Voile</label>

            <input type="checkbox" id="Rien" name="Hobbies" value="Rien" checked>
            <label for="Rien">Rien</label>

        </p>

        <input type="hidden" name="FLAG" value="1">

        <br>

        <input type="submit" class="btn" name="envoyer" value="Envoyer">

    </form>

    <button type="button" class="btn" name="Reinitialiser" value="Réinitialiser" onclick="javascript:location.reload();">Réinitialiser</button>

</div>