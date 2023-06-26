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
    <form action="order.php" method="POST" enctype="multipart/form-data">
        <p>
            <label>Kode Makanan : </label>
            <input type="text" name="txtkode" id="txtkode">
        </p>
        <p>
            <label>Nama Makanan : </label>
            <input type="text" name="txtnama" id="txtnama">
        </p>
        <p>
            <label>Harga Makanan : </label>
            <input type="number" name="txtharga" id="txtharga">
        </p>
        <p>
            <label>Alamat Foto Makanan : </label>
            <input type="url" name="txturl" id="txturl">
        </p>
        <p>
            <input type="button" value="Masukkan" name="btnmasuk">
        </p>
    </form>
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

            $arr_makanan = $makanan;
            $_SESSION["makanan"] = $arr_makanan;
        }

        header("Location:index.php");
    ?>
</body>
</html>