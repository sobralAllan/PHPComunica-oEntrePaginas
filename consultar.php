<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
    <?php 
        include 'cadastro.php';
        session_start();
        $cpf = $_SESSION['cpf'];
        $nome = $_SESSION['nome'];
        $tele = $_SESSION['telefone'];
        $end = $_SESSION['endereco'];
        $cid = $_SESSION['cidade'];   

        $cad = new Cadastro($cpf, $nome, $tele, $end, $cid);
        echo $cad->imprimir();
    ?>
</body>
</html>