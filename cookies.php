<?php
//création de la constance Theme
const COOKIE_THEME ='theme';

//Récupération de la valeur du cookie par création d'une fonction portées sur thèmes
function fichiersCSSThemes() {
    $valeurCookie = $_COOKIE[COOKIE_THEME] ?? 'clair'; //Création variable avec tableau associatif const + ?? valeur : "nulle"
    switch ($valeurCookie){ // Création instruction switch comparaison de l'expression
        case 'sombre';
        $cssFile = "css/sombre.css";
        break;

        case 'clair';
        $cssFile = "css/clair.css";
        break;

        default:
        $cssFile = "css/clair.css";
        break;
    }
    return $cssFile; //
}
    //redirection du menu dans préférences
    function retourcookieCss(string $theme) { //string => être sur que ça prends les chaines de caractères
        setcookie(COOKIE_THEME, $theme, time() + 600);
        header('refresh: 0; URL=accueil.php'); //Rafraichissement de la page et redirection
    }

