<?php
    //Create
    include "database.php";

        $tarefa = $_POST['tarefa'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];
        $prioridade = $_POST['prioridade'];
        $data_criacao = $_POST['data_criacao'];
        $data_limite = $_POST['data_limite'];
        $responsavel = $_POST['responsavel'];


    $sql= "INSERT INTO crud_tasks (tarefa, descricao, status, prioridade,data_criacao,data_limite, responsavel)
    VALUES ('$tarefa','$descricao','$status','$prioridade','$data_criacao', '$data_limite','$responsavel')";
    

    if (mysqli_query($conexao,$sql))
    {
        header("Location:index.html");
       
    }
        else
        {
            echo("Falha no cadastro");
            
        }  
?>


