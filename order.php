<?php
session_start();

if (isset($_SESSION["makanan"])) {
    $arr_std = $_SESSION["makanan"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Makanan</title>
    <style type="text/css">
    .katalog
    {
        width:"40%"; float:left;
        border-style: solid;
        margin: 5px;
        margin-right: 40px;
        margin-bottom: 30px;
    }
    img
    {
        width: 200px;
        text-align:center;
        margin: 5px;
    }
    h2{
        margin-top: 0px;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 5px;
    }
    h3{
        margin: 5px;
    }
    button{
        margin: 6px;
    }

    .menu{
        width:70%;
        background: pink;
        float: left;
        margin-right: 50px;
    }

    .pilihan{
        float: right;
        width: 250px;
        background: yellow;
    }

    #pilihanku{
        margin: 5px;
    }
    </style>
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<body>
    <h1>Today Menu: </h1>
    <div class="menu">
        <div class="katalog">
            <img src="images/rendang.jpg">
            <h2>Rendang</h2>
            <h3>Rp. 34.000</h3>
            <button id="btnPilih">Pilih</button>
        </div>

        <div class="katalog">
            <img src="images/rendang.jpg">
            <h2>Rendang</h2>
            <h3>Rp. 34.000</h3>
            <button id="btnPilih">Pilih</button>
        </div>

        <div class="katalog">
            <img src="images/rendang.jpg">
            <h2>Rendang</h2>
            <h3>Rp. 34.000</h3>
            <button id="btnPilih">Pilih</button>
        </div>

        <div class="katalog">
            <img src="images/rendang.jpg">
            <h2>Rendang</h2>
            <h3>Rp. 34.000</h3>
            <button id="btnPilih">Pilih</button>
        </div>

        <div class="katalog">
            <img src="images/rendang.jpg">
            <h2>Rendang</h2>
            <h3>Rp. 34.000</h3>
            <button id="btnPilih">Pilih</button>
        </div>
        <div class="katalog">
            <img src="images/rendang.jpg">
            <h2>Rendang</h2>
            <h3>Rp. 34.000</h3>
            <button id="btnPilih">Pilih</button>
        </div>
    </div>

    <div class="pilihan">
        <h1 id="pilihanku">Pilihanku: </h1>
    </div>
</body>
</html>