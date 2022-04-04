<?php
require_once "../controlador/controlador.usuarios.php";
//Proceso para llenar la tabla con datos de los usuario de la BDD
$usuario = ControladorUsuarios::contrConsultaUsuarios();
if(empty($usuario)){
    echo "No hay registro de usuario</td>";
}
?>
<html>

<head>
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center">Lista de Usuarios</h1>
    
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cédula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Usuario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuario as $fila => $columna): ?>
            <tr>
                
                <td><?php echo $columna["id_usuario"]?></td>
                <td><?php echo $columna["cedula"]?></td>
                <td><?php echo $columna["nombre"]?></td>
                <td><?php echo $columna["apellido"]?></td>
                <td><?php echo $columna["usuario"]?></td>
                <td>
                    <div class= "btn-group">
                        <button type="button" class="btn btn-warning">Actualizar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>