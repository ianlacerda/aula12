

<?php 

    $idcliente = isset($_GET["idcliente"]) ? $_GET["idcliente"]:null;
    include("conexao.php") ;
    try{
        $sql = "insert into tblclientes (cliente,email) values(:cliente,:email)";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":cliente",$_POST["cliente"]);
        $stmt->bindValue(":email", $_POST["email"]);
        $stmt->execute();
        header("location:listar_cliente.php");

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
    <h1>Cadastro de Clientes</h1>
    <form method="post">
    <div class="row">
    <label class="form-label">Cliente</label><input type="text" name="cliente" class="form-control"><br>
    </div>
    <br>
    <div class="row">
    <label class="form-label">Email</label><input type="email" name="email" class="form-control" id="exampleInputEmail1"><br>
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