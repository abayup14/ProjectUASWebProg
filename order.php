<?php
session_start();

if (isset($_SESSION["order"])) {
    $arr_std = $_SESSION["order"];
}
else{
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Makanan</title>
</head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<body>
    
</body>
</html>