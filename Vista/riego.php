<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Riego</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/encabezados.css">
        <link rel="stylesheet" href="css/riego.css">

        
    </head>

    <body>
        
        <?php
            include('header.php');
        ?>
        
        <section>
            <div class="co"> 
                <div class="form-check form-switch d-flex align-items-center">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Luz Ultravioleta</label>
                    <input class="form-check-input ms-3" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                </div>      
            </div>

            <div class="co">
                <label for="text">Tiempo luz ultravioleta</label>
                    <input type="time" name="l_time" id="l_time" placeholder="-">
            </div>

            <div class="co">
                <div class="form-check form-switch d-flex align-items-center">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Riego</label>
                    <input class="form-check-input ms-3" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                </div>
            </div>

            <div class="co">
                <label for="text">Tiempo de Riego</label>
                    <input type="time" name="r_time" id="r_time" placeholder="-">
            </div>

            <div class="co">
                <div class="form-check form-switch d-flex align-items-center">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Automatizacion</label>
                    <input class="form-check-input ms-1" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                </div>
            </div>

            <div class="co">
                <button type="button">Realizar</button>
            </div>
        </section>

        <?php
            include('footer.php');
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>