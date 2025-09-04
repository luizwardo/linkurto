<?php

$host = 'localhost';
$db   = 'linkurto';
$user = 'postgres';
$pass = '1234';
$port = "5432";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
 if (!$id){
    die("ID inválido.");
 }

 $stmt = $pdo->prepare("SELECT content FROM pastes WHERE id = ?");
 $stmt->execute([$id]);

 if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    die("<pre>" . htmlspecialchars($row['content']) . "</pre>");
 } else {
    die("Texto não encontrado!");
 }
 
?>