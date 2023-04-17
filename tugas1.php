<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
    <form method="GET" action="hasiltugas1.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130"> Nama </td>
                <td><input type="text" name="nama"></td>
</tr>
    <td width="130"> Email</td>
    <td><input type="text" name="email"></td>
</tr>

<?php date_default_timezone_set('Asia/Jakarta');
?>
<tr>
    <td width="130"> Jam</td>
    <td><input type="text" name="jam" value="
    <?php echo date('H:i:s');?>"
    </tr>

    <tr>
        <td width="130"> Hari</td>
        <td><input type="text" name="hari" value="
        <?php echo date('l');?>"
</tr>

<tr>
    <td width="130"> Tanggal</td>
    <td><input type="text" name="tanggal" value="
    <?php echo date('Y-m-d');?>"
</tr>

<tr>
    <td>
        <input type="submit" name="btnLogin" value="Login">
        <input type="reset" name="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>