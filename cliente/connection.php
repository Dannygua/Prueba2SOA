<?php

$link = 'mysql:host=mysql-joelmendoza1.alwaysdata.net;dbname=joelmendoza1_multicines';
$usuario = '224543_joel';
$pass = '123JOEL@';

try {
    $pdo = new PDO($link, $usuario, $pass);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>"; 
    die(); 
}