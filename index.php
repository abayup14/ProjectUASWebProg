<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Makanan</title>
</head>
<body>
    <h1>Isikan Data Makanan yang Akan Ditampilkan</h1>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <p>
            <label>Kode Makanan : </label>
            <input type="text" name="txtkode">
        </p>
        <p>
            <label>Nama Makanan : </label>
            <input type="text" name="txtnama">
        </p>
        <p>
            <label>Harga Makanan : </label>
            <input type="number" name="txtharga">
        </p>
        <p>
            <label>Alamat Foto Makanan : </label>
            <input type="url" name="txturl">
        </p>
        <p>
            <input type="submit" value="Masukkan" name="btnmasuk">
        </p>
        <p>
            <input type="submit" value="Menuju halaman Order" name="btnOrder">
        </p>
    </form>
</body>
<?php
    if (isset($_SESSION["makanan"])) {
        $arr_makanan = $_SESSION["makanan"];
    }

    if (isset($_POST["btnmasuk"])) {
        $makanan = array(
            "kode" => $_POST["txtkode"],
            "nama" => $_POST["txtnama"],
            "harga" => $_POST["txtharga"],
            "url" => $_POST["txturl"]
        );
        
        $_SESSION["makanan".count($_SESSION)] = $makanan;
    }

    if (isset($_POST["btnOrder"])) {
        header("location: order.php");
    }
?>
</html>