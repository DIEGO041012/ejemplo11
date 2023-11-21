<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo11</title>
    <link rel="stylesheet" href="./ejemplo.css">
</head>
<body>


<form method="post">

            <div class="logo">
        <img src="./img/logo_dan-removebg-preview.png" alt="">
        </div>
        <p>inicia tu registro</p>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="nombre">
            <img class="input-icon" src="./img/facebookicono.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="telefono">
            <img class="input-icon" src="./img/correoicono.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="correo">
            <img class="input-icon" src="./img/correoicono.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="contraseña">
            <img class="input-icon" src="./img/correoicono.png" alt="">
        </div>
        <input class="btn" type="submit"name="register" value="Enviar">

</form>
<?php
   include ("registro.php"); 
 ?>
</body>
</html>