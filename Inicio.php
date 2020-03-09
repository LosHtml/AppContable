<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Cabeza e incio del proyecto -->
    <title>"Nombre del proyecto"</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tipo de imagen de fondo si es jpg o png especificar y luego si subirla en la ubicación-->
  <link rel="icon" type="image/png" href="   " />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href=" " />


    <!--
    <script src="js+/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css+/sweet-alert.css">
    <link rel="stylesheet" href="css+/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css+/normalize.css">
    <link rel="stylesheet" href="css+/bootstrap.min.css">
    <link rel="stylesheet" href="css+/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css+/style.css">
    <link rel="stylesheet" href="css+/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js+/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js+/modernizr.js"></script>
    <script src="js+/bootstrap.min.js"></script>
    <script src="js+/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js+/main.js"></script>

-->
</head>

<!-- Imagen de fondo del proyecto también buscar y especificar ruta-->
<body class="full-cover-background" style="background-image:url(     );">
    <div class="form-container">
        <p class="text-center" style="margin-top: 40px;">
          <h4 class="text-center all-tittles" style="margin-bottom: 60px;"><font size="6" face="Algerian">INICIA SESIÓN</font></h4>
       </p>
             <!-- Conexión a la base de datos-->
             <form action="Conexion1.php" method="POST">

            <div class="group-material-login">
              <!-- Si se fijan en conexión1.php se darán cuenta que name="Usuario" y name "pass" Son los
              que definimos al usarlos para invocarlos -->
              <input type="text" class="material-login-control" name="usuario" name="email" required="" maxlength="99">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class=""></i> &nbsp; Usuario</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" name="pass" required="" maxlength="99">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class=""></i> &nbsp; Contraseña</label>
            </div>
            <br>
            <br>
              
            <button class="btn-login" type="submit"><font face="Showcard Gothic" color="00FFFB">Iniciar<i class=""></i></form></button>      
        
            
          </a>
    </div>  
</body>
</html>

