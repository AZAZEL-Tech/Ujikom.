<?php
session_start();
if (!isset($_SESSION['username'])) {
    header ("Location: login.php");
    exit;
}
?>

<h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
<p>Klik Untuk Keluar</p>
<a href="logout.php">Logout</a>
<p>Klik Untuk Menjadi Admin</p>
<a href="users.php">Admin</a>
<p>Klik Untuk Print</p>
<a href="cetak.php">Print</a>