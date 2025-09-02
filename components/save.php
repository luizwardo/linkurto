
<?php
$host = 'localhost';
$db   = 'linkurto';
$user = 'postgres';
$pass = '1234';
$port = "5432";  // Changed to standard PostgreSQL port

$conn = pg_connect("host=$host dbname=$db user=$user password=$pass port=$port");

if (!$conn) {
    echo "Erro ao conectar: " . pg_last_error();  // More detailed error
} else {
    echo "Conexão com PostgreSQL bem-sucedida!";
    // Add code here to interact with your table (e.g., insert data from React)
}
?>
