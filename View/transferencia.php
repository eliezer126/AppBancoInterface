<?php
include_once("header.php");
?>
<h2 style="text-align: center;">Pra quem voce gostaria de transferir?</h2>
<form class="row g-3 bg-secondary text-light" style="margin-top:30px; margin-left:15%; border-radius:25px; padding:4%; width:900px;">
  <div class="col-md-8">
    <label for="inputnome" class="form-label">Nome completo</label>
    <input type="email" class="form-control" id="inputnome">
  </div>
  <div class="col-md-8">
    <label for="inputvalor" class="form-label">Quanto gostaria de transferir?</label>
    <input type="number" class="form-control" id="inputvalor">
  </div>
  <div class="col-md-8">
    <label for="inputPassword4" class="form-label">Digite a senha para confirmar</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<?php
include_once("footer.php");
?>