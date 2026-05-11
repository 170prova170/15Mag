<?php include 'header.php'; ?>

<main class="sistemi-page">
    <section class="top-banner">
        <h2>Sistemi più venduti</h2>
        </section>

    <section class="prodotti-container">
        <div class="grid-prodotti">
            <?php 
            // Qui in futuro andrà il ciclo PHP per il database
            // Per ora mettiamo un segnaposto per vedere se il CSS regge
            ?>
            <div class="card-pc">
                <img src="img/pc-esempio.jpg" class="img-medium">
                <div class="info-pc">
                    <h3>Nome PC dal DB</h3>
                    <p>Descrizione breve presa dal database...</p>
                    <a href="#" class="btn">Configura</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>