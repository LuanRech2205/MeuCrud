<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edicao.css">
    <title>Cadastro</title>
</head>
<body>
<nav class="navbar navbar-exepand-lg navbar-light bg-light">
    <div class="contairner-fluid">
        <a class="navbar-brand" href="#">Cadastro</a>
        <button class="navbar-toogle" type="button" data-bs-toggle="collapse"
        data-bas-target="#navbarNav" aria-expanded="false" aria-label="Toggle navagation">
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo">Novo Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Listar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
                include("banco.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo.php");
                    break;
                    case"listar":
                        include("listar.php");
                    break;
                    case "salvar":
                        include("salvar.php");
                    break;
                    case "editar":
                        include("edita.php");
                    break;
                    default:
                        print "<h1>Seja Muito Bem Vindo!</h1>";
                }
            ?>
        </div>
    </div>
</div>

</body>
</html>