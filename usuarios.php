<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Usuários - Eco Luxo</title>
  <link rel="stylesheet" href="styleHeader.css">
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: #f4f4f9;
      margin: 0;
      padding: 40px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #2e7d32;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
    }

    thead {
      background: #2e7d32;
      color: #fff;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    

    a {
      text-decoration: none;
      padding: 6px 12px;
      border-radius: 6px;
      font-size: 14px;
      margin-right: 5px;
    }

    a[href*="alterarUsuario"] {
      background: #ffb300;
      color: #fff;
    }

    a[href*="alterarUsuario"]:hover {
      background: #e69500;
    }

    a[href*="excluirUsuario"] {
      background: #e53935;
      color: #fff;
    }

    a[href*="excluirUsuario"]:hover {
      background: #c62828;
    }

    .adicionar {
      display: inline-block;
      margin-top: 20px;
      background: #2e7d32;
      color: #fff;
      padding: 10px 16px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }

    .adicionar:hover {
      background: #1b5e20;
    }
  </style>
</head>
<body>

  <h2>Lista de Usuários</h2>

  <?php 
    include "util.php";
    $conn = conecta();

    $varSQL = "select * from usuario";
    $select = $conn->query($varSQL);
  ?>

  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
       
        <th>Admin</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>
      <?php 
        while ($linha = $select->fetch()) {
          echo "<tr>
            <td>".$linha['nome']."</td>
            <td>".$linha['email']."</td>
            <td>".$linha['telefone']."</td>
            <td>".($linha['admin'] == 1 ? "Administrador" : "Usuário")."</td>
            <td>
              <a href='alterarUsuario.php?id_usuario=".$linha['id_usuario']."'>Alterar</a>
              <a href='excluirUsuario.php?id_usuario=".$linha['id_usuario']."'>Excluir</a>
            </td>
          </tr>";
        }
      ?>
    </tbody>
  </table>

  <a class="adicionar" href="adicionarUsuario.php">+ Adicionar Usuário</a>

</body>
</html>