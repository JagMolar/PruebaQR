<?php
require('vendor/autoload.php')
 ?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">
<head>
    <title>Prueba QR</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Meta -->
    <meta name="keywords" content="" />
    <meta name="author" content="Juan A. García Muelas-Jag Molar">
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico.png">
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- stylesheets -->
    <link rel="stylesheet"   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/ajax_generate_code.js"></script>
</head>
<body>
    <div class="container" style="min-height:500px;">
        <div class="container">
            <div class="row">
                <h2>Ofrece tu menú o carta con un sencillo código QR</h2>
            </div>
            <div class="col-md-9" id="descrip">
                <p>
                Desde ahora puedes ofrecer tus servicios mediante cómodos códigos QR, que facilitarán tu comunicación 
                con tus clientes, a la vez que se minimiza el contacto físico, aportando además una mayor sensación de seguridad.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h2>Fácil y rápido de crear</h2>
            </div>
            <div class="col-md-9" id="descrip">
                <ul>
                    <li>Puedes crearlo a través de tu Google Drive u otro almacenamiento en la nube que tengas.
                        Sólo tienes que copiar y pegar el enlace para crear tu QR.
                    </li>
                    <!-- <li>Funciona tanto con imágenes como con PDF</li> -->
                    <li>
                        Captura con tu móvil la imagen y compártela desde aquí.
                    </li>
                </ul>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <h2>Generar código QR</h2>
            </div>
            <!-- <div class="col-md-3">
                <form class="form-horizontal" action="generate_code.php" method="post" id="fileForm" enctype="multipart/form-data">
                </form>
            </div> -->
            

            <div class="col-md-3">
                <form class="form-horizontal" action="" method="post" id="codeForm" onSubmit="return false" >
                    <div class="form-group">
                        <!-- <h6>Opción 2 mediante enlace</h6> -->
                        <p>
                            <label class="control-label">Copia aquí tu enlace: </label>
                            <input class="form-control col-xs-1" id="content" type="text" >               
                        </p>
                    </div>

                    <div class="form-group">
                        <p>
                            <label class="control-label">Nivel del código (ECC): </label>
                            <select class="form-control col-xs-10" id="ecc">
                                <option value="H">H - Mayor calidad</option>
                                <option value="M">M</option>
                                <option value="Q">Q</option>
                                <option value="L">L - Peor resolución</option>
                            </select>               
                        </p>
                    </div>
                    <div class="form-group">
                        <p>
                            <label class="control-label">Tamaño: </label>
                            <input class="form-control col-xs-10" id="size" type="number" step="1" min="1" max="10" value="5">               
                        </p>
                    </div>
                    <div class="form-group">
                        <p>
                            <label class="control-label"></label>
                            <input class="btn btn-sucess" id="submit" name="submit" type="submit" value="Generar código QR">               
                        </p>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="showQRCode"></div>
            </div>
            <div class="insert-post-ads1" style="margin-top:20px;"></div>
        </div>
    </div>
</body>
</html>