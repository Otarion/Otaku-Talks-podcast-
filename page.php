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

$id = $_GET['id'];
$podcastFound = false;

foreach ($podcasts as $podcast) {
 if ($podcast['id'] == $id) {
 echo '<div class="article">'.
 '<p class="titre" style="cursor: pointer;">' . '<img src="image\sakura.png" style="height: 1rem;">'.' '.
 $podcast['titre'] . '</p></a>'. 
 '<p class="description">'.$podcast['description'] . '</p>'.
 '<img src="image\play.svg" style="height: 2rem; cursor: pointer;">'.
 '<p class="date">'.$podcast['date'].'</p>' .
 '</div>'.
 '<button onclick="window.location.href=\'index.php\'" class="retour-bouton">Retour à la page d\'accueil</button>';
 $podcastFound = true;
 break;
 }
}

if (!$podcastFound) {
    echo'<div class="erreur">'.
    '<p class="text-erreur">'."L'article que vous cherchez n'existe pas. Retourner sur la page d'accueil.".'</p>'.
    '<button onclick="window.location.href=\'index.php\'" class="retour-bouton">Retour à la page d\'accueil</button>'
    .'</div>',
    exit();
   }

?>

    </div>

    <div class="footer">

        <div class="rs">
            <img src="/image/insta.svg" class="logo">
            <img src="/image/x-t.svg" class="logo">
            <img src="/image/youtube.svg" class="logo">
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