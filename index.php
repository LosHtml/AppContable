<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Cabeza e incio del proyecto -->
        <title>Contable</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Tipo de imagen de fondo si es jpg o png especificar y luego si subirla en la ubicación-->
        <link rel="icon" type="image/png" href="   ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="Shortcut Icon" type="image/x-icon" href=" ">
        <link rel="stylesheet" href="public/css/login.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    </head>
    <!-- Imagen de fondo del proyecto también buscar y especificar ruta-->
    <body>
        <div class="container">

        <div class="form-content">
        <form action="config/sqlLogin.php" method="POST" autocomplete="off" class="login-form">
                <img class="login-logo" src="public/img/logo.png" alt="" width="100">
                <fieldset>
                    <label for="nameField">Usuario</label>
                    <input type="text" name="usuario" placeholder="Usuario o @email" id="nameField">
                    <label for="passField">Contraseña</label>
                    <input type="password" name="pass" placeholder="************" id="passField">
                    <input type="submit" class="button-primary" value="Iniciar Sesion">
                </fieldset>

                    <p style="font-size: 13px;text-align: center;"><em>Todos los derechos reservados &copy; 2020</em></p>

            </form>
        </div>
        </div>
    </body>
    </html>
