<?php

session_start();
if (!isset($_SESSION['user']) && $title !== 'Connexion'){
    header('location: /back-end/login/index.php');
    exit;
}
require_once '../script.php';

header('Content-Type: application/json');
    $filePath = $_SERVER['DOCUMENT_ROOT'] . '/logs/' . $_GET['action'] . '.txt';
    $fileContents = file_get_contents($filePath);
    $lines = explode("\n", $fileContents);

    foreach ($lines as $line) {
        $result[] = explode(" - ", $line);
    }
    echo json_encode($result);
