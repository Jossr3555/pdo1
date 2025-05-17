<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Música</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        input[type="time"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .section-title {
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-size: 1.2em;
            color: #555;
        }
    </style>
</head>
<body>
    <form action="InsertMusic.php" method="POST">
        <h2 class="section-title">Dados da Música</h2>
        <div>
            <label for="titulo_musica">Título da Música:</label>
            <input type="text" name="titulo_musica" id="titulo_musica" required>
        </div>
        <div>
            <label for="duracao_musica">Duração da Música (HH:MM:SS):</label>
            <input type="time" name="duracao_musica" id="duracao_musica">
        </div>
        <div>
            <label for="data_lancamento">Data de Lançamento:</label>
            <input type="date" name="data_lancamento" id="data_lancamento">
        </div>
        <div>
            <label for="genero_musica">Gênero da Música:</label>
            <input type="text" name="genero_musica" id="genero_musica">
        </div>

        <div>
            <input type="submit" value="Cadastrar Música" id="btn-submit">
        </div>
    </form>
</body>
</html>