<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body class="p-3 mb-2 bg-secondary text-dark">
    <div class="container">
        <form class="row g-3 p-3 mb-2 bg-info text-dark" style="margin: 15%; border-radius:25px; padding:4%">
            <h3>Vamos começar</h3>
            <h3>Preencha os campos corretamente</h3>
            <div class="col-md-7">
                <label for="inputEmail4" class="form-label">Nome completo</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-7">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-7">
                <label for="inputpin" class="form-label">Pin</label>
                <input type="number" class="form-control" id="inputpin">
            </div>
            <div class="col-md-7">
                <label for="inputsenha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputsenha">
            </div>
            <div class="col-md-7">
                <label for="inputCsenha" class="form-label">Confirmar senha</label>
                <input type="password" class="form-control" id="inputCsenha">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Entrar</button>
                <a class="btn btn-primary" href="logar.php" role="button">Voltar</a>
            </div>
        </form>
    </div>

</body>

</html>