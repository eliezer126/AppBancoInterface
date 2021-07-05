<?php 
include_once("header.php");
?>
<h3 style="margin-top: 27px; text-align: center;">Saldo disponível</h3>
<table class="table p-3 mb-2 bg-secondary text-light" style="margin-top:30px; border-radius:25px; padding:4%">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Entradas</th>
      <th scope="col">Saidas</th>
      <th scope="col">Saldo depois da transação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<?php
include_once("footer.php");
?>