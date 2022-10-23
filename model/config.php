<?php

// env | prod
$env = 'dev';

$host = 'localhost';
$db = 'cv';
$user = 'root';
$password = '';

if ($env === 'prod') {
    $host = 'mysql-annacamps.alwaysdata.net';
    $db = 'annacamps_cv';
    $user = 'annacamps_aina';
    $password = 'ainaainaaina123';
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "La connexió ha fallat: " . $e->getMessage();
}
