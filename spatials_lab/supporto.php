<?php 
$page_title = "Supporto"; 
include 'header.php'; 
?>

<main class="supporto-page">

    <section class="supporto-hero">
        <h1 class="main-title">contattaci.</h1>
        <p class="subtitle">Rispondiamo a ogni richiesta entro 24 ore lavorative. Il supporto è gestito direttamente dai tecnici che hanno assemblato la tua build.</p>
    </section>

    <section class="ticket-info">
        <div class="info-block">
            <p><strong>Requisito Ordine:</strong> Per ricevere assistenza, è obbligatorio indicare il Numero Ordine. Forniamo supporto esclusivo ai possessori di sistemi Spatials Lab.</p>
        </div>
        <div class="info-block">
            <p><strong>Dettagli Tecnici:</strong> Descrivi il problema nel modo più accurato possibile. Se il computer emette segnali acustici o mostra codici di errore sulla scheda madre, riportali nel messaggio.</p>
        </div>
        <div class="info-block">
            <p><strong>Media:</strong> Se il problema è visivo o riguarda il rumore delle componenti, allega una foto o un breve video.</p>
        </div>

        <div class="btn-container">
            <a href="#" class="btn">Apri un ticket</a>
        </div>
    </section>

    <div class="separator-hero"></div>

    <section class="faq-section">
        <h2 class="main-title">soluzioni_rapide.</h2>
        
        <div class="faq-grid">
            <div class="faq-item">
                <h3>1. Il PC non mostra segni di vita (Nessun LED/Ventola)</h3>
                <ul>
                    <li>Verifica che l'interruttore sul retro dell'alimentatore sia posizionato su "I".</li>
                    <li>Assicurati che il cavo di alimentazione sia inserito saldamente sia nella presa a muro che nel PC.</li>
                </ul>
            </div>

            <div class="faq-item">
                <h3>2. Il PC si accende ma il monitor dice "Nessun Segnale"</h3>
                <ul>
                    <li>Assicurati di aver collegato il cavo video (HDMI o DisplayPort) alla Scheda Video dedicata (posizionata orizzontalmente in basso) e NON alla porta della Scheda Madre (in alto vicino alle porte USB).</li>
                </ul>
            </div>

            <div class="faq-item">
                <h3>3. Il sistema si riavvia improvvisamente durante il gaming</h3>
                <ul>
                    <li>Verifica che le prese d'aria non siano ostruite. Se il PC è posizionato su un tappeto, sollevalo o spostalo su una superficie rigida per permettere il corretto pescaggio dell'aria.</li>
                </ul>
            </div>

            <div class="faq-item">
                <h3>4. Componenti allentati dopo il trasporto</h3>
                <ul>
                    <li>Durante la spedizione, nonostante l'imballaggio protettivo, le vibrazioni possono allentare le memorie RAM o la GPU. Se hai dimestichezza, prova a premere leggermente sui moduli per assicurarne il corretto inserimento, altrimenti attendi istruzioni dal supporto.</li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>