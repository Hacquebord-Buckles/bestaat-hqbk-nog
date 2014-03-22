<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bestaat Hacquebord &amp; Buckles nog?</title>
        <meta name="description" content="Bestaat Hacquebord &amp; Buckles nog?">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <?php
        $answers = array(
            'Ja',
            'Nee',
            'Misschien',
            'Weten we niet',
            'Waarschijnlijk',
            'Wellicht',
            'Wat vind je zelf?'
        );

        echo $answers[array_rand($answers)];
    ?>

    </body>
</html>
