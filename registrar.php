<?php
    $usuario_cad = $_POST['usuario'];
    $senha_cad = $_POST['senha'];
    $senha_cad = md5($senha_cad);
    $confirma_cad = $_POST['confirma_senha'];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "biblioteca";

    try {
        $con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(empty($usuario_cad) OR empty($senha_cad) OR empty($confirma_cad)){
            echo '<script>alert("Você não preencheu todos os campos do cadastro. Clique em OK e digite novamente.")</script>';
            echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/cadastro_usuario.php";
              </script>';
       } else {
           $sql = "insert into usuario (usuario, senha) values ('$usuario_cad', '$senha_cad')";
       }
       $con->exec($sql);
       echo '<script>alert("Usuario cadastrado com sucesso!")</script>';
       echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/main.php";
              </script>';
       }
    catch(PDOException $e)
        {
        echo "Conexão falhou: " . $e->getMessage();
        }
    
    $conn = null;
    ?>