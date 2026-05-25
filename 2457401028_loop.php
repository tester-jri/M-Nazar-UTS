<?php
/**
 * NIM   : 2457401028
 * Nama  : M Nazar
 * Kelas : MI24
 */

$teks      = "";
$jumlah    = 1;
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $teks      = $_POST['teks'];
    $jumlah    = (int) $_POST['jumlah'];
    $submitted = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Loop - UTS PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Menu Navigasi -->
    <div class="navbar">
        <a href="index.php">Beranda</a>
        <a href="2457401028_login.php">Form Login</a>
        <a href="2457401028_loop.php" class="active">Form Loop</a>
        <a href="2457401028_profil.php">Form Profil</a>
    </div>

    <!-- Form Perulangan -->
    <div class="container">
        <div class="form-box">
            <h2>Form Perulangan</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label>Teks</label>
                    <input type="text" name="teks" placeholder="Masukkan teks" value="<?php echo htmlspecialchars($teks); ?>">
                </div>
                <div class="form-group">
                    <label>Jumlah Perulangan</label>
                    <input type="number" name="jumlah" min="1" value="<?php echo $jumlah; ?>">
                </div>
                <button type="submit" class="btn-green">Cetak</button>
            </form>

            <!-- Hasil perulangan -->
            <?php if ($submitted && $teks != ''): ?>
                <div class="hasil-loop">
                    <?php for ($i = 1; $i <= $jumlah; $i++): ?>
                        <p>
                            <span class="nomor"><?php echo $i; ?></span>
                            &ndash; <?php echo htmlspecialchars($teks); ?> (M Nazar)
                        </p>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
