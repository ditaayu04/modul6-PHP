<?php
echo "<center> <h1> BIODATA &nbsp;" .$_POST['nama']."</h1></center><br>";
echo "<center> Nama: " .$_POST['nama']."</center><br>";
echo "<center> Nama Panggilan: " .$_POST['panggilan']."</center><br>";
echo "<center> Alamat: " .$_POST['alamat']."</center><br>";
echo "<center> Hobi: " .$_POST['hobi']."</center><br>";
echo "<center> Jurusan: " .$_POST['jurusan']."</center><br>";
echo "<center> Cita-Cita: " .$_POST['cita']."</center><br>";

if (empty($_POST['nama']) 
    && empty($_POST['panggilan'])
    && empty($_POST['alamat'])
    && empty($_POST['hobi'])
    && empty($_POST['jurusan'])
    && empty($_POST['cita'])
    ){
    header("Location:kosong.php");
} elseif (empty($_POST['nama'])){
    header("Location:tidaklengkap.php");
} elseif (empty($_POST['panggilan'])){
    header("Location:tidaklengkap.php");
} elseif (empty($_POST['alamat'])){
    header("Location:tidaklengkap.php");
} elseif (empty($_POST['hobi'])){
    header("Location:tidaklengkap.php");
} elseif (empty($_POST['jurusan'])){
    header("Location:tidaklengkap.php");
} elseif (empty($_POST['cita'])){
    header("Location:tidaklengkap.php");
}
?>