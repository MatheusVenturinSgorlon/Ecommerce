<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Adicionar Usuário - Eco Luxo</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #2e7d32;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: bold;
      text-align: left;
      font-size: 14px;
    }

    input, select {
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    button {
      background: #2e7d32;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
    }

    button:hover {
      background: #1b5e20;
    }

    .links {
      text-align: center;
      margin-top: 20px;
    }

    .links a {
      margin: 0 10px;
      color: #2e7d32;
      text-decoration: none;
      font-size: 14px;
      transition: color 0.3s;
    }

    .links a:hover {
      color: #1b5e20;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Cadastro de Usuário</h2>

    <form action="uploadUsuarios.php" method="post">

      <label for="nome">Nome:</label>

      <input type="text" id="nome" name="nome" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <label for="admin">Tipo:</label>
      <select id="admin" name="admin">
        
        <option value="0">Usuário comum</option>
        <option value="1">Administrador</option>
      </select>

      <button type="submit">Enviar</button>
    </form>

    <div class="links">
      <a href="usuarios.php">Usuários</a>
      <a href="index.php">Página inicial</a>
      <a href="login.php">Login</a>
    </div>
  </div>

</body>
</html>