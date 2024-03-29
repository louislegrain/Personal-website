<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- General -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Louis Legrain | Développeur web</title>
    <link rel="stylesheet" href="style_v3.min.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <!-- SEO -->
    <meta name="description" content="Je suis développeur web à Paris, et j'aide les entreprises à offrir de belles expériences en ligne, intuitives, réfléchies et avec un code accessible." />
    <link rel="canonical" href="https://louislegrain.online" />
    <meta property="og:site_name" content="Louis Legrain" />
	<meta property="og:locale" content="fr_FR">
	<meta property="og:title" content="Louis Legrain | Développeur web"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://louislegrain.online"/>
	<meta property="og:image" content="https://louislegrain.online/ressources/og_image.jpg"/>
	<meta property="og:image:alt" content="Logo de Louis Legrain" />
	<meta property="og:description" content="Je suis développeur web à Paris, et j'aide les entreprises à offrir de belles expériences en ligne, intuitives, réfléchies et avec un code accessible."/>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="ressources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ressources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ressources/favicons/favicon-16x16.png">
    <link rel="manifest" href="ressources/favicons/site.webmanifest">
    <link rel="mask-icon" href="ressources/favicons/safari-pinned-tab.svg" color="#6c63ff">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Louis Legrain">
    <meta name="application-name" content="Louis Legrain">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="ressources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <p class="browser-support-error">
        Cette page ne peut pas être affichée correctement sur votre navigateur car il est obsolète !
    </p>
    <nav class="flex">
        <div class="flex">
            <h3>Louis<br>Legrain</h3>
            <hr class="vertical-hr">
            <ul class="flex">
                <li><a href="#services">Services</a></li>
                <li><a href="#experiences">Expériences</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <a href="ressources/CV.pdf" class="btn">Téléchargez mon CV</a>
    </nav>
    <header class="flex">
        <div>
            <h1>Bonjour,<br>mon nom est <strong class="underline">Louis</strong></h1>
            <p>
                Je suis <strong>développeur web à Paris</strong>, et j'aide les entreprises à offrir de belles expériences en ligne, intuitives, réfléchies et avec un code accessible.
            </p>
            <a href="#contact" class="btn btn-light">Contactez-moi</a>
        </div>
        <div class="hero-img-container">
            <img src="ressources/hero_image.png" alt="Illustration minimaliste">
        </div>
    </header>
    <section id="services" class="darker-section flex">
        <button class="carousel-previous-btn">
            <img src="ressources/icons/arrow.svg" alt="Précédent">
        </button>
        <div class="carousel">
            <div class="slider flex" style="align-items: flex-start;">
                <div>
                    <img src="ressources/icons/analytics.svg" alt="Graphique">
                    <h3>Statistiques</h3>
                    <p>
                        Obtention d'informations sur les visiteurs qui naviguent sur votre site.
                    </p>
                </div>
                <div>
                    <img src="ressources/icons/responsive.svg" alt="Un ordinateur et un téléphone">
                    <h3>Responsive</h3>
                    <p>
                        Compatible avec toutes les tailles d'écran : ordinateur, tablette, smartphone...
                    </p>
                </div>
                <div>
                    <img src="ressources/icons/fast_website.svg" alt="Fusée">
                    <h3>Rapide</h3>
                    <p>
                        Chargement rapide de la page dès la première visite.
                    </p>
                </div>
                <div>
                    <img src="ressources/icons/optimized_code.svg" alt="Code">
                    <h3>Code optimisé</h3>
                    <p>
                        Code propre écrit sur mesure pour votre site web.
                    </p>
                </div>
                <div>
                    <img src="ressources/icons/w3c.svg" alt="W3C" style="height: 30px; margin-top: 10px;">
                    <h3>Validation W3C</h3>
                    <p>
                        Code validé par le W3C (World Wide Web Consortium).
                    </p>
                </div>
                <div>
                    <img src="ressources/icons/cross_browser.svg" alt="Logo de Chrome et Firefox">
                    <h3>Compatible avec tous les navigateurs</h3>
                    <p>
                        Compatible avec tous les navigateurs internet : Chrome, Firefox, Safari...
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-next-btn">
            <img src="ressources/icons/arrow.svg" alt="Suivant">
        </button>
    </section>
    <section id="experiences">
        <div class="grid reveal-container">
            <h2>Expériences</h2>
            <p class="description reveal">
                Depuis que j'ai commencé à développer il y a quelques années j'ai créé plusieurs sites web pour des associations ou des agences.
            </p>
            <p class="scroll reveal">
                Scroll <span class="icon"><img src="ressources/icons/right-arrow.svg" alt="Flèche droite"></span>
            </p>
            <div class="lb lb-1 reveal">
                <img src="ressources/experiences/youtube.jpg" alt="Application YouTube">
                <p class="date">2017</p>
                <p>
                    Expérience dans le monde de la vidéo sur YouTube notamment.
                </p>
            </div>
            <div class="bb bb-1 reveal">
                <p class="date">2018</p>
                <p>
                    Découverte du monde du code avec Livecode et Swift.
                </p>
                <img src="ressources/experiences/xcode.jpg" alt="Deux écrans d'ordinateur avec un projet Xcode">
            </div>
            <div class="lb lb-2 reveal">
                <img src="ressources/experiences/formations.jpg" alt="Ordinateur">
                <p class="date">Début 2020</p>
                <p>
                    Formations HTML, CSS et Javascript sur des plateformes d'e-learning.
                </p>
            </div>
            <div class="bb bb-2 reveal">
                <p class="date">Fin 2020</p>
                <p>
                    Formation SEO et approfondissement des bases acquises, création de deux sites web.
                </p>
                <img src="ressources/experiences/seo.jpg" alt="SEO">
            </div>
            <div class="lb lb-3 reveal">
                <img src="ressources/experiences/creation_de_sites.jpg" alt="Un homme devant un ordinateur">
                <p class="date">2021</p>
                <p>
                    Création de sites web professionnels.
                </p>
            </div>
        </div>
    </section>
    <section id="competences" class="darker-section flex reveal-container">
        <h2>Compétences</h2>
        <div class="range-container">
            <div class="range reveal"></div><span>HTML</span>
            <div class="range reveal"></div><span>CSS</span>
            <div class="range reveal"></div><span>Javascript</span>
            <div class="range reveal"></div><span>PHP & MySQL</span>
            <div class="range reveal"></div><span>React</span>
        </div>
    </section>
    <section id="projets">
        <h2 class="big-h2">Les sites sur lesquels<br>j'ai travaillé</h2>
        <div class="flex">
            <a href="https://hopemediasolidaire.fr/" target="_blank" rel="noopener" title="Hope média solidaire" class="reveal-self">
                <div>
                    <div class="img-container"><img src="ressources/projets/hope_media_solidaire.jpg" alt="Ordinateur affichant le site web de Hope média solidaire"></div>
                    <h4>Hope média solidaire</h4>
                    <p>
                        Association qui raconte l'histoire de jeunes athlètes dans leur quête de rêve olympique aux Jeux Olympiques de Paris 2024.
                    </p>
                </div>
            </a>
            <a href="https://evans-media.netlify.app/" target="_blank" rel="noopener" title="Evan's Media" class="reveal-self">
                <div>
                    <div class="img-container"><img src="ressources/projets/evans_media.jpg" alt="Ordinateur affichant le site web de Evan's Media"></div>
                    <h4>Evan's Media</h4>
                    <p>
                        Agence SMMA experte dans la digitalisation des entreprises sur les réseaux sociaux et dans le neuromarketing.
                    </p>
                </div>
            </a>
            <a href="https://energy-data.io/energy-tools/degree-day-calculator-pro/" target="_blank" rel="noopener" title="Energy Data" class="reveal-self">
                <div>
                    <div class="img-container"><img src="ressources/projets/energy_data.jpg" alt="Ordinateur affichant le calculateur de Energy Data"></div>
                    <h4>Energy Data</h4>
                    <p>
                        Startup qui aide les entreprises à analyser et à optimiser leur consommation d'énergie grâce à son API.
                    </p>
                </div>
            </a>
        </div>
    </section>
    <footer id="contact" class="darker-section">
        <div class="important-div flex">
            <h2>Un projet ?</h2>
            <a href="#contact" id="start-project-btn" class="btn">Contactez-moi !</a>
        </div>
        <div class="form-container flex">
            <h2>Discutons<br>ensemble.</h2>
            <form action="/send-mail/" class="flex" method="POST">
                <div class="input-container">
                    <input type="text" name="name" id="name" required>
                    <label for="name">Nom</label>
                </div>
                <div class="input-container">
                    <input type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" name="email" id="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="no-spam" aria-hidden="true">
                    <input type="text" name="maps-on" tabindex="-1">
                </div>
                <div>
                    <textarea name="message" id="message" rows="3" required></textarea>
                    <label for="message">Message</label>
                </div>
                <div class="info">Vous pouvez envoyer un message dans ce formulaire de contact.</div>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </div>
        <div class="footer-nav flex">
            <ul class="flex">
                <li><a href="https://github.com/louislegrain" target="_blank" rel="noopener"><img src="ressources/icons/github.svg" alt="Logo de GitHub"></a></li>
                <li><a href="https://codepen.io/louislegrain" target="_blank" rel="noopener"><img src="ressources/icons/codepen.svg" alt="Logo de Codepen"></a></li>
                <li><a href="https://www.fiverr.com/louis_legrain" target="_blank" rel="noopener"><img src="ressources/icons/fiverr.svg" alt="Logo de Fiverr"></a></li>
                <li><a href="mailto:contact@louislegrain.online"><img src="ressources/icons/email.svg" alt="Icone mail"></a></li>
            </ul>
            <div>Copyright © 2021 - Louis Legrain</div>
        </div>
    </footer>
    <script src="app.min.js"></script>
</body>
</html>