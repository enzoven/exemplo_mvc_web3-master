<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produto</legend>

        <form method="post" action="/produto/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="marca">Marca:</label>
            <input id="marca" name="marca" value="<?= $model->marca ?>" type="text" />

            <label for="valor">Valor:</label>
            <input id="valor" value="<?= $model->valor ?>" name="valor" type="number" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>