<?php
    //Update
    include "database.php";

        $id_task = $_POST['id_task'];
        $tarefa = $_POST['tarefa'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];
        $prioridade = $_POST['prioridade'];
        $data_criacao = $_POST['data_criacao'];
        $data_limite = $_POST['data_limite'];
        $responsavel = $_POST['responsavel'];

        $sql_update= " UPDATE crud_tasks 
            SET tarefa ='$tarefa',descricao ='$descricao',status ='$status',
            prioridade='$prioridade',data_criacao ='$data_criacao',
            data_limite='$data_limite',responsavel='$responsavel'   
            WHERE crud_tasks.id = '$id_task'";

    if (mysqli_query($conexao,$sql_update))
    {
        header("Location:listar_tasks.php");
    }
        else
        {
            echo("Falha ao atualizar");
        }  
?>
