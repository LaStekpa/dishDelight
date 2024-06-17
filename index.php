<?php

$recipes = [
    [
        'title' => 'Gyoza Poulet',
        'author' => 'Ben',
    ],
    [
        'title' => 'Lasagne chèvre épinard',
        'author' => 'Elena',
    ],
    [
        'title' => 'Boeuf bourguignon',
        'author' => 'Nico',
    ],
    [
        'title' => 'Paella de la mer',
        'author' => 'Marie',
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++) : ?>
            <li><?php echo $recipes[$lines]['title'] . ' (' . $recipes[$lines]['author'] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>