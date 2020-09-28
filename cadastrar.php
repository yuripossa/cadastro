<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastrologin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastrar (usuario, email, senha)
VALUES ('$usuario', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
  echo ("<script>
            alert('Cadastro realizado com sucesso');
            window.location.href='index.html';
        </script>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>