<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div id="container">
<form action="processa_get.php" method="get">
<?php
    if(isset($_GET['nome']) && !empty($_GET['nome'])){
        $nome = htmlspecialchars($_GET['nome']);
        echo "<h1>Bem vindo, $nome!</h1>";

    }else{
        header("Location: index.html");
        exit();
    }
    if(isset($_GET['botao'])){
        header("Location: index.html");
        exit();
    }
?>

<button type="submit" name="botao">Sair</button>
</form>
</div>
</body>
</html>