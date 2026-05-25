<?php
/**
 * NIM   : 2457401028
 * Nama  : M Nazar
 * Kelas : MI24
 */

$nim       = "";
$nama      = "";
$kelas     = "";
$email     = "";
$nomor_hp  = "";
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim       = $_POST['nim'];
    $nama      = $_POST['nama'];
    $kelas     = $_POST['kelas'];
    $email     = $_POST['email'];
    $nomor_hp  = $_POST['nomor_hp'];
    $submitted = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Profil - UTS PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Menu Navigasi -->
    <div class="navbar">
        <a href="index.php">Beranda</a>
        <a href="2457401028_login.php">Form Login</a>
        <a href="2457401028_loop.php">Form Loop</a>
        <a href="2457401028_profil.php" class="active">Form Profil</a>
    </div>

    <!-- Form Profil -->
    <div class="container">
        <div class="form-box">
            <h2>Form Profil</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" placeholder="Masukkan NIM" value="<?php echo htmlspecialchars($nim); ?>">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" value="<?php echo htmlspecialchars($nama); ?>">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="kelas" placeholder="Masukkan kelas" value="<?php echo htmlspecialchars($kelas); ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Masukkan email" value="<?php echo htmlspecialchars($email); ?>">
                </div>
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="nomor_hp" placeholder="Masukkan nomor HP" value="<?php echo htmlspecialchars($nomor_hp); ?>">
                </div>
                <button type="submit" class="btn-green">Simpan</button>
            </form>

            <!-- Tabel hasil setelah submit -->
            <?php if ($submitted): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Field</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NIM</td>
                            <td><?php echo htmlspecialchars($nim); ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?php echo htmlspecialchars($nama); ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td><?php echo htmlspecialchars($kelas); ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo htmlspecialchars($email); ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Handphone</td>
                            <td><?php echo htmlspecialchars($nomor_hp); ?></td>
                        </tr>
                    </tbody>
                </table>
                <p class="footer">Dibuat oleh : M Nazar (2457401028)</p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
