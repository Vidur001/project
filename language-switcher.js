document.addEventListener('DOMContentLoaded', function() {
    const languageSelect = document.getElementById('language');

    // Function to change language content
    const changeLanguage = (language) => {
        if (language === 'fr') {
            document.getElementById('home').querySelector('h1').textContent = "Bienvenue à The Vows and Wows";
            document.getElementById('home').querySelector('p').textContent = "Votre partenaire de confiance pour des événements inoubliables. Des mariages luxueux aux rassemblements d'entreprise sans faille et aux fêtes privées, nous créons des souvenirs qui durent toute une vie.";

            document.getElementById('about').querySelector('h2').textContent = "À propos de nous";
            document.getElementById('about').querySelector('p').textContent = "Chez The Vows and Wows, nous nous spécialisons dans la réalisation de vos visions. Avec une équipe passionnée et expérimentée, nous veillons à ce que chaque événement que nous planifions soit exécuté avec précision, élégance et une touche personnelle. Laissez-nous nous occuper de chaque détail pendant que vous vous concentrez sur vos moments spéciaux.";

            document.getElementById('gallery').querySelector('h2').textContent = "Galerie";
            document.getElementById('gallery').querySelector('p').textContent = "Explorez certains de nos superbes décors d'événements.";

            document.getElementById('contact').querySelector('h2').textContent = "Contactez-nous";
            document.getElementById('contact').querySelector('p').textContent = "Vous avez des questions ou êtes prêt à planifier votre événement ? Contactez-nous !";

            document.getElementById('video-section').querySelector('.video-heading').textContent = "Découvrez notre histoire";
            document.getElementById('video-section').querySelector('.video-description').textContent = "Regardez comment nous donnons vie à vos événements de rêve avec notre expertise et notre passion. Laissez-nous vous montrer la magie !";

            document.querySelector('footer p').textContent = "© 2025 The Vows and Wows. Tous droits réservés.";

            // Cookie consent banner
            document.getElementById('cookie-banner').querySelector('p').innerHTML = 'Ce site Web utilise des cookies pour améliorer votre expérience. En acceptant, vous consentez à l\'utilisation des cookies. <a href="#">En savoir plus</a>';
            document.getElementById('cookie-banner').querySelector('#accept-cookies').textContent = "Accepter";
            
            // Navigation
            document.querySelector('nav').querySelectorAll('li a')[0].textContent = "Accueil";
            document.querySelector('nav').querySelectorAll('li a')[1].textContent = "Galerie";
            document.querySelector('nav').querySelectorAll('li a')[2].textContent = "À propos";
            document.querySelector('nav').querySelectorAll('li a')[3].textContent = "Contactez-nous";
            
            // Chatbot text
            document.getElementById('chatbox-header').querySelector('span').textContent = "Assistant";
            document.getElementById('chatbox-body').querySelector('input').setAttribute('placeholder', "Demandez-moi n'importe quoi...");
            document.getElementById('send-btn').textContent = "Envoyer";
            document.getElementById('open-chat-btn').textContent = "Chattez avec nous";

        } else if (language === 'es') {
            document.getElementById('home').querySelector('h1').textContent = "Bienvenidos a The Vows and Wows";
            document.getElementById('home').querySelector('p').textContent = "Tu socio confiable para eventos inolvidables. Desde bodas lujosas hasta reuniones corporativas sin problemas y fiestas privadas, creamos recuerdos que duran toda la vida.";

            document.getElementById('about').querySelector('h2').textContent = "Sobre nosotros";
            document.getElementById('about').querySelector('p').textContent = "En The Vows and Wows, nos especializamos en hacer realidad tus visiones. Con un equipo apasionado y experimentado, nos aseguramos de que cada evento que planificamos se ejecute con precisión, elegancia y un toque personal. Déjanos encargarnos de cada detalle mientras tú te concentras en disfrutar de tus momentos especiales.";

            document.getElementById('gallery').querySelector('h2').textContent = "Galería";
            document.getElementById('gallery').querySelector('p').textContent = "Explora algunas de nuestras impresionantes decoraciones de eventos.";

            document.getElementById('contact').querySelector('h2').textContent = "Contáctanos";
            document.getElementById('contact').querySelector('p').textContent = "¿Tienes preguntas o estás listo para planificar tu evento? ¡Ponte en contacto con nosotros!";

            document.getElementById('video-section').querySelector('.video-heading').textContent = "Descubre nuestra historia";
            document.getElementById('video-section').querySelector('.video-description').textContent = "Mira cómo damos vida a tus eventos soñados con nuestra experiencia y pasión. ¡Déjanos mostrarte la magia!";

            document.querySelector('footer p').textContent = "© 2025 The Vows and Wows. Todos los derechos reservados.";

            // Cookie consent banner
            document.getElementById('cookie-banner').querySelector('p').innerHTML = 'Este sitio web utiliza cookies para mejorar su experiencia. Al aceptar, usted consiente el uso de cookies. <a href="#">Más información</a>';
            document.getElementById('cookie-banner').querySelector('#accept-cookies').textContent = "Aceptar";
            
            // Navigation
            document.querySelector('nav').querySelectorAll('li a')[0].textContent = "Inicio";
            document.querySelector('nav').querySelectorAll('li a')[1].textContent = "Galería";
            document.querySelector('nav').querySelectorAll('li a')[2].textContent = "Sobre nosotros";
            document.querySelector('nav').querySelectorAll('li a')[3].textContent = "Contáctanos";
            
            // Chatbot text
            document.getElementById('chatbox-header').querySelector('span').textContent = "Asistente";
            document.getElementById('chatbox-body').querySelector('input').setAttribute('placeholder', "Pregúntame cualquier cosa...");
            document.getElementById('send-btn').textContent = "Enviar";
            document.getElementById('open-chat-btn').textContent = "Chatea con nosotros";

        } else if (language === 'de') {
            document.getElementById('home').querySelector('h1').textContent = "Willkommen bei The Vows and Wows";
            document.getElementById('home').querySelector('p').textContent = "Ihr vertrauenswürdiger Partner für unvergessliche Veranstaltungen. Von luxuriösen Hochzeiten bis hin zu nahtlosen Firmenveranstaltungen und privaten Partys schaffen wir Erinnerungen, die ein Leben lang halten.";

            document.getElementById('about').querySelector('h2').textContent = "Über uns";
            document.getElementById('about').querySelector('p').textContent = "Bei The Vows and Wows sind wir darauf spezialisiert, Ihre Visionen zum Leben zu erwecken. Mit einem leidenschaftlichen und erfahrenen Team stellen wir sicher, dass jede Veranstaltung, die wir planen, mit Präzision, Eleganz und einem persönlichen Touch ausgeführt wird. Lassen Sie uns uns um jedes Detail kümmern, während Sie sich auf Ihre besonderen Momente konzentrieren.";

            document.getElementById('gallery').querySelector('h2').textContent = "Galerie";
            document.getElementById('gallery').querySelector('p').textContent = "Entdecken Sie einige unserer atemberaubenden Event-Setups und Dekorationen.";

            document.getElementById('contact').querySelector('h2').textContent = "Kontaktieren Sie uns";
            document.getElementById('contact').querySelector('p').textContent = "Haben Sie Fragen oder sind Sie bereit, Ihre Veranstaltung zu planen? Kontaktieren Sie uns!";

            document.getElementById('video-section').querySelector('.video-heading').textContent = "Entdecken Sie unsere Geschichte";
            document.getElementById('video-section').querySelector('.video-description').textContent = "Sehen Sie, wie wir Ihre Traumveranstaltungen mit unserer Expertise und Leidenschaft zum Leben erwecken. Lassen Sie sich von der Magie verzaubern!";

            document.querySelector('footer p').textContent = "© 2025 The Vows and Wows. Alle Rechte vorbehalten.";

            // Cookie consent banner
            document.getElementById('cookie-banner').querySelector('p').innerHTML = 'Diese Website verwendet Cookies, um Ihre Erfahrung zu verbessern. Indem Sie akzeptieren, stimmen Sie der Verwendung von Cookies zu. <a href="#">Mehr erfahren</a>';
            document.getElementById('cookie-banner').querySelector('#accept-cookies').textContent = "Akzeptieren";
            
            // Navigation
            document.querySelector('nav').querySelectorAll('li a')[0].textContent = "Startseite";
            document.querySelector('nav').querySelectorAll('li a')[1].textContent = "Galerie";
            document.querySelector('nav').querySelectorAll('li a')[2].textContent = "Über uns";
            document.querySelector('nav').querySelectorAll('li a')[3].textContent = "Kontakt";
            
            // Chatbot text
            document.getElementById('chatbox-header').querySelector('span').textContent = "Assistent";
            document.getElementById('chatbox-body').querySelector('input').setAttribute('placeholder', "Fragen Sie mich alles...");
            document.getElementById('send-btn').textContent = "Senden";
            document.getElementById('open-chat-btn').textContent = "Chatte mit uns";

        } else if (language === 'it') {
            document.getElementById('home').querySelector('h1').textContent = "Benvenuti a The Vows and Wows";
            document.getElementById('home').querySelector('p').textContent = "Il tuo partner di fiducia per eventi indimenticabili. Dalle lussuose nozze ai meeting aziendali senza problemi e alle feste private, creiamo ricordi che durano tutta la vita.";

            document.getElementById('about').querySelector('h2').textContent = "Chi siamo";
            document.getElementById('about').querySelector('p').textContent = "In The Vows and Wows, ci specializziamo nel realizzare le tue visioni. Con un team appassionato ed esperto, ci assicuriamo che ogni evento che pianifichiamo venga eseguito con precisione, eleganza e un tocco personale. Lascia che ci occupiamo di ogni dettaglio mentre ti concentri su momenti speciali.";

            document.getElementById('gallery').querySelector('h2').textContent = "Galleria";
            document.getElementById('gallery').querySelector('p').textContent = "Esplora alcune delle nostre incredibili decorazioni per eventi.";

            document.getElementById('contact').querySelector('h2').textContent = "Contattaci";
            document.getElementById('contact').querySelector('p').textContent = "Hai domande o sei pronto a pianificare il tuo evento? Contattaci!";

            document.getElementById('video-section').querySelector('.video-heading').textContent = "Scopri la nostra storia";
            document.getElementById('video-section').querySelector('.video-description').textContent = "Guarda come diamo vita ai tuoi eventi da sogno con la nostra esperienza e passione. Lasciaci mostrarti la magia!";

            document.querySelector('footer p').textContent = "© 2025 The Vows and Wows. Tutti i diritti riservati.";

            // Cookie consent banner
            document.getElementById('cookie-banner').querySelector('p').innerHTML = 'Questo sito web utilizza i cookie per migliorare la tua esperienza. Accettando, acconsenti all\'uso dei cookie. <a href="#">Scopri di più</a>';
            document.getElementById('cookie-banner').querySelector('#accept-cookies').textContent = "Accetta";
            
            // Navigation
            document.querySelector('nav').querySelectorAll('li a')[0].textContent = "Home";
            document.querySelector('nav').querySelectorAll('li a')[1].textContent = "Galleria";
            document.querySelector('nav').querySelectorAll('li a')[2].textContent = "Chi siamo";
            document.querySelector('nav').querySelectorAll('li a')[3].textContent = "Contattaci";
            
            // Chatbot text
            document.getElementById('chatbox-header').querySelector('span').textContent = "Assistente";
            document.getElementById('chatbox-body').querySelector('input').setAttribute('placeholder', "Chiedimi qualsiasi cosa...");
            document.getElementById('send-btn').textContent = "Invia";
            document.getElementById('open-chat-btn').textContent = "Chatta con noi";

        } else {
            // Default Language (English)
            document.getElementById('home').querySelector('h1').textContent = "Welcome to The Vows and Wows";
            document.getElementById('home').querySelector('p').textContent = "Your trusted partner for unforgettable events. From luxurious weddings to seamless corporate events and private parties, we create memories that last a lifetime.";

            document.getElementById('about').querySelector('h2').textContent = "About Us";
            document.getElementById('about').querySelector('p').textContent = "At The Vows and Wows, we specialize in bringing your visions to life. With a passionate and experienced team, we ensure that every event we plan is executed with precision, elegance, and a personal touch. Let us take care of every detail while you focus on your special moments.";

            document.getElementById('gallery').querySelector('h2').textContent = "Gallery";
            document.getElementById('gallery').querySelector('p').textContent = "Explore some of our stunning event setups and decorations.";

            document.getElementById('contact').querySelector('h2').textContent = "Contact Us";
            document.getElementById('contact').querySelector('p').textContent = "Have questions or ready to plan your event? Get in touch with us!";

            document.getElementById('video-section').querySelector('.video-heading').textContent = "Discover Our Story";
            document.getElementById('video-section').querySelector('.video-description').textContent = "Watch how we bring your dream events to life with our expertise and passion. Let us show you the magic!";

            document.querySelector('footer p').textContent = "© 2025 The Vows and Wows. All rights reserved.";

            // Cookie consent banner
            document.getElementById('cookie-banner').querySelector('p').innerHTML = 'This website uses cookies to enhance your experience. By accepting, you consent to the use of cookies. <a href="#">Learn more</a>';
            document.getElementById('cookie-banner').querySelector('#accept-cookies').textContent = "Accept";
            
            // Navigation
            document.querySelector('nav').querySelectorAll('li a')[0].textContent = "Home";
            document.querySelector('nav').querySelectorAll('li a')[1].textContent = "Gallery";
            document.querySelector('nav').querySelectorAll('li a')[2].textContent = "About";
            document.querySelector('nav').querySelectorAll('li a')[3].textContent = "Contact Us";
            
            // Chatbot text
            document.getElementById('chatbox-header').querySelector('span').textContent = "Assistant";
            document.getElementById('chatbox-body').querySelector('input').setAttribute('placeholder', "Ask me anything...");
            document.getElementById('send-btn').textContent = "Send";
            document.getElementById('open-chat-btn').textContent = "Chat with us";
        }
    };

    languageSelect.addEventListener('change', (event) => {
        const selectedLanguage = event.target.value;
        changeLanguage(selectedLanguage);
    });
});
