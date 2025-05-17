<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta - Artista</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .section-title {
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-size: 1.2em;
            color: #555;
        }

        .input,
        .btn {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 15px;
            font-size: 16px;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .input {
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .result-container {
            margin-top: 20px;
        }

        .result-container h3 {
            font-size: 1.2em;
            color: #333;
        }

        .result-item {
            margin-bottom: 10px;
            font-size: 1em;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="section-title">Buscar Artista</h2>
        <form method="GET" action="">
            <input placeholder="Pesquisar Artista" class="input" name="text" type="text" value="<?php echo isset($_GET['text']) ? $_GET['text'] : ''; ?>" required>
            <button class="btn" type="submit">Pesquisar</button>
        </form>

        <div class="result-container">
            <?php
                if (isset($_GET['text']) && !empty($_GET['text'])) {
                    $nome_musica = $_GET['text'];
                    include("database.php");

                    $sqla = "SELECT * FROM MUSICA WHERE TITULO_MUS LIKE :nome_musica";
                    $stmt = $con->prepare($sqla);
                    $stmt->bindValue(':nome_musica', '%' . $nome_musica . '%');
                    $stmt->execute();

                    echo "<h3>Resultados da pesquisa para: '$nome_musica'</h3>";
                    if ($stmt->rowCount() > 0) {
                        while ($linhaA = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<div class='result-item'><strong>" . htmlspecialchars($linhaA["TITULO_MUS"]) . "</strong> - " . htmlspecialchars($linhaA['DURACAO_MUS']) . " - " . htmlspecialchars($linhaA['DATA_LANCAMENTO']) . " - " . htmlspecialchars($linhaA['GENERO_MUS']) . "</div>";
                        }
                    } else {
                        echo "<p>Nenhum artista encontrado para '$nome_musica'.</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
