<?php include __DIR__ . "/public/header.html.php" ?>
<main>
    <h2>Listes</h2>
    <section>
        <h3>Les listes non-ordonnées - ul</h3>
        <ul class="fruit">
            <li><i class="fa fa-hand-spock-o" aria-hidden="true"></i> Orange</li>
            <li><i class="fa fa-hand-spock-o" aria-hidden="true"></i> Fraise</li>
            <li><i class="fa fa-hand-spock-o" aria-hidden="true"></i> Poire</li>
        </ul>
    </section>

    <section>
        <h3>Les listes ordonnées - ol</h3>
        <ol>
            <li>Html/Css</li>
            <li>PHP/SQL</li>
            <li>JS/JQUERY</li>
        </ol>
    </section>

    <section>
        <h3>Listes imbriquées</h3>
        <ul class="imbriquee">
            <li class="europe">Europe
                <ul>
                    <li>France</li>
                    <li>Italie</li>
                    <li>Espagne</li>
                </ul>
            </li>
            <li class="asie">Asie
                <ul>
                    <li>Chine</li>
                    <li>Japon</li>
                    <li>Laos</li>
                </ul>
            </li>
        </ul>
    </section>

    <section>
        <h3>Listes de définitions</h3>
        <dl>
            <dt>F</dt>
            <dd>Foxtrot</dd>
            <dd>France</dd>
            <dd>Food</dd>
        </dl>
    </section>
</main>

<?php include __DIR__ . "/public/footer.html.php" ?>