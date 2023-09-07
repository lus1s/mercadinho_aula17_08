<?php
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Produto</td>
            <td>Categoria</td>
            <td colspan="2">Alterações</td>
        </tr>
        <?php
        $sql = "SELECT * FROM tb_produto ";
        $resultados = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultados) > 0) {
            while ($linha = mysqli_fetch_array($resultados)) {
                $id = $linha['id_produto'];
                $nome = $linha['nome_produto'];
                echo "<tr>";
                echo "<td>" . $id . "</td>";
                echo "<td>" . $nome . "</td>";
                $id_categoria = $linha['tb_categoria_id_categoria'];
                // echo "<td>" . $linha['tb_categoria_id_categoria'] . "</td>";

                $sql = "SELECT nome_categ FROM tb_categoria WHERE id_categoria = '$id_categoria'";
                $resultados2 = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultados2) > 0) {
                    while ($linha = mysqli_fetch_array($resultados2)) {
                        echo "<td>" . $linha['nome_categ'] . "</td>";
                        echo "<td rowspan='1'> <a href='index.php'><img src='imagens/alterar.jpeg' width='25px'> </a>";
                        echo "<td> <a href='deletar_dados.php?id_produto=$id&id_categ=$id_categoria'><img src='imagens/shutterstock-delete.jpg' width='25px'> </a>";
                        echo "</tr>";
                    }
                } else {
                    echo "Não há uma categoria";
                }
            }
        }
        ?>
    </table>
    <br><br>
    <button><a href="index.php">Tela Inicial</a></button>
</body>

</html>