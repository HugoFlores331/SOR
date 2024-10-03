<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informacion</title>
        <link rel="stylesheet" href="css/iUsuarios.css">
    </head>

    <body>

        <?php
            include('header.php');
        ?>

        <section>

            <h2>Listado</h2> 

            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Funciones</th>
                </tr>

                <tr>
                    <td>Hugo</td>
                    <td>Flores</td>
                    <td>52730611</td>
                    <td>mralesshug@gmail.com</td>
                    <td>Usuario</td>

                    <td>
                        <div class="imag">
                            <img src="icon/editar.png">
                            <img src="icon/eliminar.png">
                            <img src="icon/recargar.png">
                        </div>
                    </td>
                </tr>
            </table>
        </section>    

        <?php
            include('footer.php');
        ?>
        
    </body>
</html>