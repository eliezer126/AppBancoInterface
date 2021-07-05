<?php
include_once("header.php");
?>
<div class="row" style="margin-top: 15px;">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Saldo em conta</h5>
        <h5 class="card-title">Saldo</h5>
        <a href="extrato.php" class="btn btn-primary">Ver extrato</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Transferências</h5>
        <h5 class="card-title">Historico</h5>
        <a href="transferencia.php" class="btn btn-primary">Fazer uma trasferência</a>
      </div>
    </div>
  </div>
</form>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 20px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" style= "width: 900px; height: 500px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-warning">
      <a class="btn btn-primary" href="" role="button"><h2>Poupança</h2></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" style= "width: 900px; height: 500px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-warning">
      <a class="btn btn-primary" href="" role="button"><h2>Financie seus sonhos</h2></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" style= "width: 900px; height: 500px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-warning">
      <a class="btn btn-primary" href="" role="button"><h2>Envestemento que trás resultados</h2></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php
include_once("footer.php");
?>