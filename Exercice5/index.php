<?php
$date1 = date_create('2016-05-16');
$date2 = date_create('2020-06-16');
$interval = date_diff($date1, $date2);

echo $interval->format('%R%a Nombre de jour depuis le 16 mai 2016');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>

<body>
    <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
</body>
</html>