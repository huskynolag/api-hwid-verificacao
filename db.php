<?php
$host = "sql300.infinityfree.com";  // ou o seu host MySQL
$db = "if0_39395819_huskynolag";          // nome completo do banco
$user = "if0_39395819";             // seu usuário MySQL
$pass = "0fmfZqtHLW";                // senha do banco

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}
?>
