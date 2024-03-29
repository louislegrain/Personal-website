<?php
$errorCode = 200;
if (isset($_GET['error'])) {
    $errorCode = htmlspecialchars($_GET['error']);
}
if ($errorCode == 200) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur <?= $errorCode ?></title>
    <!-- SEO -->
    <meta name="description" content="Erreur <?= $errorCode ?>" />
    <meta property="og:site_name" content="Louis Legrain" />
	<meta property="og:locale" content="fr_FR">
	<meta property="og:title" content="Erreur <?= $errorCode ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="https://louislegrain.online/ressources/og_image.jpg"/>
	<meta property="og:image:alt" content="Logo de Louis Legrain" />
	<meta property="og:description" content="Erreur <?= $errorCode ?>"/>
	<meta name="robots" content="noindex" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&family=Russo+One&display=swap" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/ressources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/ressources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/ressources/favicons/favicon-16x16.png">
    <link rel="manifest" href="/ressources/favicons/site.webmanifest">
    <link rel="mask-icon" href="/ressources/favicons/safari-pinned-tab.svg" color="#6c63ff">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Louis Legrain">
    <meta name="application-name" content="Louis Legrain">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/ressources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <style>
        *, ::before, ::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            text-align: center;
            background-color: #F1F1F1;
            min-height: 85vh;
            padding: 0 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        body > * {
            margin: 10px 0;
        }
        h1 {
            font-family: 'Russo One', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 5.5rem;
        }
        h2 {
            margin-bottom: 0;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: black;
            padding: 10px 28px;
        }
        .browser-support-error {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            padding: 15px 20px;
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            z-index: 60;
            color: red;
            background-color: #fff;
            border: solid 4px red;
            border-radius: 20px;
        }
        @media screen and (max-width: 450px) {
            html {
                font-size: 13px;
            }
        }
        @supports (display: grid) {
            .browser-support-error {
                display: none;
            }
        }
    </style>
</head>
<body>
	<p class="browser-support-error">
        Cette page ne peut pas être affichée correctement sur votre navigateur car il est obsolète !
    </p>
    <h1><?= $errorCode ?></h1>
    <h2>
    <?php
    if ($errorCode == 400) {
        echo 'Oups, mauvaise demande.';
    } else if ($errorCode == 401) {
        echo 'Oups, une autorisation est requise.';
    } else if ($errorCode == 403) {
        echo 'Oups, l\'accès est interdit.';
    } else if ($errorCode == 404) {
        echo 'Oups, cette page n\'existe pas.';
    } else if ($errorCode == 500) {
        echo 'Oups, le serveur a rencontré un problème.';
    } else {
        echo 'Une erreur est survenue.';
    }
    ?>
    </h2>
    <a href="/">Retour à l'accueil</a>
</body>
</html>