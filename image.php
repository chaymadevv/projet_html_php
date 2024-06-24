<?php include __DIR__ . "/public/header.html.php" ?>
<main>
    <h2>Images</h2>
    <section class="imageFond">
        <h3>Image de fond en CSS</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas recusandae iure, laudantium incidunt totam
            veniam. Error sequi et pariatur, necessitatibus placeat soluta, libero eveniet accusamus, ipsa velit
            corporis provident labore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quas
            voluptas nulla, laboriosam voluptate reiciendis commodi vel! Magni nisi, fuga eum asperiores officia
            commodi laboriosam ea quae iusto esse dolores.</p>
    </section>

    <section>
        <h3>Image dans HTML</h3>
        <figure>
            <img src="public\assets\img\toureiffel.jpg" width="" height="" title="Cette photo montre la tour Eiffel de Paris" alt="Cette photo montre la tour Eiffel de Paris">

            <figcaption>Une photo de la tour Eiffel</figcaption>
        </figure>

    </section>

    <section class="rotationImg">
        <h3>Image en HTML / CSS</h3>
        <!-- On peux mettre un commentaire pour faire sauter la marge entre les 2 images le début du com à la suite de la premiere image et la fin du com au début de la deuxieme image -->
        <img src="public\assets\img\image.jpg" class="image" alt="">
        <img src="public\assets\img\image.jpg" class="image" alt="">
        <img src="public\assets\img\image.jpg" class="rotation360 image" alt="">
    </section>
</main>
<?php include __DIR__ . "/public/footer.html.php" ?>