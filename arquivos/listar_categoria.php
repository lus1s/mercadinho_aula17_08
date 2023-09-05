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
                <td>Alterações</td>
            </tr>
        <?php
            $sql = "SELECT * FROM tb_categoria";

            $resultados = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultados) > 0) {
                while ($linha = mysqli_fetch_array($resultados)) {
                    echo "<tr>";
                        echo "<td>" . $linha['id_categoria'] . "</td>"; 
                        echo "<td>" . $linha['nome_categ'] . "</td>"; 
                    echo "</tr>";
                }
            }
        ?>
        <tr></tr>
        </table>
        <br><br>
        <button><a href="index.php">Tela Inicial</a></button>
    </body>

</html>