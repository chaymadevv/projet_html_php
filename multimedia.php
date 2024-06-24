<?php include __DIR__ . "/public/header.html.php" ?>
<main>
    <h2>Multimedia</h2>

    <section class="videoFond">
        <h3>Vidéo en fond</h3>

        <div class="videoTexte">
            <video autoplay loop>
                <!-- autoplay ne fonctionne plus sur chrome il faut mettre controls-->
                <source src="video/videoBackground.webm" type="video/webm">
                <!-- <source src="video/videoBackground.mp4" type="video/mp4"> -->
            </video>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, repellendus. Doloribus atque
                velit excepturi cumque, laboriosam, fugit voluptatem magni, voluptates perferendis dignissimos iusto
                facilis cum accusantium ipsam reiciendis tempore nobis.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, repellendus. Doloribus atque
                velit excepturi cumque, laboriosam, fugit voluptatem magni, voluptates perferendis dignissimos iusto
                facilis cum accusantium ipsam reiciendis tempore nobis.
            </p>
        </div>
    </section>

    <section>
        <h3>Vidéo Youtube</h3>

        <iframe height="400" src="https://www.youtube.com/embed/MHYWgf3VqoY" frameborder="0" allowfullscreen></iframe>
    </section>

    <section class="audio">
        <h3>Audio</h3>

        <h4>Format Mp3</h4>
        <br>
        <audio src="audio/son.mp3" controls></audio>

        <h4>Format Ogg</h4>
        <br>
        <audio src="audio/son.ogg" controls></audio>
    </section>

    <section>
        <h3>Google Map</h3>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.238915598064!2d2.2824175160303923!3d48.929891079294464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f57b7711df3%3A0x74333e5944e77045!2sBoulevard+Pierre+de+Coubertin%2C+92230+Gennevilliers!5e0!3m2!1sfr!2sfr!4v1501487598830" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </section>
</main>
<?php include __DIR__ . "/public/footer.html.php" ?>