<?php
    include 'database.php';
    $sql_listar="SELECT * FROM crud_tasks";
    $resultado=mysqli_query($conexao,$sql_listar);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="shortcut icon" href="img/icons/list16.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<!--Fiz embutido no código porque seria a único elemento que utilizaria do css puro, -->
<!--se tivesse que utilizar mais elementos faria arquivo externo-->
<style>
    .nunito{
        font-family: "Nunito", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
    }
    body
    {
        background-color: #CFCFCF;
    }
</style>

<body class="nunito" >

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Tarefa </th>
                <th>Descrição </th>
                <th>Status </th>
                <th>Prioridade </th>
                <th>Data de Início </th>
                <th>Data Limite </th>
                <th>Responsável</th>
                <th>Atualizar </th>
                <th>Excluir </th>
            </tr>
        </thead>
        <tbody>
            <?php

                while($dados = mysqli_fetch_assoc($resultado)):    
            ?>
            <tr>
                <td><?php echo($dados['tarefa']);?></td>
                <td><?php echo($dados['descricao']);?></td>
                <td><?php echo($dados['status']);?></td>
                <td><?php echo($dados['prioridade']);?></td>
                <td><?php echo($dados['data_criacao']);?></td>
                <td><?php echo($dados['data_limite']);?></td>
                <td><?php echo($dados['responsavel']); ?></td>
                <td><a class ="p-2 btn btn-outline-info" href="form_atualizar_tasks.php?id=<?php echo($dados['id']); ?>">Atualizar</a></td>
                <td><a class="p-2 btn btn-outline-danger" href="excluir_tasks.php?id=<?php echo($dados['id']); ?>">Excluir</a></td>
            </tr>
            <?php endwhile; ?>   
        </tbody>
    </table>
    <br><h3><a class="p-2 d-grid btn btn-outline-dark" href="index.html">voltar</a></h3>
   

</body>
</html>

