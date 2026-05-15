<?php
$page_title = "Sistemi";
include 'config.php';
include 'header.php';

$prezzo_max     = isset($_GET['prezzo_max'])     ? (int)$_GET['prezzo_max']                                  : 6000;
$cerca          = isset($_GET['cerca'])          ? mysqli_real_escape_string($conn, $_GET['cerca'])          : '';
$res            = isset($_GET['res'])            ? $_GET['res']            : '';
$cpu            = isset($_GET['cpu'])            ? $_GET['cpu']            : '';
$gpu            = isset($_GET['gpu'])            ? $_GET['gpu']            : '';
$categoria      = isset($_GET['categoria'])      ? $_GET['categoria']      : '';
$raffreddamento = isset($_GET['raffreddamento']) ? $_GET['raffreddamento'] : '';
$ordine         = isset($_GET['ordine'])         ? $_GET['ordine']         : 'id_prodotto DESC';

$ordini_ok = ['id_prodotto DESC', 'prezzo ASC', 'prezzo DESC'];
if (!in_array($ordine, $ordini_ok)) $ordine = 'id_prodotto DESC';

$filtri_attivi = ($prezzo_max != 6000 || $res != '' || $cpu != '' || $gpu != '' || $categoria != '' || $raffreddamento != '' || $ordine != 'id_prodotto DESC');

$query = "SELECT * FROM prodotti WHERE prezzo <= $prezzo_max";
if ($cerca != '')          $query .= " AND nome_modello LIKE '%$cerca%'";
if ($res == '4k')          $query .= " AND vram_gpu >= 16";
if ($cpu != '')            $query .= " AND marca_cpu = '" . mysqli_real_escape_string($conn, $cpu) . "'";
if ($gpu != '')            $query .= " AND marca_gpu = '" . mysqli_real_escape_string($conn, $gpu) . "'";
if ($categoria != '')      $query .= " AND categoria = '" . mysqli_real_escape_string($conn, $categoria) . "'";
if ($raffreddamento != '') $query .= " AND raffreddamento = '" . mysqli_real_escape_string($conn, $raffreddamento) . "'";
$query .= " ORDER BY $ordine";

$result = mysqli_query($conn, $query);
?>

<main class="sistemi-page">
    <section class="search-section">
        <div class="search-container">
            <form action="sistemi.php" method="GET" class="search-bar">
                <input type="text" name="cerca" placeholder="Cerca il tuo setup dei sogni..." value="<?php echo htmlspecialchars($cerca); ?>">
                <button type="submit" class="btn-search">Cerca</button>
            </form>
            <div class="search-actions">
                <button class="action-btn" id="toggle-filters">Filtri e Ordina <span>▼</span></button>
            </div>
        </div>

        <div id="filter-panel" class="filter-panel" style="<?php echo $filtri_attivi ? 'display:block' : ''; ?>">
            <form action="sistemi.php" method="GET" class="panel-content">

                <div class="zone">
                    <label>Ordina per</label>
                    <div class="btn-group">
                        <button name="ordine" value="id_prodotto DESC" class="p-btn <?php echo ($ordine == 'id_prodotto DESC') ? 'active' : ''; ?>">Novità</button>
                        <button name="ordine" value="prezzo ASC"       class="p-btn <?php echo ($ordine == 'prezzo ASC')       ? 'active' : ''; ?>">Prezzo ↑</button>
                        <button name="ordine" value="prezzo DESC"      class="p-btn <?php echo ($ordine == 'prezzo DESC')      ? 'active' : ''; ?>">Prezzo ↓</button>
                    </div>
                </div>

                <div class="zone">
                    <label>Budget: <span id="p-val"><?php echo $prezzo_max; ?></span>€</label>
                    <input type="range" name="prezzo_max" min="500" max="6000" step="100" value="<?php echo $prezzo_max; ?>" oninput="document.getElementById('p-val').innerText = this.value">
                    <label>Target</label>
                    <div class="btn-group">
                        <button name="res" value="1080p" class="p-btn <?php echo ($res == '1080p') ? 'active' : ''; ?>">1080p</button>
                        <button name="res" value="1440p" class="p-btn <?php echo ($res == '1440p') ? 'active' : ''; ?>">1440p</button>
                        <button name="res" value="4k"    class="p-btn <?php echo ($res == '4k')    ? 'active' : ''; ?>">4K</button>
                    </div>
                </div>

                <div class="zone">
                    <label>Categoria</label>
                    <div class="btn-group">
                        <button name="categoria" value="Gaming"      class="p-btn <?php echo ($categoria == 'Gaming')      ? 'active' : ''; ?>">Gaming</button>
                        <button name="categoria" value="Workstation" class="p-btn <?php echo ($categoria == 'Workstation') ? 'active' : ''; ?>">Workstation</button>
                        <button name="categoria" value="Office"      class="p-btn <?php echo ($categoria == 'Office')      ? 'active' : ''; ?>">Office</button>
                    </div>
                </div>

                <div class="zone">
                    <label>CPU</label>
                    <div class="btn-group">
                        <button name="cpu" value="AMD"   class="p-btn <?php echo ($cpu == 'AMD')   ? 'active' : ''; ?>">AMD</button>
                        <button name="cpu" value="Intel" class="p-btn <?php echo ($cpu == 'Intel') ? 'active' : ''; ?>">Intel</button>
                    </div>
                    <label>GPU</label>
                    <div class="btn-group">
                        <button name="gpu" value="AMD"    class="p-btn <?php echo ($gpu == 'AMD')    ? 'active' : ''; ?>">AMD</button>
                        <button name="gpu" value="NVIDIA" class="p-btn <?php echo ($gpu == 'NVIDIA') ? 'active' : ''; ?>">NVIDIA</button>
                    </div>
                </div>

                <div class="zone">
                    <label>Raffreddamento</label>
                    <div class="btn-group">
                        <button name="raffreddamento" value="AIO"  class="p-btn <?php echo ($raffreddamento == 'AIO')  ? 'active' : ''; ?>">AIO</button>
                        <button name="raffreddamento" value="Aria" class="p-btn <?php echo ($raffreddamento == 'Aria') ? 'active' : ''; ?>">Aria</button>
                    </div>
                </div>

                <div class="panel-footer">
                    <a href="sistemi.php" class="reset-link">Reset</a>
                    <button type="submit" class="apply-btn">Applica</button>
                </div>

            </form>
        </div>
    </section>

    <div class="grid-sistemi">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card-pc">
                <div class="img-box">
                    <img src="img/<?php echo htmlspecialchars($row['immagine']); ?>" alt="PC">
                </div>
                <div class="info-pc">
                    <h3><?php echo htmlspecialchars($row['nome_modello']); ?></h3>
                    <p><?php echo htmlspecialchars($row['descrizione_breve']); ?></p>
                    <div class="bottom-card">
                        <span class="price-tag"><?php echo number_format($row['prezzo'], 0, '', '.'); ?>€</span>
                        <a href="dettaglio_pc.php?id=<?php echo $row['id_prodotto']; ?>" class="config-btn">Configura</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php include 'footer.php'; ?>