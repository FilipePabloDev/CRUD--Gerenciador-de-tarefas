<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
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
</style>

<body class="nunito" >
<div class="container-fluid  text-center">
    <h2>Registre uma tarefa</h2>
</div>
    <form action="cadastro_tasks.php" method="post">
    <div class="d-flex flex-column">
        <div class="p-2 ">
            <label for="tarefa" >Titulo da Tarefa: </label>
            <input type="text" placeholder="Informe um título para a tarefa" class="form-control form-control-lg" name="tarefa" id="tarefa">
        </div>
        <div class="p-2 ">
            <label for="descricao">Descrição: </label>
            <input type="text" placeholder="Coloque os detalhes da tarefa" class="form-control form-control-lg" name="descricao" id="descricao">
        </div>
        <div class="p-2 ">
            <label for="status">Status: </label>
            <select name="status" id="status" class="form-control form-control-lg">
                <option value="Não Iniciado">Não Iniciado</option>
                <option value="Pendente" >Pendente</option>
                <option value="Concluído">Concluído</option>
            </select>
        </div>
        <div class="p-2 ">
            <label for="prioridade">Prioridade: </label>
            <select name="prioridade" id="prioridade" class="form-control form-control-lg">
                <option value="Baixa">Baixa</option>
                <option value="Média">Média</option>
                <option value="Alta">Alta</option>
            </select>
        </div>
        <div class="p-2">
            <label for="data_criacao">Data de Início: </label>
            <input type="text" placeholder="Coloque a data de Início (Dia/Mês/Ano)" name="data_criacao" id="data_criacao" class="form-control form-control-lg">
        </div>
        <div class="p-2">
            <label for="data_limite">Data Limite: </label>
            <input type="text" placeholder="Coloque a data final (Dia/Mês/Ano)" name="data_limite" id="data_limte" class="form-control form-control-lg">
        </div>
        <div class="p-2">
            <label for="responsavel">Responsável: </label>
            <input type="text" placeholder="Defina quem vai fazer a tarefa" name="responsavel" id="responsavel" class="form-control form-control-lg">
        </div>
        <div class="p-2 d-grid">
            <input type="submit" value="Enviar" class="btn btn-outline-success">
        </div>
    </form>
    <div class="p-2 d-grid">
        <a href="index.html" class="btn btn-outline-dark">voltar</a>
    </div>
</div>
</body>
</html>