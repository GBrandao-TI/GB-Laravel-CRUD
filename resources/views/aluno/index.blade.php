<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos | Início</title>
</head>
<body>
    <h1>Alunos</h1>
    <a href="{{ route('aluno.create') }}">Inserir Aluno</a>

    <table>
        <tr>
            <td>Nome</td>
            <td>Celular</td>
            <td>Cat. CNH</td>
            <td>Ações</td>
        </tr>
        @foreach($alunos as $a)
        <tr>
            <td>{{ $a->nome }}</td>
            <td>{{ $a->celular }}</td>
            <td>{{ $a->catCNH }}</td>
            <td>
                <a href="{{ route('aluno.edit', $a->id) }}">Alterar</a>
                <a href="/aluno/{{$a->id}}/delete">Excluir</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
