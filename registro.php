<?php
   include ("conexion.php");
   
   if(isset($_POST['register'])){ 
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 
        ) {

            $name = trim($_POST['name']);
            $phone = trim($_POST['phone']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $fecha = date('d/m/y');
            $consulta = "INSERT INTO datos(nombre, telefono, email, contraseña, fecha)
            VALUES('$name', '$phone', '$email', '$password','$fecha')";

            $resultado = mysqli_query($conex,$consulta);
            if($resultado) {
             ?>
             <h3 class="success">Tu registro se a completado</h3>
             <?php 
            } else { 
               ?>
             <h3 class="error">Ocurrio un error</h3>
            <?php
            }
             } else {
                  
            ?>
             <h3 class="error">Llena los campos</h3>
                  
           <?php
         }
    }
   
 
 ?>