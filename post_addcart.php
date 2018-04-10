<?php
session_start();
header('location:index.php');

$submit = $_POST['submit'];
$expiration=time()+24*3600 ;

switch($submit) {
    case 'pecan_nuts':
        if (!isset($_COOKIE['pecan_nuts'])) {
            // On crée notre cookie avec la date d'expiration choisie
            setcookie('pecan_nuts',1,$expiration) ;
        } else {
            // Le cookie existe déjà, on met à jour la valeur, mais on utilise le timestamp défini au moment de l'initialisation du cookie (conservé dans le cookie $_COOKIE['expiration_variable'])
            $pecan_nuts = $_COOKIE['pecan_nuts'];
            $pecan_nuts = $pecan_nuts + 1;
            setcookie('pecan_nuts',$pecan_nuts,$expiration) ;
        }
        break;
    case 'chocolate_chips':
        if (!isset($_COOKIE['chocolate_chips'])) {
            // On crée notre cookie avec la date d'expiration choisie
            setcookie('chocolate_chips',1,$expiration) ;
        } else {
            // Le cookie existe déjà, on met à jour la valeur, mais on utilise le timestamp défini au moment de l'initialisation du cookie (conservé dans le cookie $_COOKIE['expiration_variable'])
            $chocolate_chips = $_COOKIE['chocolate_chips'];
            $chocolate_chips = $chocolate_chips + 1;
            setcookie('chocolate_chips',$chocolate_chips,$expiration) ;
        }
        break;
    case 'chocolate_cookie':
        if (!isset($_COOKIE['chocolate_cookie'])) {
            // On crée notre cookie avec la date d'expiration choisie
            setcookie('chocolate_cookie',1,$expiration) ;
        } else {
            // Le cookie existe déjà, on met à jour la valeur, mais on utilise le timestamp défini au moment de l'initialisation du cookie (conservé dans le cookie $_COOKIE['expiration_variable'])
            $chocolate_cookie = $_COOKIE['chocolate_cookie'];
            $chocolate_cookie = $chocolate_cookie + 1;
            setcookie('chocolate_cookie',$chocolate_cookie,$expiration) ;
        }
        break;
    case 'mm_cookies':
        if (!isset($_COOKIE['mm_cookies'])) {
            // On crée notre cookie avec la date d'expiration choisie
            setcookie('mm_cookies',1,$expiration) ;
        } else {
            // Le cookie existe déjà, on met à jour la valeur, mais on utilise le timestamp défini au moment de l'initialisation du cookie (conservé dans le cookie $_COOKIE['expiration_variable'])
            $mm_cookies = $_COOKIE['mm_cookies'];
            $mm_cookies = $mm_cookies + 1;
            setcookie('mm_cookies',$mm_cookies,$expiration) ;
        }
        break;
}
?>
