<?php
/**
 * NIM   : 2457401028
 * Nama  : M Nazar
 * Kelas : MI24
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - UTS PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Menu Navigasi -->
    <div class="navbar">
        <a href="index.php" class="active">Beranda</a>
        <a href="2457401028_login.php">Form Login</a>
        <a href="2457401028_loop.php">Form Loop</a>
        <a href="2457401028_profil.php">Form Profil</a>
    </div>

    <!-- Konten Beranda -->
    <div class="container">
        <div class="beranda-box">
            <div class="avatar">MN</div>
            <h2>M Nazar</h2>
            <p class="subtitle">Mahasiswa PHP dan MySQL &mdash; Kelas MI24</p>

            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">NIM</div>
                    <div class="info-value">2457401028</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Kelas</div>
                    <div class="info-value">MI24</div>
                </div>
                <div class="info-item" style="grid-column: span 2;">
                    <div class="info-label">Mata Kuliah</div>
                    <div class="info-value">PHP dan MySQL</div>
                </div>
            </div>

            <div class="nav-links">
                <a href="2457401028_login.php">Form Login</a>
                <a href="2457401028_loop.php" class="green">Form Loop</a>
                <a href="2457401028_profil.php" class="green">Form Profil</a>
            </div>
        </div>
    </div>

</body>
</html>
