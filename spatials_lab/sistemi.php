<?php include 'header.php'; ?>

<main class="sistemi-page">

    <section class="search-section">
        <div class="search-container">
            
            <div class="search-bar">
                <div class="icon-placeholder">
                    </div>
                <input type="text" placeholder="Cerca il tuo setup dei sogni...">
                <button class="btn-search">Cerca</button>
            </div>

            <div class="search-actions">
                <button class="action-btn">
                    <div class="icon-placeholder">
                        </div>
                    Ordina
                </button>

                <button class="action-btn">
                    <div class="icon-placeholder">
                        </div>
                    Filtri
                    <div class="icon-placeholder-small">
                        </div>
                </button>
            </div>

        </div>
    </section>

    <section class="prodotti-container">
        <div class="grid-prodotti">
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