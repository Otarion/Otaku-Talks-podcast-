<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="general/general.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Loop:ital@0;1&display=swap" rel="stylesheet">
    <script src="general/general.js"></script>
    <title>Otaku Talks - Page d'accueil</title>
</head>
<body>

    <div class="banniere">
Otaku Talks
    </div>

    <div class="centre">

        <?php
        include 'general\tableau.php';
        include'general\variable.php';
        ?>

    </div>

    <audio autoplay loop>
        <source src="Fall Colors - ann annie.mp3" type="audio/mpeg" class="audio">
    </audio>

    <div class="footer">

        <div class="rs">
            <img src="image\insta.svg" class="logo">
            <img src="image\x-t.svg" class="logo">
            <img src="image\youtube.svg" class="logo">
        </div>

        <div class="regle">
            A propos
            <br>
            Conditions d'utilisations
            <br>
            Politique de confidentialité
        </div>

    </div>

</body>
</html>