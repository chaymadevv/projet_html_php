<?php include __DIR__ . "/public/header.html.php" ?>
<main>
    <h2>Tableau</h2>
    <section class="tableau">
        <table>
            <caption><i class="fa fa-plane" aria-hidden="true"></i>Vols Paris Rome</caption>
            <thead>
                <tr>
                    <th></th>
                    <td>02/08/2017</td>
                    <td>03/08/2017</td>
                    <td>05/08/2017</td>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <td>02/08/2017</td>
                    <td>03/08/2017</td>
                    <td>05/08/2017</td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <th rowspan="2">Air France</th>
                    <td>Départ 10h - Arrivé 13h</td>
                    <td>Départ 15h - Arrivé 18h</td>
                    <td>Départ 17h - Arrivé 20h</td>
                </tr>
                <tr>
                    <td>200€</td>
                    <td>180€</td>
                    <td>170€</td>
                </tr>
                <tr>
                    <th rowspan="2">Alitalia</th>
                    <td>Départ 6h - Arrivé 9h</td>
                    <td>Départ 13h - Arrivé 16h</td>
                    <td>Départ 21h - Arrivé 00h</td>
                </tr>
                <tr>
                    <td>120€</td>
                    <td>250€</td>
                    <td>100€</td>
                </tr>
            </tbody>
        </table>
    </section>
</main>

<?php include __DIR__ . "/public/footer.html.php" ?>