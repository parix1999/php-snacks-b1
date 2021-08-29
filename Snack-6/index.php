<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-6</title>
</head>
<body>
    <!-- Utilizzando l'array di partenza stampare tutti gli insegnanti dentro un rettangolo grigio,
    e i PM dentro un rettangolo verde -->

    <!-- Array di partenza: -->
    <?php
        $db =  [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

    ?>

    <!-- teachers: -->
    <div style="background:gray;">
        <?php
            for($i=0; $i < count($db['teachers']); $i++) {
                echo "{$db['teachers'][$i]['name']} {$db['teachers'][$i]['lastname']} <br>";
            }

        ?>
    </div>

    <!-- Pm -->
    <div style="background:green;">
    <?php
        for($i=0; $i < count($db['pm']); $i++) {
             echo "{$db['pm'][$i]['name']} {$db['pm'][$i]['lastname']} <br>";
        }

        ?>
            
    </div>


</body>
</html>