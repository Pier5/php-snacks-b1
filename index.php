<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    <div class="container">
    <h1>Snack 1</h1>
        <?php
            $partite = [
                [
                    'team_casa' => [
                        'squadra' => 'Olimpia Milano',
                        'punteggio' => 55
                    ],
                    'team_ospiti' => [
                        'squadra' => 'Cantù',
                        'punteggio' => 60
                    ]
                ],
                [
                    'team_casa' => [
                        'squadra' => 'Dinamo Sassari',
                        'punteggio' => 100
                    ],
                    'team_ospiti' => [
                        'squadra' => 'Reggio Emilia',
                        'punteggio' => 72
                    ]
                ],
                [
                    'team_casa' => [
                        'squadra' => 'Fortitudo Bologna',
                        'punteggio' => 81
                    ],
                    'team_ospiti' => [
                        'squadra' => 'Siena',
                        'punteggio' => 52
                    ]
                ]   
            ];
        ?>

        <ul>
            <?php for($_j = 0; $_j < count($partite); $_j++) { ?>
                <li>
                    <span><?= $partite[$_j]['team_casa']['squadra'] ?></span>
                    <span><?= $partite[$_j]['team_casa']['punteggio'] ?></span>
                    <span><?= $partite[$_j]['team_ospiti']['squadra'] ?></span>
                    <span><?= $partite[$_j]['team_ospiti']['punteggio'] ?></span>
                </li>
            <?php
            } ?>
        </ul>
    </div>
</body>
</html>