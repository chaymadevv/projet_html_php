<?php include __DIR__ . "/public/header.html.php" ?>
<main>
    <h2>Position</h2>

    <section>
        <h3>Centrer un élément de type block</h3>
        <div class="centre"></div>
    </section>

    <section>
        <h3>Position Absolute</h3>
        <p>Carré JAUNE ! Regarde en haut ! </p>
        <div class="absolute"></div>
    </section>

    <section>
        <h3>Position Relative</h3>
        <div class="relative">
            <div></div>
        </div>
    </section>

    <section>
        <h3>Position fixed</h3>
        <p>Bouton retour vers le haut</p>
        <button type="button">
            <i class="fas fa-arrow-circle-up"></i>
        </button>
    </section>

    <section>
        <h3>Le pourcentage</h3>
        <div class="trente">30%</div>
        <div class="cinquante">50%</div>
        <div class="cent">100%</div>
    </section>

    <section>
        <h3>L'attribut Float</h3>

        <div class="float">1</div>
        <div class="float">2</div>
        <div class="float">3</div>
        <div class="float">4</div>
        <div class="float clear">5</div>
        <div class="float">6</div>
        <div class="float">7</div>
        <div class="float clear">8</div>
        <div class="float">9</div>
        <div class="float clear">10</div>
    </section>

    <!-- <div class="clear"></div> -->

    <section>
        <h3>Exercice sur le Float</h3>

        <div class="zone"></div>
        <div class="zone1"></div>
        <div class="zone2"></div>
        <div class="zone3"></div>
        <div class="zone4"></div>
        <div class="zone clear"></div>
    </section>

    <section>
        <h3>Flexbox</h3>
        <!-- Se place en fonction de l'élément parent -->
        <article class="flex">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
        </article>
    </section>
</main>

<?php include __DIR__ . "/public/footer.html.php" ?>