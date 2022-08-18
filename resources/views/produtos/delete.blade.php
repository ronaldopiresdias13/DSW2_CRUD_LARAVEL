<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>
    <h1>Excluir Produto</h1>

    <form action="{{ route('excluir_produto', ['id'=> $produto->id]) }}" method="post">
        @csrf
        <label for="nome">Tem certeza que deseja apagar este produto?</label> <br>
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br>
        <button>Sim</button>
    </form>

</body>

</html>
