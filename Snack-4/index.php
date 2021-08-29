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

        // $array = [ "nome" => 'Edoardo', "cognome" => 'Parisotto', "eta" =>   87];
        // $arrayKeys = array_keys($array); // ["nome","cognome","eta"];
        // // STAMPA nome : Edoardo, cognome: Parisotto, eta : 87

        // for($i = 0; $i < count($array); $i++ ) {
        //     echo $array[$i]; 

        // }



        $classe = [
            [
                "nome" => 'Primo',
                "cognome" => 'Secondo',
                $voti => [
                    10,
                    8,
                    9
                ]
            ],
            [
                "nome" => 'Gianni',
                "cognome" => 'Ciano',
                $voti =>[
                    6,
                    9,
                    6
                ]
            ],
            [
                "nome" => 'Pippo',
                "cognome" => 'Baudo',
                $voti => [
                    9,
                    4,
                    5
                ]
            ],        
            
        ];

        
        for($i=0; $i < count($classe); $i++) {
           # Media:
           $media = array_sum($classe[$i][$voti]) / count($classe[$i][$voti]);
           // stampa a video:
           echo "{$classe[$i]['nome']} {$classe[$i]['cognome']} {$media} <br> ";
        }
        
        
    ?>



</body>
</html>