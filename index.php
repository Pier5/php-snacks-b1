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

    <!-- inizio snack 1  -->
    <h1>Snack 1</h1>
    <h3>Risultati della giornata 2 di campionato:</h3>
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
                    -
                    <span><?= $partite[$_j]['team_ospiti']['squadra'] ?></span>
                    │
                    <span><?= $partite[$_j]['team_casa']['punteggio'] ?></span>
                    -
                    <span><?= $partite[$_j]['team_ospiti']['punteggio'] ?></span>
                </li>
            <?php
            } ?>
        </ul>
        
        <!-- inizio snack 2 -->

        <h1>Snack 2</h1>
        
        <form action="" method="GET">
            <label for="search">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="search">Mail:</label>
            <input type="text" name="mail" id="mail">
            <label for="search">Età:</label>
            <input type="text" name="età" id="età">
            <button>Invia dati</button>
        </form>
        
        <?php
            if(isset($_GET['nome']) && isset($_GET['mail']) && isset($_GET['età'])) {
                $nome = $_GET['nome'];
                $mail = $_GET['mail'];
                $età = $_GET['età'];
                if((strlen($nome) > 3) && (filter_var($mail, FILTER_VALIDATE_EMAIL)) && (is_numeric($età))) {
                    echo 'Accesso riuscito';
                } else {
                    echo 'Accesso negato';
                }
            }
        ?>

        <!-- inizio snack 4 -->

        <h1>Snack 4</h1>
        
        <h3>Numeri generati causalmente:</h3>

        <?php
            $arr_random = [];
            while (count($arr_random) < 15) {
                $numeri = rand(1, 100);
                if (!in_array($numeri, $arr_random)) {
                    array_push($arr_random, $numeri);
                }
            }
            foreach ($arr_random as $numeri) {
                echo $numeri . ' / ';
            }
        ?>

        <!-- inizio snack 5 -->

        <h1>Snack 5</h1>

        <h3>Testo diviso in più paragrafi:</h3>

        <?php
            $testo_lungo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Officia dolor sequi temporibus sint repellat tempora? Iusto ipsam totam voluptatum 
            odit dolores ut culpa optio aut, consectetur fugit similique! Provident, fugiat! 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus doloribus molestias, 
            maiores dolor fugiat excepturi est temporibus blanditiis amet assumenda facere! Quas, 
            pariatur placeat voluptas iste autem molestiae nulla voluptatem!Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Officia dolor sequi temporibus sint repellat tempora? Iusto ipsam totam voluptatum 
            odit dolores ut culpa optio aut, consectetur fugit similique! Provident, fugiat! 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus doloribus molestias, 
            maiores dolor fugiat excepturi est temporibus blanditiis amet assumenda facere! Quas, 
            pariatur placeat voluptas iste autem mo";
            
            $nuovo_paragrafo = (explode(".", $testo_lungo));
            
            foreach ($nuovo_paragrafo as $testo_corto) {
                echo '<li>' . '-' . $testo_corto . '</li>';
            };
        ?>

    </div>
</body>
</html>