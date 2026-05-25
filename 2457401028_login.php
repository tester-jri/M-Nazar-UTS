<?php
/**
 * NIM   : 2457401028
 * Nama  : M Nazar
 * Kelas : MI24
 */

$pesan  = "";
$status = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '2457401028' && $password == '1028') {
        $pesan  = "Login Berhasil";
        $status = "berhasil";
    } else {
        $pesan  = "Username/Password tidak sesuai";
        $status = "gagal";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login - UTS PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Menu Navigasi -->
    <div class="navbar">
        <a href="index.php">Beranda</a>
        <a href="2457401028_login.php" class="active">Form Login</a>
        <a href="2457401028_loop.php">Form Loop</a>
        <a href="2457401028_profil.php">Form Profil</a>
    </div>

    <!-- Form Login -->
    <div class="container">
        <div class="form-box">
            <h2>Login</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan password">
                </div>
                <button type="submit" class="btn-login">Login</button>

                <?php if ($status == 'berhasil'): ?>
                    <p class="pesan-berhasil"><?php echo $pesan; ?></p>
                <?php elseif ($status == 'gagal'): ?>
                    <p class="pesan-gagal"><?php echo $pesan; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>

</body>
</html>
