<?php
    require_once 'conexao.php';

    if (isset($_GET['id_categoria'])){

        $id = $_GET['id_categoria'];
        $sql= "DELETE FROM `tb_categoria` WHERE (`id_categoria` = '$id')";

        mysqli_query($conexao, $sql);

        header('Location: listar_categoria.php');
        exit();
    }

    if (isset($_GET['id_produto'])){

        $id = $_GET['id_produto'];
        $categoria = $_GET['id_categ'];

        $sql = "DELETE FROM `tb_produto` WHERE ((`id_produto` = '$id' AND `tb_categoria_id_categoria` = '$categoria'))";

        mysqli_query($conexao, $sql);

        header('Location: listar_produtos.php');
        exit();
    
    }

?>