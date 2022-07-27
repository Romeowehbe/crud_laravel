<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Apagar um motorista</title>
</head>

<body>
    <div class="mb-3 form-group">
        <form action="{{ route('excluir_motorista', ['id' => $motorista->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja apagar esse motorista?</label> <br /> <br />
            <input type="text" class="form-control" name="nome" value="{{ $motorista->nome }}"> <br />
            <button class="btn btn-primary">Sim</button>
        </form>
    </div>
</body>

</html>