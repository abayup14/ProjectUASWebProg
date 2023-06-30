<?php
    session_start();
    
    if (isset($_SESSION)) {
        $arr_makanan = $_SESSION;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Makanan</title>
    <style type="text/css">
        .katalog {
            width: "40%";
            float: left;
            border-style: solid;
            margin: 5px;
            margin-left: 25px;
            margin-right: 25px;
            margin-bottom: 25px;
            margin-top: 25px;
        }

        img {
            width: 200px;
            height: 140px;
            text-align: center;
            margin: 5px;
        }

        h2 {
            margin-top: 0px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
        }

        h3 {
            margin: 5px;
        }

        button {
            margin: 6px;
        }

        .menu {
            width: 75%;
            float: left;
            margin-right: 50px;
        }

        .pilihan {
            float: right;
            width: 250px;
        }

        #pilihanku {
            margin: 5px;
        }
    </style>
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<body>
    <h1>Inilah Menu untuk Hari Ini : </h1>
    <div class="menu">
        <?php
            foreach ($arr_makanan as $makanan) {
                echo "<div class='katalog'>";
                echo "<img src='".$makanan['url']."'>";
                echo '<h2>'.$makanan['nama'].'</h2>';
                echo '<h3> Rp. '.$makanan['harga'].'</h3>';
                echo "<button id='btnPilih".$makanan['kode']."'>Pilih</button>";
                echo "</div>";
            }
        ?>
    </div>

    <script type="text/javascript">
        $("#btnPilih1").click(function(){
            $("#btnPilih1").attr("disabled", true);
        });
    </script>
    
    <div class="pilihan">
        <h1 id="pilihanku">Pilihanku: </h1>
    </div>
</body>

</html>