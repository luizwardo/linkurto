<?php
$conn = new mysqli("localhost", "postgres", "senha", "linkurto");

$content = $_POST['content'];

$id = substr(md5(uniqid()), 0, 6);

$stmt = $conn->prepare("INSERT INTO pastes (id, content) VALUES (?, ?)");
$stmt->bind_param("ss", $id, $content);
$stmt->execute();

echo "Seu link: <a href='view.php?id=$id'>view.php?id=$id</a>";
?>
