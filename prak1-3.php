
<html>
<head>
    <title> Pemograman PHP dengan Array</title>
</head>
<body>
    <?php
    //Penulisan array dapat dibuat seperti berikut
    $nama[] = "Dita Ayu";
    $nama[] = "Eka";
    $nama[] = "Saputri";
    echo $nama[1] . $nama[2] . $nama[0];
    echo "<br>";

    $jum_array = count($nama);
    echo "Jumlah elemen array = ".$jum_array;
    ?>
</body>
</html>