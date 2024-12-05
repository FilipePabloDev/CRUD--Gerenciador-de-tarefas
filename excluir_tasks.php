<?php
include "database.php";

$id_task = $_GET['id'];

$sql_excluir_por_id = "DELETE FROM crud_tasks WHERE crud_tasks.id = '$id_task'";

// (Opcional) Comando para verificar se a string esta funcionando 
    //echo "<h3>".$sql_excluir_por_id."</h3>";
if(mysqli_query($conexao,$sql_excluir_por_id))
{
    header("Location: listar_tasks.php");
}
else
{
        echo ("Erro ao excluir o cadastro!");
}