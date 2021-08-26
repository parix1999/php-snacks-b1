<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>
    <!-- Traccia:
    Creiamo una struttura dati che rappresenta le partite di basket, di un'ipotetica tappa di calendario
    ogni array interno conterrà le seguenti informazioni:
    - squadra di casa 
    - squadra ospite
    - punti fatti dalla squadra di casa 
    - punti fatti dalla squadra ospite
    stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60 
    
    -->

    <?php 
        #Creazione delle array:
        $partite = [
            [
                "casa" => "Olimpia Milano",
                "ospiti" => "Cantù",
                "puntiCasa" => "55",
                "puntiOspiti" => "60"
            ],
            [
                "casa" => "Virtus Lanciano",
                "ospiti" => "Roma",
                "puntiCasa" => "40",
                "puntiOspiti" => "50"
            ],
            [
                "casa" => "Bologna",
                "ospiti" => "Venezia",
                "puntiCasa" => "50",
                "puntiOspiti" => "70"
            ],
        ];

        #Per stamparlo a video devo ragruppare i data:
        #Entro dentro alle array con un for:
        for ($i = 0; $i < count($partite); $i++) {
            #Assegno ad una varibile i dati da prendere:
            $string = $partite[$i]['casa'] . " - " . $partite[$i]['ospiti'] . " | " . $partite[$i]['puntiCasa'] . " - " . $partite[$i]['puntiOspiti'] . "<br>";
            echo $string;
        }
    
    ?>

</body>
</html>