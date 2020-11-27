<?php
require_once "../App/Controllers/PrevisaoController.php";
$previsao  = new PrevisaoController();
$previsao->resultPrevisao();
$prevAtual = $previsao->getPrevAtual();
$prevProx  = $previsao->getPrevProx();
$icon      = $previsao->getIcon();
?>

<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- weather-icons CSS -->
    <link rel="stylesheet" href="css/weather-icons.min.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
    crossorigin="anonymous">
    <!--CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <title>Previsão do tempo</title>
  </head>
  <body>
  <?php require_once "../App/views/includes/header.php";?>
    <!-- inicio secion 1 -->
    <section>
        <div class="container-fluid" id="section1">
            <div class="row ">
                <div class="col-md-8 col-xm-12 color-section-1">
                    <div class="row">
                        <div class="col-6 color-section-1 ">
                            <div class="float-right ">
                                <i class="<?=$icon?> icon-clima float-right"></i>
                                <div class="">
                                    <p><?= $prevAtual->description?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 color-section-1" >
                            <h1 id="temperatura"><?= $prevAtual->temp ?>°</h1>
                            <h2 id="cidade" ><?= $prevAtual->city ?></h2>
                            <p id="atualizado">Atualizado há poucos segundos</p>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4 col-xm-12 color-section-1" id="info-sec1">
                    <div class="row">
                        <div class="col-6 col-md-12 ">
                            <i class="wi wi-thermometer mr-3"></i><?= $prevAtual->temp ?>°C 
                        </div>
                        <div class="col-6 col-md-12">
                            <i class="wi wi-humidity mr-3"></i><?= $prevAtual->humidity?>% UR
                        </div>
                        <div class="col-6 col-md-12">
                            <i class="wi wi-strong-wind mr-1"></i> <?= $prevAtual->wind_speedy?>

                        </div>
                        <div class="col-6 col-md-12">
                            <i class="wi wi-time-4 mr-3"></i>Consulta: <?= $prevAtual->time ?>

                        </div>
                        <div class="col-6 col-md-12">
                            <i class="wi wi-sunrise mr-1"></i> Nascer do sol: <?= $prevAtual->sunrise  ?>

                        </div> 
                        <div class="col-6 col-md-12">
                            <i class="wi wi-sunset mr-2"></i>  Pôr do sol: <?= $prevAtual->sunset   ?>

                        </div>       
                    </div>
                </div>
            </div>
        </div>
    <!-- fim section 1 -->    
    </section>
    <!-- inicio section 2 -->
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4" id="titulo-sec2">
                    <h2 class="bar-titulo"> Previsão para póximos dias</h2>
                </div>
                <?php
                    $i=0;
                    foreach($prevProx as $key => $value ){
                        if($i <= 7){        
                ?>

                <div class="col-md-3  mb-5">
                    <div class="card shadow rounded">
                        <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $prevProx[$i]->weekday." ".$prevProx[$i]->date;?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $prevProx[$i]->description; ?></h6>
                        <p class="card-text">
                            <i class="<?=$icon = $previsao->descricaoParaIcon($prevProx[$i]->description); ?> icon-clima-card"></i>
                        </p>
                        <samp class="text-danger temp-max-min">
                            <i class="wi wi-thermometer "></i><?= $prevProx[$i]->max; ?>°C Max
                        </samp>
                        <samp style="float: right;" class="text-primary temp-max-min">
                            <i class="wi wi-thermometer-exterior" ></i><?= $prevProx[$i]->min; ?>°C Min
                        </samp>
                    </div>
                </div>
            </div>
                <?php      
                        }
                        $i++;    
                    }
                ?>
                
        </div>
    </div>
    <!-- fim section 2-->
    </section>
    <?php require_once "../App/views/includes/footer.php"; ?>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>