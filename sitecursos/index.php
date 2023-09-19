<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="principal">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="?page=novo">Cadastrar</a>
            <a class="nav-link active" href="?page=consultar">Cursos</a>
        </div>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("conexao.php"); 
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("cadastro.php");
                        break;
                        case "consultar":
                            include("cursos.php");
                        break;
                        default:
                        print "<style>
                        h1{
                            background-color: #91CDD7;
                            text-align: center; 
                            border-radius: 15px;
                            padding: 10px;
                            width: 890px;
                        }
                        h3 {
                            background-color: #91CDD7;
                            text-align: center; 
                            border-radius: 15px;
                            padding: 6px; 
                            width: 570px;
                        }
                        p {
                            background-color: #91CDD7;
                            text-align: center; 
                            border-radius: 15px;
                            padding: 6px; 
                            width: 570px;
                        }
                        </style>";
                        print "<h1>Bem vindo a plataforma de cursos da Facens!</h1>";
                        print "<h3>Complemnete o seu conhecimento aqui.</h3>";
                        print "<p>Site voltado para os alunos conquistarem algumas horas com cursos rápidos!</p>";
                    }
                ?>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>