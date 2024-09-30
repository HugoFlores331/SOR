<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['user'];
        $password = $_POST['password'];

        if ($user == "admin" && $password == "12345") {
            header("Location:../Vista/contenido.php");
            exit();
        } else {
            echo "Usuario o contraseña incorrectos.";
            include '../../index.php';
        }
    } else {
        echo "No se recibieron datos.";
    }
?>