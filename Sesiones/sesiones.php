<?php
    session_start(); 
    if ($_SERVER['REQUEST_METHOD']=='POST') { 
        $_SESSION['mensaje']=$_POST['mensaje']; 
        $_SESSION['autorizado']=$_POST['autorizado'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <form method="post" action="sesiones.php"> 
        <label for="usuario">Usuario: </label>
        <select name="usuario" id="usuario">
            <option value="kjsolis1">kjsolis1</option>
            <option value="mponce2">mponce2</option>
            <option value="rzambrano">rzambrano</option>
        </select>
        <br><br>
        <label for="mensaje">Mensaje: </label>
        <textarea name="mensaje" id="mensaje"></textarea>
        <br><br>
        <label for="autorizado">Usuario: </label>
        <select name="autorizado" id="autorizado">
            <option value="confirmado">confirmado</option>
            <option value="negado">negado</option>
        </select>
        <br><br>
        <input type="submit" value="Guardar Preferencias"> 
    </form>
    <br><br>
    <a href="mostrar_preferencia.php">Mostrar Preferencias</a> 
</body>
</html>