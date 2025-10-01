<?php

    include "util.php";
    $conn = conecta();

    $varSQL = "insert into usuario (nome, email,telefone, senha, admin)
                values (:nome, :email, :telefone, :senha, :admin)";

    $insert = $conn->prepare($varSQL);

    $insert->bindParam(':nome', $_POST['nome']);
    $insert->bindParam(':telefone', $_POST['telefone']);
    $insert->bindParam(':email', $_POST['email']);
    $insert->bindParam(':senha', $_POST['senha']);
    $insert->bindParam(':admin', $_POST['admin']);

    if ($insert->execute() > 0) {
        echo "<br><br>Incluido com sucesso<br>";
    }
    header("Location: usuarios.php");
    exit;
?>