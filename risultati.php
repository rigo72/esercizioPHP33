<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($_SESSION["registrazioni"] as $cf => $eta) {
            echo "Codice fiscale: {$cf} - Età: {$eta} <br>";
        }
    ?>
</body>
</html>