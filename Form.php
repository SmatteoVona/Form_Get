<?php
function controlloValori($array, $key)
{
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return "Informazione non fornita";
    }
}

$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$sesso = controlloValori($_GET, "scelta");
$eta = controlloValori($_GET, "eta");
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risposte</title>
</head>
<body>
    <h1>Form compilato</h1>
    <?php
         if ($sesso == "Donna") {
            print("<h3>benvenuta $nome $cognome</h3><br>");
         } else if ($sesso == "Uomo") {
            print("<h3>benvenuto $nome $cognome</h3>");
         } else {
            print("<h3>benvenut* $nome $cognome</h3>");
         }
        print("<h2>Informazioni utente:</h2>");
        print("Età: $eta <br>Sesso: $sesso");
    ?>
</body>
</html>