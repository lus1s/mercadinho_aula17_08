<?php
    require_once 'conexao.php';

    // Cadastro de Categoria
    if (isset($_GET['categoria'])) {
        $categoria = $_GET['categoria'];

        $sql = "INSERT INTO tb_categoria (nome_categ) VALUES ('$categoria')";

        mysqli_query($conexao, $sql);
        header('Location: listar_categoria.php');
        exit();
    }
    
    // Cadastro dfe Produto 
    if (isset($_GET['nome_produto'])){
        $produto = $_GET['nome_produto'];
        $id_categoria = $_GET['id_categoria'];

        $sql = "INSERT INTO tb_produto (nome_produto, tb_categoria_id_categoria) VALUES ('$produto', '$id_categoria')";
        
        mysqli_query($conexao, $sql);
        header('Location: listar_produtos.php');
        exit();
    }
   
?>