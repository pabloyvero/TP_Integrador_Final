<?php
            
            echo "Lista de inscriptos";
        

            var_dump($_POST);

    //conexion

    $conexion = mysqli_connect("localhost", "root", "","empresacac");

    if(mysqli_connect_errno()){
        echo "Error de conexion" ;
    }
    else{
        //echo "Conecto";
    

        //consultas
        $query = "Select * from oradores";
        $consultas = mysqli_query($conexion, $query);

        //var_dump($consultas);
        
        //$listado = mysqli_fetch_array($consultas);

        //var_dump($listado);

        //var_dump($listado[3]['nombre']);

        while ($listadoarray = mysqli_fetch_array($consultas)){
            //echo "probando la cantidad";
            echo $listadoarray['nombre'] . " " . $listadoarray['apellido'];
            echo "<br>";
        }
    }
    ?>