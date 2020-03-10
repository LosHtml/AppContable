<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido</title>
</head>
<body>

    <div class="form-container">
        <p class="text-center" style="margin-top: 40px;">
            <h4 class="text-center all-tittles" style="margin-bottom: 60px;">
                <font size="6" face="Algerian">INICIA SESIÓN</font>
            </h4>
        </p>
        <!-- Consultas a la base de datos -->
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


            <button class="btn-login" type="submit">Iniciar sesion</button>
               
        </form>

    </div>
</body>
</html>