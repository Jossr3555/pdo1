<?php
include("database.php");

// SQL para inserir novos dados (com e-mails válidos)
$sqlInsert = "INSERT INTO USUARIO (NOME_US, EMAIL_US) VALUES (?, ?)";
$stmt = $con->prepare($sqlInsert);

// Inserção de dados através de parâmetros (exemplo)
$nome = "JOUSES";
$email = "jouses@example.com";
$stmt->execute([$nome, $email]);

// Inserção de mais dados (exemplo)
$nome = "GABRIEL";
$email = "gabriel@example.com";
$stmt->execute([$nome, $email]);

// SQL para selecionar todos os dados
$sql = "SELECT * FROM USUARIO";

$stmt = $con->prepare($sql);
$stmt->execute(); // Agora é execute(), não execulte()

// Mostrar todos os resultados
echo "<h2>Usuários cadastrados:</h2>";

while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $linha["ID_US"] . " " . $linha["NOME_US"] . " " . $linha["EMAIL_US"] . "<br>";
}
?>
