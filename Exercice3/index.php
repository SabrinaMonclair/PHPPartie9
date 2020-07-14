<?php

echo strftime('%A %d %B %Y'). '<br>';
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']). '<br>';
echo strftime('%A %d %B %Y');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>

<body>
    <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français.</p>
</body>
</html>