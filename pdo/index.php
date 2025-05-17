<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    
    .container {
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      width: 400px;
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    .link-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .link-container a {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 15px;
      font-size: 16px;
      text-decoration: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .link-container a:hover {
      background-color: #45a049;
    }

    .link-container a:active {
      background-color: #3e8e41;
    }

    .footer {
      margin-top: 20px;
      font-size: 14px;
      color: #777;
    }

    .footer a {
      color: #4CAF50;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Página Principal</h1>
    <div class="link-container">
      <a href="pdo/FormArts.php">Cadastrar Artista</a>
      <a href="pdo/FormMusic.php">Cadastrar Música</a>

      <a href="pdo/ConsultArt.php">Consultar Artista </a>
      <a href="pdo/ConsultMusic.php">Consultar Música</a>
    
    </div>
    <div class="footer">
      <p>Desenvolvido por <a href="#">Jouses e Gabriel (TOP 1)</a></p>
    </div>
  </div>

</body>
</html>
