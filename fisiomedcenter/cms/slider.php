<!DOCTYPE html>
  <html>
    <head>
    <title>FisioMedCenter &#8211; Rehabilitación Fisioterapia y Terapia Ocupacional</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name='robots' content='noindex,follow' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="icon" type="image/icon" href="../../img/favicon.ico" />
      <!--Import Google Icon Font & Montserrat-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="../../css/materialize.css" media="screen,projection">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a href="main.php" class="brand-logo"><img src="../../img/cropped-logo.png"></a>
        <ul class="right hide-on-med-and-down">
            <li class="active"><a href="slider.php">Slider</a></li>
            <li><a href="eventos.php">Eventos/Promociones</a></li>
            <li><a href="blog.php">Blog</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
    <h3>EDITOR DE SLIDER</h3>
        <div class="row">
            <div class="col l12">
                <br>
                <p>Imágenes .jpg, .jpeg, .png con resolución de 1366 x 600.</p>
                <form id="sliderForm" name="sliderForm" action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST" enctype="multipart/form-data">
                <div class="file-field input-field">
                    <div class="btn blue">
                        <i class="material-icons">cloud_upload</i>
                        <input type="file" name="userfile" size="20">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light blue right" type="submit" name="action">ENVIAR
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../../js/bin/materialize.min.js"></script>
      <script src="../../js/init.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </body>
  </html>