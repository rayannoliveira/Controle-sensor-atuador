<?php

	//Chamada ao servico REST
	//URL de servico
	//Aqui indicamos a URL que iremos utilizar para acessar o serviço
	$url = "http://192.168.0.31:8080/TemperatureController/properties/temperature";
	//Inicializa cURL para uma URL.
	//Prepara o CURL para criar um conexao que será estabelecida entre a nossa aplicação e o nosso serviço
    $ch = curl_init($url);
	//Marca que vai receber string
	//Existem várias opções de setup, aqui será utilizado apenas que iremos receber uma string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//Inicia a conexão
	//Dispara a nossa solicitação, é como se tivessemos dando enter na barra de endereços do navegador
    $resposta = curl_exec($ch);
	//Fecha a conexão
	//Após receber os dados, fechamos a conexao
    curl_close($ch);
	//Usando a decodificação em JSON
	//A forma do PHP trabalhar com JSON é muito simples
	//Ele transforma os dados recebidos em um objeto ou em uma lista de objetos
    $meuobjeto = json_decode($resposta);
    echo($meuobjeto);
	//Imprime o resultado
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>condominio</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arapey">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
        <div class="container"><a class="navbar-brand" href="index.php">HOME</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="lampada.php" style="color: #ffffff;">LAMPADA</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="portao.php" style="color: #ffffff;">Portao</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center" data-aos="fade-left" style="width: 322px;margin-top: 174px;"><img src="assets/img/temperatura%20logo.png" style="width: 270px;"><strong class="text-right"><?php $conversion =  number_format($meuobjeto,1); echo ($conversion . "°C"); ?></strong></div>
    <script
        src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="assets/js/script.min.js"></script>
</body>

</html>