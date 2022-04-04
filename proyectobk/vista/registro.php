<?php
require_once "../controlador/controlador.usuarios.php";
//Método para insertar un usuario en la base de datos
if (isset($_POST["ingresar"])) {   //Se activa cuando el usuario da clic en el boton

  $datos = array(
    $_POST["cedula"],
    $_POST["nombre"],
    $_POST["apellido"],
    $_POST["usuario"],
    $_POST["clave"],
    $_POST["id_tusuario"]

  );

  $insertar = ControladorUsuarios::contrInsertarUsuarios($datos);


  if ($insertar == "ok") {
    echo "<script>
        alert('Usuario insertado correctamente...');
       </script>";
  }

  if ($insertar == "error") {
    echo "<script>
        alert('ERROR');
       </script>";
  }
}

?>

<html>

<head>
  <title>Registro de Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>


  
  
  <div class="d-flex justify-content-center text-center">
  
  <form id="frmAgregar" role="form" method="POST" enctype="multipart/form-data">

  <h1 class="bg-info text-center">Registro</h1>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">CÉDULA</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cedula" placeholder="Cédula" required>

    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">NOMBRE</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombre" placeholder="Nombre" required>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">APELLIDO</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="apellido" placeholder="Apellido" required>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">USUARIO</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="usuario" placeholder="Usuario" required>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">CONTRASEÑA</span>
      <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="clave" placeholder="Contraseña"required>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">TIPO DE USUARIO</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id_tusuario" placeholder="Tipo de Usuario" required>
    </div>

    <button type="submit" name="ingresar" class="btn btn-info">Guardar</button>

  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>