<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Artista</title>
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
    <form action="InsertArt.php" method="POST">
        <h2 class="section-title">Dados do Artista</h2>
        <div>
            <label for="nome_artista">Nome do Artista:</label>
            <input type="text" name="nome_artista" id="nome_artista" required>
        </div>
        <div>
            <label for="genero_artista">Gênero Principal:</label>
            <input type="text" name="genero_artista" id="genero_artista">
        </div>
        <div>
            <label for="ano_formacao">Ano de Formação:</label>
               <input type="number" name="ano_formacao" id="ano_formacao">
        </div>
        <div>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">
        </div>

        <div>
            <input type="submit" value="Cadastrar Artista" id="btn-submit">
        </div>
    </form>
</body>
</html>