<nav>
    <!--Zone du menu, les liens pour naviguer sur le site-->
    <div class="ancreNav">
        <a href="index.php" class="<?= ($activePage == 'index') ? 'active' : ''; ?>">Structure</a>
        <a href="texte.php" class="<?= ($activePage == 'texte') ? 'active' : ''; ?>">Texte</a>
        <a href="selecteur.php" class="<?= ($activePage == 'selecteur') ? 'active' : ''; ?>">Selecteur</a>
        <a href="image.php" class="<?= ($activePage == 'image') ? 'active' : ''; ?>">Image</a>
        <a href="position.php" class="<?= ($activePage == 'position') ? 'active' : ''; ?>">Position</a>
        <a href="zoning.php" class="<?= ($activePage == 'zoning') ? 'active' : ''; ?>">Zoning</a>
        <a href="tableau.php" class="<?= ($activePage == 'tableau') ? 'active' : ''; ?>">Tableau</a>
        <a href="liste.php" class="<?= ($activePage == 'liste') ? 'active' : ''; ?>">Liste</a>
        <a href="lien_menu.php" class="<?= ($activePage == 'lien_menu') ? 'active' : ''; ?>">Lien & menu</a>
        <a href="formulaire.php" class="<?= ($activePage == 'formulaire') ? 'active' : ''; ?>">Formulaire</a>
        <a href="multimedia.php" class="<?= ($activePage == 'multimedia') ? 'active' : ''; ?>">Multimedia</a>
        <a href="animation.php" class="<?= ($activePage == 'animation') ? 'active' : ''; ?>">Animation</a>
    </div>
</nav>