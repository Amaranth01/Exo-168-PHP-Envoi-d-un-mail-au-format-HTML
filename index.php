<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'j.conan@fondationface.org',
    'vanessa.nectoux@gmail.com'
];

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                "Bonjour et bienvenue dans notre Newsletter... vide."
            </div>
        </body>
    </html>
';

 foreach ($to as $value) {
        if (mail($value, 'news', $html,)) {
            echo "Email envoyé avec succès <br>";
        } else {
            echo "Échec de l'envoi de l'email <br>";
        }
    }