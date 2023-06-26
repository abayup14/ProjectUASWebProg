<?php
session_start();

if (isset($_SESSION["order"])) {
    $arr_std = $_SESSION["order"];
}
else{
    // header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Makanan</title>
    <style type="text/css">
    div{
        width:"40%"; float:left;
        border-style: solid;
        margin: 10px 10px 10px 10px;
    }
    img{
        width: 200px;
        text-align:center;
        border-style: solid;
    }
    h2{
        padding-left: 5px;
        margin: 1px;
    }
    h3{
        padding-left: 5px;
        margin: 1px;
    }
    button{
        padding-left: 5px;
        margin: 6px;
    }
    </style>
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<body>
    <div>
    <img src="images/rendang.jpg">
    <h2>Rendang</h2>
    <h3>Rp. 34.000</h3>
    <button id="btnPilih">Pilih</button>
    </div>

    <div>
    <img src="images/rendang.jpg">
    <h2>Rendang</h2>
    <h3>Rp. 34.000</h3>
    <button id="btnPilih">Pilih</button>
    </div>
</body>
</html>