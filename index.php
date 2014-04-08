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
                            'Geen denken aan.'
                        );

                        echo $answers[array_rand($answers)];
                    ?>
                </p>
            </div>
        </section>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-25905915-7', 'bestaathqbknog.nl');
            ga('send', 'pageview');
        </script>
    </body>
</html>
