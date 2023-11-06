<?php
if(!empty($_POST["registro"])) {
    if(empty($_POST["correo"]) or empty($_POST["password"]) or empty($_POST["nombre1"]) or empty($_POST["nombre2"]) or empty($_POST["aPaterno"]) or empty($_POST["aMaterno"]) or empty($_POST["IdDireccion"]) or empty($_POST["IdTelefono"])) {
        echo'<div id="error">Uno de los campos esta vacio</div>';
    } 
    else {
        $usuario=$_POST['correo'];
        $contraseña=$_POST['password'];
        $nombre=$_POST['nombre1'];
        $nombre2=$_POST['nombre2'];
        $amaterno=$_POST['aPaterno'];
        $apaterno=$_POST['aMaterno'];
        $direccion=$_POST['IdDireccion'];
        $telefono=$_POST['IdTelefono'];
        $sql=$conexion->query("insert into t_usuarios(correo,password,nombre1,nombre2,aPaterno,aMaterno,IdDireccion,IdTelefono) values ('$usuario','$contraseña','$nombre','$nombre2','$amaterno','$apaterno','$direccion','$telefono') ");
        if ($sql==1) {
            echo'<div class="correcto">Usuario registrado correctamente</div>';
        } else {
            echo'<div id="error">Usuario no registrado</div>';
             } 
    }
    
    
    }
?>