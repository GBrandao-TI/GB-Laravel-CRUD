<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração de Alunos</title>
</head>
<body>
    <h1>Formulário de Alteração de Alunos</h1>
    <form action="{{ route('aluno.update', $aluno->id) }}" method="POST"> <!-- Passo o valor da variável $id -->
        @CSRF
        @method('PUT')

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $aluno->nome }}"><br/>

        <label for="celular">Celular</label>
        <input type="text" name="celular" id="celular" value="{{ $aluno->celular }}"><br/>

        <label for="catCNH">Categoria CNH</label>
        <input type="text" name="catCNH" id="catCNH" value="{{ $aluno->catCNH }}"><br/>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
