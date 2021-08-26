<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
    <!-- Traccia:
        Creare un array contenente alcuni alunni di un'ipotetica classe, con i seguenti dati:
        - nome
        - cognome
        - un array contenente i suoi voti scolastici
        stampare nome, cognome e la media dei voti di ogni alunno.
    -->

    <?php

        $array = [ "nome" => 'Edoardo', "cognome" => 'Parisotto', "eta" =>   87];
        $arrayKeys = array_keys($array); // ["nome","cognome","eta"];
        // STAMPA nome : Edoardo, cognome: Parisotto, eta : 87

        for($i = 0; $i < count($array); $i++ ) {
            echo $array[$i]; 

        }



        $classe = [
            [
                "nome" => 'Edoardo',
                "cognome" => 'Parisotto',
                'voti' => [
                    10,
                    8,
                    9
                ]
            ],
            [
                "nome" => 'Gianni',
                "cognome" => 'Ciano',
                'voti' =>[
                    6,
                    7,
                    6
                ]
            ],
            [
                "nome" => 'Pippo',
                "cognome" => 'Baudo',
                'voti' => [
                    9,
                    4,
                    5
                ]
            ],        
            
        ];

        $calc = 0;
        
        for($i=0; $i < count($classe); $i++) {
            #ora dovrei stare a ciclare dentro a classi, dove ci sono tre elementi dentro:
            for ($x=0; $x < count($classe[$i]['voti']); $x++){
                // var_dump($classe[$i]['voti'][$x]); SONO I VOTI;
                $calc += $classe[$i]['voti'][$x];
                
            }

            $nameSurname = $classe[$i]['nome'] . ' ' . $classe[$i]['cognome'] . ' ' . $calc . '<br>';
            echo $nameSurname;
            
        }

    ?>



</body>
</html>