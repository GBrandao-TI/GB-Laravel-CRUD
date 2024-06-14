<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Alunos</title>
</head>
<body>
    <h1>Formulário de Inserção de Alunos</h1>
    <form action="{{ route('aluno.store') }}" method="POST">
        @CSRF

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br/>

        <label for="celular">Celular</label>
        <input type="text" name="celular" id="celular"><br/>

        <label for="catCNH">Categoria CNH</label>
        <input type="text" name="catCNH" id="catCNH"><br/>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
