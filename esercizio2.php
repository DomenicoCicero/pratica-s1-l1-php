<?php
$squadre = [
    'Atalanta' => ['Carnesecchi', 'Toloi', 'Ruggeri', 'Scalvini', 'Zappacosta', 'Koopmainers', 'Pasalic', 'Ederson', 'Lookman', 'Scamacca', 'Tourè'],
    'Bologna' => ['Skorupski', 'Posch', 'De Silvestri', 'Calafiori', 'Freuler', 'Ferguson', 'Saelemaekers', 'Orsolini', 'Zirkzee', 'Karlsson', 'Ndoye'],
    'Cagliari' => ['Radunovic', 'Dossena', 'Mina', 'Augello', 'Zappa', 'Mancosu', 'Nandez', 'Viola', 'Lapadula', 'Pavoletti', 'Petagna'],
    'Empoli' => ['Berisha', 'Pezzella', 'Luperto', 'Cacace', 'Grassi', 'Marin', 'Ranocchia', 'Zurkowski', 'Cambiaghi', 'Caputo', 'Niang'],
    'Fiorentina' => ['Terracciano', 'Dodo', 'Biraghi', 'Milenkovic', 'Ranieri', 'Bonaventura', 'Lopez', 'Duncan', 'Mandragora', 'Gonzalez', 'Belotti'],
    'Inter' => ['Sommer', 'Acerbi', 'Pavard', 'Di Marco', 'Chalanoglu', 'Barella', 'Mkhitarian', 'Frattesi', 'Arnautovic', 'Thuram', 'Martinez'],
    'Juventus' => ['Sczcesny', 'Bremer', 'Gatti', 'Danilo', 'Locatelli', 'Kostic', 'Mckennie', 'Miretti', 'Chiesa', 'Vlahovic', 'Milik'],
    'Milan' => ['Maignan', 'Hernandez', 'Tomori', 'Gabbia', 'Florenzi', 'Reijnders', 'Loftus-Cheek', 'Pulisic', 'Bennacer', 'Giroud', 'Leao'],
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
    <ul><?php
        foreach($squadre as $team => $players) { ?>
            <li>
                <?= $team ?>
                <ul><?php
                    foreach ($players as $player) { ?>
                        <li><?= $player ?></li><?php
                    } ?>
                </ul>
            </li><?php
        } ?>
    </ul>
</body>
</html>