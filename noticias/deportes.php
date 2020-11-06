<?php
date_default_timezone_set('America/Mexico_city');
$fecha=date("d-m-Y H:i:s");
$fecha;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes</title>
    <link rel="stylesheet" href="estilo.css" >
</head>
<body>
    <div class="wrapper">
    <div class="cuadro">
        <ul>
            <li>
                <div class="noticia">
                    <div class="texto">
                        <h1>noticia</h1>
                        <p>texto de la noticia</p>
                         </div>
                        <div class="img">
                            <img src="../imagenes/img1.jpg" alt="">
                        </div>
                </div>
            </li>
            <li>
                <div class="noticia">
                    <div class="texto">
                        <h1>noticia</h1>
                        <p>texto de la noticia</p>
                         </div>
                        <div class="img">
                            <img src="../imagenes/img1.jpg" alt="">
                        </div>
                </div>
            </li>
            <li>
                <div class="noticia">
                    <div class="texto">
                        <h1>noticia</h1>
                        <p>texto de la noticia</p>
                         </div>
                        <div class="img">
                            <img src="../imagenes/img1.jpg" alt="">
                        </div>
                </div>
            </li>
            <li>
                <div class="noticia">
                    <div class="texto">
                        <h1>noticia</h1>
                        <p>texto de la noticia</p>
                         </div>
                        <div class="img">
                            <img src="../imagenes/img1.jpg" alt="">
                        </div>
                </div>
            </li>
            <li>
                <div class="noticia">
                    <div class="texto">
                        <h1>noticia</h1>
                        <p>texto de la noticia</p>
                         </div>
                        <div class="img">
                            <img src="../imagenes/img1.jpg" alt="">
                        </div>
                </div>
            </li>
        </ul>
        
        <div class="regreso">
            <a href="../index.php">Regresar</a>
        </div >
        <div class="fecha">
            <p><?php echo $fecha?></p>
        </div>
        

    </div> 
</div>
    
</body>
</html>