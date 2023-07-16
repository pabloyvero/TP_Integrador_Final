<?php

$conex = mysqli_connect("localhost", "root", "", "oradores");

if(isset($_post['register'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        //strlen($_POST['email']) >= 1 && 
        strlen($_POST['memo']) >= 1
        ) {
            $name = trim($_post['nombre']);
            $apellido = trim($_post['apellido']);
            //$correo = trim($_post['email']);
            $memo = trim($_post['memo']);
            $consulta = "INSERT INTO oradores(nombre, apellido, memo)
                VALUES ('$name', '$apellido', '$memo')";
                $resultado=mysqli_query($conex, $consulta);
                if ($resultado) {
                ?>
                <h3 class="succes" >TU REGISTRO SE A COMPLETADO!</h3>
                <?php
                } else {
                ?>
                <h3 class="error">ocurrio un error</h3>
                <?php
                }
                }else {
                ?>
                <h3 class="error">llena todos los campos</h3>
                <?php
                }
            }
?>