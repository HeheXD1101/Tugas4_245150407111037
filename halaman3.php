<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: halaman1.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CV Anda</title>
        <link rel="stylesheet" type="text/css" href="Template.css"> 
    </head>
    <body>
        <div class="container">
            <h2>CV </h2>
            <p>Email: <?php echo $_SESSION['email']; ?></p>
            <p>Nama: <?php echo $_SESSION['nama']; ?></p>
            <p>Tempat Lahir: <?php echo $_SESSION['tempat']; ?></p>
            <p>Tanggal Lahir: <?php echo date("d-m-Y", strtotime($_SESSION['tanggal_lahir'])); ?></p>
            <p>Riwayat Pendidikan: <?php echo nl2br($_SESSION['riwayat_pendidikan']); ?></p>
        </div>
        <footer>
            <p>Pembuat</p>
            <p>Nama: Muhammad Murfid Kharomen</p>
            <p>NIM: 245150407111037</p>
        </footer>
    </body>
</html>