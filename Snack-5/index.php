<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-5</title>
</head>
<body>
    <!-- Prendere un testo abbastanza lungo, contenente diverse frasi.
    suddividere il testo in tanti paragrafi : ad ogni punto corrispondente un nuovo paragrafo -->

    <?php

        $text = "La mia anima è pervasa da una mirabile serenità, simile a queste belle mattinate di maggio che io godo con tutto il cuore. Sono solo e mi rallegro di vivere in questo luogo che sembra esser creato per anime simili alla mia. Sono così felice, mio caro, così immerso nel sentimento della mia tranquilla esistenza che la mia arte ne soffre. Non potrei disegnare nulla ora, neppure un segno potrei tracciare; eppure mai sono stato così gran pittore come in questo momento. Quando l'amata valle intorno a me si avvolge nei suoi vapori, e l'alto sole posa sulla mia foresta impenetrabilmente oscura, e solo alcuni raggi si spingono nell'interno sacrario, io mi stendo nell'erba alta presso il ruscello che scorre, e più vicino alla terra osservo mille multiformi erbette; allora sento più vicino al mio cuore brulicare tra gli steli il piccolo mondo degli innumerevoli, infiniti vermiciattoli e moscerini, e sento la presenza dell'Onnipossente che ci ha creati a sua immagine e ci tiene in una eterna gioia. Amico mio, quando dinanzi ai miei occhi si stende il crepuscolo e posa intorno a me il mondo e il cielo tutto nell'anima mia come la sembianza di donna amata, allora spesso";

        $newText = str_replace('.', '<p></p>', $text);

        echo "<p> {$newText} </p>"; 

    ?>


    
</body>
</html>