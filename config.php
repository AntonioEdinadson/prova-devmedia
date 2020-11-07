<?php

try {
    $pdo = new PDO("mysql:dbname=posts; host=localhost", "root", "");
} catch(PDOException $e) {
    echo "ERROR! " . $e->getMessage();
}