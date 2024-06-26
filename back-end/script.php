<?php

function PDOConnect() {

    require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

    $attr = DB_HOST == 'localhost' ? [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] : [];
    try {
         $bdd = new PDO('mysql:host=' . DB_HOST . ':' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}
