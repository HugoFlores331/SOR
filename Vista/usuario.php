<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mUsuarios.css">
    <title>Usuarios</title>
</head>

<body>
    
    <?php 
        include('header.php');
    ?>

    <section>
        
            <h1>Usuarios</h1>

        <div class="us-cnt">
            <a href="rUsuarios.php">
                <p>Agregar usuarios</p>
                <img src="img/a-usuario.png" >
            </a>
        </div>

        <div class="us-cnt">
            <a href="iUsuarios.php">
                <p>Lista de usuarios</p>
                <img src="img/l-usuarios.png">
            </a>
        </div>

    </section>

    <?php
        include('footer.php');
    ?>
</body>
</html>