<?php include __DIR__ . "/public/header.html.php" ?>
<main>
    <h2>Liens & menus</h2>

    <div class="ancre">
        <a href="#lien">Les liens</a>
        <a href="#menu">Les menus</a>
        <a href="#menuDeroulant">Les menus déroulants</a>
    </div>

    <section id="lien">
        <h3>Les liens</h3>

        <a href="http://codepen.io" target="_blank" title="Se rendre sur le site de CodePen">
            CodePen is a social development environment for front-end designers and developers
        </a>
        <br><!-- voir et télécharger mon cv se font de la même manière mais les navigateurs ne réagissent pas tous de la même manière.-->
        <a href="files/cv.doc">Télécharger mon CV</a>
        <br>
        <a href="files/cv.pdf" target="_blank">Voir mon CV</a>
        <br>
        <a href="#" onclick="window.print()">Imprimer la page</a>
        <br>
        <p>Cliquez <a href="index.html">ici</a> pour vous rendre à l'accueil.</p>
    </section>

    <section id="menu">
        <h3>Les menus</h3>

        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Parcours</a></li>
                <li><a href="#">Compétences</a></li>
                <li><a href="#">Réalisation</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </section>

    <section id="menuDeroulant">
        <h3>Les menus déroulant</h3>

        <nav>
            <ul class="niveau1">
                <li>
                    <a href="#">Accueil</a>
                </li>

                <li class="sousMenu">
                    <a href="#">Formation</a>

                    <ul class="niveau2">
                        <li><a href="#">Etudiant</a></li>
                        <li><a href="#">Emploi du temps</a></li>
                        <li><a href="#">Recherche d'emploi</a></li>
                        <li><a href="#">Documents</a></li>
                    </ul>
                </li>

                <li><a href="#">Informations</a></li>

                <li class="sousMenu">
                    <a href="#">Cours</a>

                    <ul class="niveau2">
                        <li><a href="#">Internet</a></li>
                        <li><a href="#">HTML / CSS</a></li>
                        <li><a href="#">CMS</a></li>
                        <li><a href="#">Stats</a></li>
                        <li><a href="#">Réseaux sociaux</a></li>
                        <li><a href="#">Référencement</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Cahier des charges</a></li>
                        <li><a href="#">Photoshop</a></li>
                    </ul>
                </li>

                <li><a href="#">Mon CV</a></li>
            </ul>
        </nav>
    </section>
</main>

<?php include __DIR__ . "/public/footer.html.php" ?>