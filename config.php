<?php
// 📁 config.php : Fichier de connexion PDO
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=dblogin_test", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
