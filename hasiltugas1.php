<?php
echo "<center> Nama: " .$_GET['nama']."</center><br>";
echo "<center> Email: " .$_GET['email']."</center><br>";
echo "<center> Jam: " .$_GET['jam']."</center><br>";
echo "<center> Hari: " .$_GET['hari']."</center><br>";
echo "<center> Tanggal: " .$_GET['tanggal']."</center><br>";

if (empty($_GET['nama']) && empty($_GET['email'])){
    header("Location:kosong.php");
} elseif (empty($_GET['nama'])){
    header("Location:tidaklengkap.php");
} elseif (empty($_GET['email'])){
    header("Location:tidaklengkap.php");
}

?>