<?php
    session_start(); 
    if (isset($_SESSION['usuario']) && isset($_SESSION['mensaje']) && isset($_SESSION['autorizado'])) {
        echo '<div class="session-info">';
        echo '<p>El usuario es: ' . $_SESSION['usuario'] . '</p>';
        echo '<p>El mensaje guardado es: ' . $_SESSION['mensaje'] . '</p>';
        echo '<p>Su autorizacion: ' . $_SESSION['autorizado'] . '</p>';
    }else{
        echo '<div class="session-info"><p>No se han guardado preferencias</p></div>';
    }


    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: sesiones.php");
        exit();
    }

?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
    </head>

    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" name="logout">Cerrar Sesión</button>
        </form>
    </body>
</html>