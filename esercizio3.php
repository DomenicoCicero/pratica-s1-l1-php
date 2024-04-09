<?php

$partite = [
    [
        'casa' => 'Juventus',
        'ospite' => 'Inter',
        'formazione_casa' => [
            'Buffon', 'Chiellini', 'De Ligt', 'Alex Sandro', 'Cuadrado',
            'Arthur', 'Bentancur', 'McKennie', 'Kulusevski', 'Dybala', 'Ronaldo'
        ],
        'formazione_ospite' => [
            'Handanovic', 'De Vrij', 'Bastoni', 'Hakimi', 'Perisic',
            'Brozovic', 'Barella', 'Vidal', 'Eriksen', 'Lukaku', 'Martinez'
        ]
        ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Serie A</h1>
<?php
foreach ($partite as $partita) {
    echo $partita['casa'] . " vs " . $partita['ospite'] . "<br/>";
    echo "Formazione " . $partita['casa'] . "<br/>";
    foreach ($partita['formazione_casa'] as $giocatore) {
        echo "- " . $giocatore . "\n";
    }
    echo "<br/>" . "Formazione " . $partita['ospite'] . "<br/>";
    foreach ($partita['formazione_ospite'] as $giocatore) {
        echo "- " . $giocatore . "\n";
    }
    echo "\n";
};
?>
    
</body>
</html>