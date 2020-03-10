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


</head>

<!-- Imagen de fondo del proyecto también buscar y especificar ruta-->
<body class="full-cover-background" style="background-image:url(     );">
    <div class="form-container">
        <p class="text-center" style="margin-top: 40px;">
          <h4 class="text-center all-tittles" style="margin-bottom: 60px;"><font size="6" face="Algerian">INICIA SESIÓN</font></h4>
       </p>
             <!-- Conexión a la base de datos-->
             <form action="config\sqlLogin.php" method="POST">

            <div class="group-material-login">
              <!-- Si se fijan en conexión1.php se darán cuenta que name="Usuario" y name "pass" Son los
              que definimos al usarlos para invocarlos -->
              <input type="text" class="material-login-control" name="usuario" required="" maxlength="99">
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
              
            <button class="btn-login" type="submit">Iniciar Sesion</button>
            </form>      
        
            
          </a>
    </div>  
</body>
</html>

