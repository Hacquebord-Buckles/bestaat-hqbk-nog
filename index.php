<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bestaat Hacquebord &amp; Buckles nog?</title>
        <meta name="description" content="Alle informatie die je nodig hebt.">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <section class="question">
            <div class="container">
                <p>
                    <span>Bestaat</span> <a href="http://www.hacquebordbuckles.nl" target="_blank">Hacquebord &amp; Buckles</a> <span>nog?</span>
                </p>
            </div>
        </section>

        <section class="answer">
            <div class="container">
                <p>
                    <?php
                        $answers = array(
                            'Ja.',
                            'Nee.',
                            'Misschien.',
                            'Weten we niet.',
                            'Waarschijn-lijk.',
                            'Wellicht.',
                            'Wat vind je zelf?',
                            'Uitgesloten.',
                            'Geen denken aan.',
                            'Soms.',
                            'In onze vrije tijd.',
                            'Even aan de boekhouder vragen.',
                            'Computer says no.',
                            'Never gonna give you up, Never gonna let you down',
                            'De geit is gemolken.'
                        );

                        echo $answers[array_rand($answers)];
                    ?>
                </p>
            </div>
        </section>
    </body>
</html>
