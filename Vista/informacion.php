<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informacion</title>
        <link rel="stylesheet" href="css/encabezados.css">
        <link rel="stylesheet" href="css/informacion.css">
    </head>

    <body>
        
        <?php 
            include('header.php');
        ?>

        <section class="s_humedad">
            <table>
                <caption>Sensores de humedad</caption>
                <tr>
                    <th>Planta Alta</th>
                    <th>Planta Media</th>
                    <th>Planta Baja</th>
                </tr>

                <tr>
                    <td>1n°</td>
                    <td>2n°</td>
                    <td>3n°</td>
                </tr>
               
            </table>
        </section>

        <section class="o_sensores">
            <table>
                <caption>Otros sensores</caption>
                <tr>
                    <th>Lluvia</th>
                    <th>Temperatura Ambiental</th>
                    <th>Sensibilidad de luz</th>
                    <th>% de Bateria</th>
                </tr>

                <tr>
                    <td>Desactivado</td>
                    <td>ta°</td>
                    <td>4252</td>
                    <td>0%</td>
                </tr>

            </table>
        </section>

        <section class="funcionalidades">
            <table>
                <caption>Funcionalidad</caption>
                <tr>
                    <th>Riego</th>
                    <th>Luces ultravioleta</th>
                    <th>Energia</th>
                    <th>Automatizacion</th>
                </tr>

                <tr>
                    <td>No funcionando</td>
                    <td>Apagadas</td>
                    <td>Solar/Electrodomestica/Bateria</td>
                    <td>Activada</td>
                </tr>
            </table>
        </section>

        <?php
            include('footer.php');
        ?>
    </body>
</html>