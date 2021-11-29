<?php

include('conexao.php');
?>

<html>
    
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>

<body>
<a href="fmrclientes.php">Cadastrar Clientes</a> - 
<a href="produtos.php">Cadastrar Produtos  </a> - 
<a href="vendas.php">Cadastrar Vendas  </a> - 
<a href="vendedores.php">Cadastrar Vendedores  </a> - 
<hr>
<!-- Início da Tabela -->
<div class="container">
<h1>Listar Produtos</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produto</th>
      <th scope="col">Preco</th>
      <th scope="col">Estoque</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
       
        $sql = "select * from tblprodutos";
        
        $resultado = $con->query($sql);
    
        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
            echo "<br>";

            echo '<tr>';
            echo "<th>".$linha["idproduto"]."</th>";
            echo "<th><img src='".$linha["foto"]."' style='width:100px; height:100px; object-fit:cover;'></img></th>";
            echo "<th>".$linha["produto"]."</th>";
            echo "<th>".$linha["preco"]."</th>";
            echo "<th>".$linha["estoque"]."</th>";
            echo '<td>
            <button class="btn btn-primary btn-sm">Editar</button> 
            <button class="btn btn-primary btn-sm btn-danger">Excluir</button>
            </td>';
            echo '</tr>';
        }
    
    
    
    
    ?>



  </tbody>
</table>
</div>
<!-- Fim da Tabela-->


</body>


</html>

