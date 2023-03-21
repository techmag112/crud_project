<?php

$dbbase = "mysql:host=localhost; dbname=db_main";
try {
    $pdo = new PDO($dbbase,'root','');
} catch (PDOExeption $e) {
    echo 'База недоступна ' . $e->getMessage();
    die();
}

?>