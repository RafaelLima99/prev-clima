<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--CSS -->
        <link rel="stylesheet" href="css/estilo.css">
        <!-- weather-icons CSS -->
        <link rel="stylesheet" href="css/weather-icons.min.css">
        <!-- fontawesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
        <title>Previsão do tempo</title>
    </head>
    <?php require_once "../App/views/includes/header.php";?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-danger" id="conteudo" role="alert">
                        <h4 class="alert-heading" id="titulo">Atenção!</h4>
                        <p id="descricao"></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/index.js"></script>
        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>   
</html>