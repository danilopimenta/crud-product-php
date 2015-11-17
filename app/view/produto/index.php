<!DOCTYPE html>
<html>
<head>
	<title>Produto - listar</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<body>
<div class="col-md-12">


		<div class="container">
  <h2>Tabela de produtos</h2>
  <table class="table">
    <thead>
      <tr>
        <th>produto</th>
        <th>decricao</th>
        <th>quantidade Estoque</th>
        <th>valor</th>
        <th>imagem</th>
        <th>Editar</th>
        <th>Deletar</th>

      </tr>
    </thead>
    <tbody>
      <?php 
      	foreach ($dados as $dado) {
      ?>
	      <tr>
	        <td><?php echo $dado['nome'] ?></td>
	        <td><?php echo $dado['descricao'] ?></td>
	        <td><?php echo $dado['qtd_estoque'] ?></td>
	        <td>R$ <?php echo $dado['valor'] ?></td>
	        <td><img src=<?php echo $dado['image'] ?> height="50" width="50" > </td>
	        <td><a href="index.php?modulo=produto&action=editar&id=<?php echo $dado['id']?>" >Editar</a> </td>
	        <td><a href="index.php?modulo=produto&action=deletar&id=<?php echo $dado['id']?>" >Deletar</a> </td>
	      </tr>
	   <?php } ?>
    </tbody>
  </table>
</div>
  <a href="http://localhost/danilo/index.php?modulo=produto&action=adicionar">Adicionar</a>
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</html>