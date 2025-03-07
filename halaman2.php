<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: halaman1.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $tempat = htmlspecialchars($_POST['tempat']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $riwayat_pendidikan = htmlspecialchars($_POST['riwayat_pendidikan']);

    $_SESSION['nama'] = $nama;
    $_SESSION['tempat'] = $tempat;
    $_SESSION['tanggal_lahir'] = $tanggal_lahir;
    $_SESSION['riwayat_pendidikan'] = $riwayat_pendidikan;

    header("Location: halaman3.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form CV</title>
    </head>
    <body>
        <div class="container">
            <h2>Form Masukkan Data CV</h2>

            <form method="post" action="">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br>

                <label for="tempat">Tempat Lahir:</label>
                <input type="text" id="tempat" name="tempat" required><br>

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="DD-MM-YYYY" required><br> 

                <label for="riwayat_pendidikan">Riwayat Pendidikan:</label>
                <input type="text" id="riwayat_pendidikan" name="riwayat_pendidikan" required><br>

                <input type="submit" value="Kirim">
            </form>
        </div>
    </body>
</html>