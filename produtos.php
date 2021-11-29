

<?php 

$idproduto = isset($_GET["idproduto"]) ? $_GET["idproduto"]:null;
include("conexao.php") ;
try{
    $sql = "insert into tblprodutos (produto,preco,estoque) values(:produto,:preco,:estoque)";
    $stmt = $con->prepare($sql);
    $stmt->bindValue(":produto",$_POST["produto"]);
    $stmt->bindValue(":preco", $_POST["preco"]);
    $stmt->bindValue(":estoque", $_POST["estoque"]);
    $stmt->execute();
    header("location:listar_produtos.php");

} catch(PDOException $e){
    echo "Não Cadastrou. ".$e->getCode();

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Clientest</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<a href="fmrclientes.php">Cadastrar Clientes</a> - 
<a href="produtos.php">Cadastrar Produtos  </a> - 
<a href="vendas.php">Cadastrar Vendas  </a> - 
<a href="vendedores.php">Cadastrar Vendedores  </a> - 
<hr>


<div class="container">
    <h1>Cadastro de Produtos</h1>
    <form method="post">
    <div class="row">
    <label class="form-label">Produto</label><input type="text" name="produto" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Preço</label><input type="text" name="preco" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Estoque</label><input type="text" name="estoque" class="form-control"><br>
    </div>
    <br>
    <br>
    <div class="row">
    <input type="submit" value="Cadastrar" type="submit" class="btn btn-primary">
    </div>
    </form>
</div>


</body>
</html>