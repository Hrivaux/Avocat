<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piot, Roy & Machado - avocats - Page de contact</title>

    <link href="assets/css/contact.css?rand=<?php echo(rand(1,59549652689));?>" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css?1">
</head>
<body>
<header class="header">
    <div class="left-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="58" height="47" viewBox="0 0 62 54" fill="none">
            <path d="M9.80762 17.5781V51.0003H23.8767V36.621H36.7473V51.0003H51.0768V17.5781" stroke="#EB9939" stroke-width="5"/>
            <path d="M2 24.8889L30.4423 4L60 24.8889" stroke="#EB9939" stroke-width="5"/>
        </svg>
    </div>
    <div class="center-item">
        <div class="logo"></div>
    </div>
    <div class="right-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="38.469" viewBox="0 0 52 45" fill="none">
            <path d="M3 3H49" stroke="#EB9939" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3 22.2344H49" stroke="#EB9939" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3 41.4688H49" stroke="#EB9939" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
</header>
<div class="mainContact">
    <div class="left-side">
        <div class="contact-header">
            <div class="contact-title">
                <p>Contactez nous</p>
            </div>
            <div class="orange-line">
                <svg xmlns="http://www.w3.org/2000/svg" width="405" height="6" viewBox="0 0 405 6" fill="none">
                    <path d="M0 3H262.218H405" stroke="#EB9939" stroke-width="5"/>
                </svg>
            </div>
        </div>
        <div class="contact-description">
            Écrivez nous pour expliquer votre projet et vos besoins. Nous vous répondrons dans les 48 heures suivant réception de votre message.
        </div>
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-envelope"></i> secretariat@piotmounyavocats.fr
            </div>
            <div class="contact-item">
                <i class="fas fa-phone"></i> +33 05 78 90 49 21
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i> Avenue maréchal de Foch, Lyon 69006
            </div>
        </div>
    </div>
    <div class="right-side">
       <div class="right-text">
            <p>Je nécessite une expertise en :</p>
        </div>
        <div class="button-container">
            <button class="custom-button">Franchise</button>
            <button class="custom-button">Froid</button>
            <button class="custom-button">Autre</button>
        </div>
        <div class="form-container">
            <input type="text" class="custom-input" name="nom" placeholder="Votre nom" data-svg="svg-nom">
            <svg id="svg-nom" xmlns="http://www.w3.org/2000/svg" width="691" height="4" viewBox="0 0 691 4" fill="none"><path d="M0.5 2H690.5" stroke="#EB9939" stroke-width="4"/></svg>

            <input type="email" class="custom-input" name="email" placeholder="Adresse mail" data-svg="svg-email">
            <svg id="svg-email" xmlns="http://www.w3.org/2000/svg" width="691" height="4" viewBox="0 0 691 4" fill="none"><path d="M0.5 2H690.5" stroke="#EB9939" stroke-width="4"/></svg>

            <textarea class="custom-input" name="message" placeholder="Message" data-svg="svg-message"></textarea>
            <svg id="svg-message" xmlns="http://www.w3.org/2000/svg" width="691" height="4" viewBox="0 0 691 4" fill="none"><path d="M0.5 2H690.5" stroke="#EB9939" stroke-width="4"/></svg>
            <!--
            <button class="send-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                    <path d="M33 2L4 14.4528L21 16.5M33 2L25.2321 32L21 16.5M33 2L21 16.5" stroke="white" stroke-width="2"/>
                </svg>
                Envoyer le message
            </button>
        </div> -->
    </div>
</div>
    <script>
        // Sélectionnez tous les champs input
        const inputs = document.querySelectorAll('.custom-input');

        // Parcours des champs input
        inputs.forEach(input => {
            // Ajoutez un gestionnaire d'événements pour le clic sur l'input
            input.addEventListener('click', (event) => {
                // Rétablissez l'opacité basse de tous les autres champs input
                inputs.forEach(otherInput => {
                    if (otherInput !== input) {
                        otherInput.style.opacity = '0.5';

                        // Obtenez l'ID du SVG lié à cet autre input
                        const svgId = otherInput.getAttribute('data-svg');

                        // Sélectionnez le SVG en utilisant l'ID
                        const svg = document.getElementById(svgId);

                        // Rétablissez l'opacité basse du SVG lié à l'autre input
                        if (svg) {
                            svg.style.opacity = '0.5';
                        }
                    }
                });

                // Changez l'opacité de l'input cliqué
                input.style.opacity = '1';

                // Obtenez l'ID du SVG lié à cet input
                const svgId = input.getAttribute('data-svg');

                // Sélectionnez le SVG en utilisant l'ID
                const svg = document.getElementById(svgId);

                // Changez l'opacité du SVG lié
                if (svg) {
                    svg.style.opacity = '1';
                }

                // Empêchez la propagation de l'événement de clic pour éviter le comportement par défaut
                event.stopPropagation();
            });
        });

        const buttons = document.querySelectorAll('.custom-button');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                buttons.forEach(otherButton => {
                    if (otherButton !== button) {
                        otherButton.classList.remove('button-active');
                    }
                });
                button.classList.toggle('button-active');
            });
        });
    </script>
        </body>
</html>