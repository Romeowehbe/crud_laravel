<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Editar um motorista</title>
</head>

<body>
    <h1>Edite seu cadastro</h1><br /><br />
    <div class="mb-3 form-group">
        <form action="{{ route('atualizar_motorista', ['id' => $motorista->id]) }}" method="POST">
            @csrf
            <label for="">Nome</label> <br />
            <input type="text" class="form-control" name="nome" value="{{ $motorista->nome }}"> <br />
            <label for="">CPF</label> <br />
            <input type="text" class="form-control" name="cpf" value="{{ $motorista->cpf }}"> <br />
            <label for="">CNH</label> <br />
            <input type="text" class="form-control" name="cnh" value="{{ $motorista->cnh }}"> <br />
            <button class="btn btn-primary">Salvar edição</button>
        </form>
    </div>
</body>

</html> 