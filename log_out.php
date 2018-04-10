<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 10/04/18
 * Time: 17:34
 */
session_start();
header('location:login.php');
$expiration = time()-3600;
setcookie('pecan_nuts',"",$expiration) ;
setcookie('chocolate_chips',"",$expiration) ;
setcookie('chocolate_cookie',"",$expiration) ;
setcookie('mm_cookies',"",$expiration) ;
session_destroy();
