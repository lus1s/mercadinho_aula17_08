<?php
    require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categorias</title>
    </head>

    <body>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Categoria</td>
                <td colspan="2">Alterações</td>
            </tr>
        <?php
            $sql = "SELECT * FROM tb_categoria";

            $resultados = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultados) > 0) {
                while ($linha = mysqli_fetch_array($resultados)) {
                    $id = $linha['id_categoria'];
                    $nome = $linha['nome_categ'];
                    echo "<form action='deletar_dados.php'>";
                    echo "<tr>";
                        echo "<td>" . $id . "</td>"; 
                        echo "<td>" . $nome . "</td>"; 
                        echo "<td rowspan='1'> <a href='index.php'><img src='imagens/alterar.jpeg' width='25px'> </a>";
                        echo "<td> <a href='deletar_dados.php?id_categoria=$id'><img src='imagens/shutterstock-delete.jpg' width='25px'> </a>";
                    echo "</tr>";
                }
            }
        ?>
        </table>
        <br><br>
        <button><a href="index.php">Tela Inicial</a></button>
    </body>

</html>