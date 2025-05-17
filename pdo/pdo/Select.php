<?php 
    include("database.php");

    // Comando SQL para selecionar os dados da tabela ARTISTA
    $sqla = "SELECT * FROM ARTISTA";

    // Comando SQL para selecionar os dados da tabela MUSICA
    $sqlm = "SELECT * FROM MUSICA";

    // Executando a consulta para ARTISTA
    $stmt = $con->prepare($sqla);
    $stmt->execute();
    
    // Exibindo todos os registros de ARTISTA
    echo "<h3>ARTISTAS:</h3>";
    while ($linhaA = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $linhaA["NOME_ART"] . " " . $linhaA['GENERO_PRINCIPAL'] . " " . $linhaA['ANO_FORMACAO'] . " " . $linhaA['DATA_NASCIMENTO'] . "<br>";
    }

    // Executando a consulta para MUSICA
    $stmt = $con->prepare($sqlm);
    $stmt->execute();
    
    // Exibindo todos os registros de MUSICA
    echo "<h3>MÚSICAS:</h3>";
    while ($linhaM = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $linhaM["TITULO_MUS"] . " " . $linhaM['DURACAO_MUS'] . " " . $linhaM['DATA_LANCAMENTO'] . " " . $linhaM['GENERO_MUS'] . "<br>";
    }
?>
