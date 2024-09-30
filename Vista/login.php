<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/rlogin.css">
</head>

<body>
    <section>
        <div class="title">
            <h1>Sistema de Riego</h1>
        </div>

        <img src="icon/log.png" alt="">

        <form action="../Modelo/M_login.php" method="post">
            <div class="cnt-lgs">
                <input type="text" name="user" id="user" placeholder="Ingrese su usuario" required>
            </div>

            <div class="cnt-lgs">
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
            </div>

            <nav>
                <button type="submit">Ingresar</button> 
            </nav>
        </form>
    </section>
</body>
</html>