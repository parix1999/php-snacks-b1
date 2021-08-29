<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
</head>
<body>
    <!-- Traccia:
    Creare un array di array.
    Ogni array figlio avrà come chiave una data in questo formato:
    DD/MM/YYYY (es. 31/01/2007) e come valore un array di post associati a quella data.
    Stampare ogni data con i relativi post.
    -->


    <?php 
        #Creazione dei data:
        #Array associativa, con le date e dentro i dati:
        $posts = [

            '10/07/2018' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Gianni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Gianni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Pippo',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Gino',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Gino',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Gino',
                    'text' => 'Testo post 6'
                ]
            ],
        ];

        # Prendere le chiavi dall'array di posts
        # Ciclare con un for le chiavi incrementando
        # Per ogni step del ciclo prendiamo i valori che ci servono
        # dall'array originale.
        
        $postsKeys = array_keys($posts);
        for ($i=0; $i < count($postsKeys); $i++) {
            // Cosi abbiamo le chiavi dell'array:
            $originalKey = $postsKeys[$i];
            echo "{$originalKey} <br>";

            # var_dump($posts[$originalKey]);
            for ($x = 0; $x < count($posts[$originalkey]); $x++) {
                $post = $posts[$originalKey][$x];
                echo "<h2>{$post}</h2>" ;
            }
        }






    ?>
    
    



</body>
</html>