<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <!-- Traccia:
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    -->

    <?php 
        #Prendo il nome:
        $nome = $_GET['name'];
        #Prendo la mail:
        $mail = $_GET['email'];
        #Prendo l'età
        $age = $_GET['age'];

        if (strlen($nome) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age) ) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }
       



    ?>

</body>
</html>