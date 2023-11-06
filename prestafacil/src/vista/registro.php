<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="../controlador/bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../controlador/bootstrap/css/style.css" />
</head>
<body id="body3">

    <form method="post" id="registro">
      <H2 class="titulo"> REGISTRAR USUARIO</H2>
      <?php
      include("../modelo/conexionPDO.php");
      include("../controlador/registrar.php");
      ?>
        <div>
          <label for="">correo</label>
          <input type="email" name="correo">
        </div>
        <div>
          <label for=""> Contraseña</label>
          <input type="password" name="password">
        </div>
        <div>
          <label for=""> Nombre 1</label>
          <input type="text" name="nombre1">
        </div>
        <div>
          <label for=""> Nombre 2</label>
          <input type="text" name="nombre2">
        </div>
        <div>
          <label for=""> Apellido Paterno</label>
          <input type="text" name="aPaterno">
        </div>
        <div>
          <label for=""> Apellido Materno</label>
          <input type="text" name="aMaterno">
        </div>
        <div>
          <label for=""> Direccion</label>
          <input type="text" name="IdDireccion">
        </div>
        <div>
          <label for=""> Telefono</label>
          <input type="text" name="IdTelefono">
        </div>      
        <div>
          <input class="bg-primary-subtle" type="submit" value="Registrar" name="registro">
          <a href="login.php">Salir</a>
        </div>


      
    </form>
    
    <script src="/src/controlador/bootstrap/js/bootstrap.min.js"></script>
</body>
  
</html>