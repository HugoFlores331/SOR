<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="css/rUsuarios.css">
    </head>

    <body>

        <?php
            include('header.php');
        ?>

        <section>

            <img src="icon/log.png" alt="">
            <div class="fm-usr">
                <input type="text" name="name" id="name" placeholder="Nombres">
            </div>

            <div class="fm-usr">
                <input type="text" name="apellido  " id="apellido" placeholder="Apellidos">
            </div>

            <div class="fm-usr">
                <input type="number" name="telefono" id="telefono" placeholder="Telefono">
            </div>

            <div class="fm-usr">
                <input type="email" name="correo" id="correo" placeholder="Correo electronico">
            </div>

            <div class="fm-usr">
                <input type="password" name="ps-1" id="ps-1" placeholder="Contraseña">
            </div>

            <div class="fm-usr">
                <input type="password" name="ps-2" id="ps-2" placeholder="Confirmar contraseña">
            </div>

            <div class="fm-usr">
                <button>Registrar</button>
            </div>

        </section>

        <?php
            include('footer.php');
        ?>
    </body>
</html>