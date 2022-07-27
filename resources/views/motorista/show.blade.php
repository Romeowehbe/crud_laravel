<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Consultar um motorista</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .button-plus {
            position: absolute;
            bottom: 5%;
            right: 5%;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Lista de motoristas</h1><br /><br />
    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>CNH</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        <tr>
            @foreach($motorista as $motoristas)
            <td>{{$motoristas->nome}}</td>
            <td>{{$motoristas->cpf}}</td>
            <td>{{$motoristas->cnh}}</td>
            <td><button class='w3-button w3-red'><a href="{{'edit/'.$motoristas->id}}">Editar</a></button></td>
            <td><button class='w3-button w3-red'><a href="{{'delete/'.$motoristas->id}}">Excluir</a></button></td>
        </tr>
        </tr>
        @endforeach
    </table>
    <button class="button-plus w3-button w3-xlarge w3-circle w3-red w3-card-4"><a href="{{'novo'}}">+</a></button>
</body>

</html>             