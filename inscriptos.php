<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Base de Datos</title>
</head>
<body>
    <div>
        <h1>Oradores Inscriptos</h1>
        <?php
            //echo "Lista de inscriptos";
        

            //var_dump($_POST);

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
        ?>
            <table class="table table-bordered border-primary">
                <tr class="table-info">
                    <th class="table-info">Nombre</th>
                    <th class="table-info">Apellido</th>
                    <th class="table-info">Observaciones</th>
                </tr>

            <?php
        while ($listadoarray = mysqli_fetch_array($consultas)){
            //echo "probando la cantidad";
            ?>
                <tr class="table-info">
                    <th class="table-info">
            <?php
                echo $listadoarray['nombre'];
            ?>
                    </th>
                    <th class="table-info">
            <?php
                echo $listadoarray['apellido'];    
            ?>
                    </th>
                    <th class="table-info">
            <?php
                echo $listadoarray['memo'];        
            ?>
                    </th>
                </tr>
            <?php
        }
    }
        ?>
            </table>
    </div>    
</body>
</html>


