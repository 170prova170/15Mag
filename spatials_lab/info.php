<?php 
$page_title = "Info"; 
include 'header.php'; 
?>

<main class="info-page">

    <section class="about-hero">
        <h1 class="main-title">Spatials Lab</h1>
        <p>Studio dell'hardware e assemblaggio professionale focalizzato sulle temperature.</p>
    </section>

    <section class="tecnica-section">
        <div class="tecnica-grid">
            <div class="tecnica-img">
                <img src="img/GPU+CPU+RAM-image.png" class="img-medium" alt="Selezione Hardware">
            </div>
            <div class="tecnica-text">
                <h2>Scelta dei componenti</h2>
                <p>Non scegliamo i pezzi in base al marchio o all'estetica del momento, ma guardando i dati reali. Selezioniamo schede madri con fasi di alimentazione capaci di reggere i processori moderni senza scaldare troppo, evitando che il PC rallenti proprio mentre lo stai usando al massimo.</p>
                <p>Controlliamo che le memorie RAM siano totalmente compatibili con il processore per evitare errori di sistema o blocchi improvvisi. Ogni parte, dai dischi SSD alle schede video, è scelta per lavorare in equilibrio con il resto della build.</p>
            </div>
        </div>
    </section>

    <section class="valori-container">
        <div class="valore-card">
            <h3>Flusso d'aria</h3>
            <p>Regoliamo le ventole per muovere l'aria in modo costante, mantenendo i componenti freschi e limitando l'accumulo di polvere.</p>
        </div>
        <div class="valore-card">
            <h3>Alimentazione</h3>
            <p>Usiamo solo alimentatori certificati 80+ Gold o superiori, verificando la qualità costruttiva tramite la PSU Tier List di ZTT.</p>
        </div>
        <div class="valore-card">
            <h3>Setup BIOS</h3>
            <p>Consegniamo ogni PC con il BIOS aggiornato e le curve delle ventole impostate in base al calore prodotto dai componenti.</p>
        </div>
    </section>

    <section class="tecnica-section">
        <div class="tecnica-grid inv-grid">
            <div class="tecnica-text">
                <h2>Standard di costruzione</h2>
                <p>Tutto parte dal case: studiamo gli spazi interni per essere sicuri che l'aria fresca arrivi subito alla scheda video e al processore. Gestire bene le temperature significa far durare di più i componenti e mantenere le prestazioni alte per tutto il tempo d'utilizzo.</p>
                <p>Applichiamo la pasta termica in modo che copra perfettamente il processore, eliminando i punti caldi che causano picchi di temperatura improvvisi. Anche i cavi sono sistemati per non intralciare il passaggio dell'aria.</p>
                <p>Un interno pulito serve a evitare turbolenze che bloccano il calore dentro il PC: l'aria calda deve uscire il più velocemente possibile per lasciare spazio a quella fresca.</p>
            </div>
            <div class="tecnica-img">
                <img src="img/screwdrivers.png" class="img-medium" alt="Strumenti di precisione">
            </div>
        </div>
    </section>

    <section class="storia-section">
        <div class="storia-content">
            <h2>Test e Verifica finale</h2>
            <p>Dopo il montaggio, ogni PC affronta una serie di stress-test per essere sicuri che sia stabile. Usiamo programmi come OCCT per controllare gli errori, Cinebench per il processore, e Furmark insieme a 3DMark per mettere alla prova la scheda video e l'alimentatore.</p>
            <p>Durante queste ore di test controlliamo ogni sensore di temperatura. Questo ci serve per calibrare le ventole: il PC deve restare silenzioso quando fai operazioni leggere e diventare efficiente quando viene spinto al massimo.</p>
            <p>Spatials Lab punta a dare a professionisti e gamer macchine che funzionano come devono. Ogni build è studiata per ottenere il miglior rendimento possibile dall'hardware, senza rischi per la stabilità o le temperature.</p>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>