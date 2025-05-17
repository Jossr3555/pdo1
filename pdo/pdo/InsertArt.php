<?php
include("database.php");

$nomeArtista = isset($_POST["nome_artista"]) ? $_POST["nome_artista"] : null;
$generoArtista = isset($_POST["genero_artista"]) ? $_POST["genero_artista"] : null;
$anoFormacao = isset($_POST["ano_formacao"]) ? $_POST["ano_formacao"] : null;
$dataNascimento = isset($_POST["genero_musica"]) ? $_POST["genero_musica"] : null;

if (empty($nomeArtista)) {
    echo 'O campo "Nome do Artista" é obrigatório.';
    exit();
}

// SQL para inserir dados do artista
$sqlInsertArtista = "INSERT INTO ARTISTA (NOME_ART, GENERO_PRINCIPAL, ANO_FORMACAO, DATA_NASCIMENTO)
    VALUES (?, ?, ?, ?)";

try {
    $stmtArtista = $con->prepare($sqlInsertArtista);
    $boolArtista = $stmtArtista->execute([$nomeArtista, $generoArtista, $anoFormacao, $dataNascimento]);

    if ($boolArtista) {
        echo 'Parabéns ' . htmlspecialchars($nomeArtista) . " por cadastrar-se em nosso site!";
    } else {
        echo 'Erro ao inserir dados do artista.<br>';
        print_r($stmtArtista->errorInfo());
    }
} catch (PDOException $e) {
    echo 'Erro ao tentar inserir dados do artista: ' . $e->getMessage();
}
?>
