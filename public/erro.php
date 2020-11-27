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
        <link rel="stylesheet" href="css/erro.css">
        <title>Erro</title>
    </head>
    <?php require_once "../App/views/includes/header.php";?>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 d-flex align-items-center" id="conteudo">
                <div >
                    <h1>Ops, serviço indisponível no momento!</h1>
                    <h2>Tente novamente mais tarde!</h2>
                    <img src="img/error.jpg" style="width: 200px;">
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>