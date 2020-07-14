<?php

echo 'Timestamp du 16/06/2020 : ' .time(). '<br>';
$t1 = mktime(15, 00, 0, 8, 2, 2016);
echo 'Timestamp du mardi 2 août 15h00 : ' .$t1. '<br>';

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>

<body>
    <p>Afficher le timestamp du jour.  
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
</body>
</html>