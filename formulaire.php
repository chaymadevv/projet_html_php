<?php include __DIR__ . "/public/header.html.php" ?>
<main>
    <h2>Formulaire</h2>

    <section>
        <!--Method : maniéres de circulation des données-->
        <!--Action : url de destination-->
        <!--Action : permet d'envoyé un fichier correctement ( encodage)-->
        <form method="post" action="url de destination" enctype="multipart/form-data">
            <label for="pseudo">Pseudo *</label>
            <input type="text" id="pseudo" name="pseudo" required><br>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Taper votre prenom"><br>

            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="mdp"><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email"><br>

            <label for="cv">CV</label>
            <input type="file" id="cv" name="cv"><br>

            <p>Quel sont vos fruits préférés ?</p>
            <label for="orange">Orange</label>
            <input type="checkbox" id="orange" value="orange" checked>
            <label for="fraise">Fraise</label>
            <input type="checkbox" id="fraise" value="fraise">
            <label for="poire">Poire</label>
            <input type="checkbox" id="poire" value="poire"><br>

            <label for="cp">Code postal</label>
            <input type="text" id="cp" name="cp" maxlength="5" pattern="[0-9]{5}" title="5 chiffres entre 0 et 9">
            <br>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" cols="25"></textarea><br>

            <input type="submit" name="envoyer" value="Envoyer">
            <input type="reset" name="annuler" value="Annuler">
        </form>
    </section>
</main>

<?php include __DIR__ . "/public/footer.html.php" ?>