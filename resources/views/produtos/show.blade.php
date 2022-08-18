<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>
    <h1>Ver Produto</h1>

    <!-- <form action="{{ route('cadastrar_produto') }}" method="post"> -->
    <!-- @csrf -->
    <label for="nome">Nome</label> <br>
    <input type="text" name="nome" value="{{ $produto->nome }}"> <br>
    <label for="custo">Custo</label> <br>
    <input type="text" name="custo" value="{{ $produto->custo }}"> <br>
    <label for="preco">Preço</label> <br>
    <input type="text" name="preco" value="{{ $produto->preco }}"> <br>
    <label for="quantidade">Quantidade</label> <br>
    <input type="text" name="quantidade" value="{{ $produto->quantidade }}"> <br>
    <!-- <button>Salvar</button> -->
    <!-- </form> -->

</body>

</html>
