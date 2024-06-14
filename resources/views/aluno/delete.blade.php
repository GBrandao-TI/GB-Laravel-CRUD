<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão de Alunos</title>
</head>
<body>
    <h1>Formulário de Exclusão de Alunos</h1>
    <form action="{{ route('aluno.destroy', $aluno->id) }}" method="POST">
        @CSRF
        @method('DELETE')

        <label for="nome">Nome </label>
        <input type="text" name="nome" id="nome" disabled value="{{ $aluno->nome }}"><br/>

        <label for="celular">Celular</label>
        <input type="text" name="celular" id="celular" disabled value="{{ $aluno->celular }}"><br/>

        <label for="catCNH">CNH</label>
        <input type="text" name="catCNH" id="catCNH" disabled value="{{ $aluno->catCNH }}"><br/>

        <button type="submit">Excluir</button>
    </form>
</body>
</html>
