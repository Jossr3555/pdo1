<?php
include("database.php");

$titulo = isset($_POST["titulo_musica"]) ? $_POST["titulo_musica"] : null;
$duracao = isset($_POST["duracao_musica"]) ? $_POST["duracao_musica"] : null;
$data = isset($_POST["data_lancamento"]) ? $_POST["data_lancamento"] : null;
$genero = isset($_POST["genero_musica"]) ? $_POST["genero_musica"] : null;

if (empty($titulo)) {
    echo 'O campo "Nome da musica " é obrigatório.';
    exit();
}

// SQL para inserir dados do artista
$sqlInsertArtista = "INSERT INTO MUSICA (TITULO_MUS, DURACAO_MUS, DATA_LANCAMENTO, GENERO_MUS)
    VALUES (?, ?, ?, ?)";

try {
    $stmtArtista = $con->prepare($sqlInsertArtista);
    $boolArtista = $stmtArtista->execute([$titulo, $duracao, $data, $genero]);

    if ($boolArtista) {
        echo 'Música cadastrada: ' . htmlspecialchars($titulo);
    } else {
        echo 'Erro ao inserir dados do artista.<br>';
        print_r($stmtArtista->errorInfo());
    }
} catch (PDOException $e) {
    echo 'Erro ao tentar inserir dados do artista: ' . $e->getMessage();
}
?>
