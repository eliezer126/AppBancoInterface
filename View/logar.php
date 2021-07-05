<!DOCTYPE html>
<html lang="pt-Br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Logar</title>
</head>
<body class="p-3 mb-2 bg-secondary text-dark">
<div class="container">
<form class="row g-3 p-3 mb-2 bg-info text-dark" style="margin: 15%; border-radius:25px; padding:4%">
  <div class="col-md-7">
      <h3>Sejá bem vindo ao banco <img src="img/logo2.png" style="width: 60px; height: 62; margin-top: 2px"></h3>
      <h3>Onde poder e querer andam juntos</h3>
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-7">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Entrar</button>
    <a class="btn btn-primary" href="formEsqueciSenha.php" role="button">Esqueci a senha</a>
    <a class="btn btn-primary" href="cadastroUsu.php" role="button">Não tenho cadastro</a>
    
  </div>
</form>
</div>
</body>
</html>