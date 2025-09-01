<?php
$conn = new mysqli("localhost", "postgres", "senha", "linkurto");
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT content FROM pastes WHERE id = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo "<pre>" . htmlspecialchars($row['content']) . "</pre>";
} else {
    echo "Texto não encontrado!";
}
?>
