<?php

$host = 'localhost';
$db   = 'linkurto';
$user = 'postgres';
$pass = '1234';
$port = "5432";  // Changed to standard PostgreSQL port

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}

// verificar se os dados foram enviados via post
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['content'])) {
    $content = trim($_POST['content']); // entrada basica
    if(empty($content)) {
        die("Conteúdo não pode estar vazio");
        exit;
    }

// insere na tabela do db
$stmt = $pdo->prepare("INSERT INTO pastes (content) VALUES (?) RETURNING id");
$stmt->execute([$content]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        die("Salvo com sucesso! ID: " . $row['id']);
    } else {
        die("Erro ao salvar conteúdo.");
    }
} else {
    die("Método invalido ou dados ausentes.");
}

?>
