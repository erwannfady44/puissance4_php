<?php
require "db.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<h1>Jeu du puissance 4</h1>
<div id="plateau"></div>
</body>
</html>

<script type="text/javascript">
    var auto_refresh = setInterval(
        function () {
            $('#plateau').load('dessiner.php').fadeIn("slow");
        }, 1000);
</script>