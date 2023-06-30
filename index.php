<?php
    session_start();
    function add_menu() {
        $makanan = array(
            "kode" => $_POST["txtkode"],
            "nama" => $_POST["txtnama"],
            "harga" => $_POST["txtharga"],
            "url" => $_POST["txturl"]
        );

        $_SESSION["menu".count($_SESSION)] = $makanan;

        // print_r($_SESSION);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Data Makanan</title>
    <style>
        span {
            color: red;
        }
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>
<body>
    <h1>Isikan Data Makanan yang Akan Ditampilkan :</h1>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <p>
            <label>Kode Makanan <span>*</span> : </label>
            <input type="text" name="txtkode" required>
        </p>
        <p>
            <label>Nama Makanan <span>*</span> : </label>
            <input type="text" name="txtnama" required>
        </p>
        <p>
            <label>Harga Makanan <span>*</span> : </label>
            <input type="number" name="txtharga" required>
        </p>
        <p>
            <label>Alamat Foto Makanan <span>*</span> : </label>
            <input type="url" name="txturl" required>
        </p>
        <p>
            <input type="submit" value="Masukkan Data" name="btnmasuk">
        </p>
    </form>

    <form action="index.php" method="POST" enctype="multipart/form-data">
    <p>
        <input type="submit" value="Menuju halaman Pesan" name="btnOrder">
    </p>
    </form>
</body>
<?php
    if (isset($_POST["btnmasuk"])) {
        $count = count($_SESSION);
        if ($count == 0) {
            add_menu();
            echo "<script>alert('Makanan berhasil ditambahkan')</script>";
        } else {
            foreach ($_SESSION as $menu) {
                if ($menu["kode"] == $_POST["txtkode"]) {
                    echo "<script>alert('Kode makanan sudah digunakan. Gunakan kode yang lain.')</script>";
                } else {
                    add_menu();
                    echo "<script>alert('Makanan berhasil ditambahkan')</script>";
                }
            }
        }
    }
       
    if (isset($_POST["btnOrder"])) {
        header("location:order.php");
    }
?>
</html>