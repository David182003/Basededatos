<?php 
    include("conexion.php");
    if(isset($_POST['register'])){
        if(
            strlen($_POST['name'])>= 1 &&
            strlen($_POST['email'])>= 1 &&
            strlen($_POST['directión'])>= 1 &&
            strlen($_POST['phone'])>= 1 &&
            strlen($_POST['password'])>= 1 
            ){
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $directión = trim($_POST['directión']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre,email,dirección,telefono,contraseña,fecha)
                VALUES('$name','$email','$directión','$phone','$password','$fecha')";
            $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    ?>
                        <h3 class="success">Tu Reguistro se a Completado</h3>
                    <?php
                }else{
                    ?>
                        <h3 class="error">Ocurrio Un Error</h3>
                    <?php
                }
            }else{
                ?>
                    <h3 class="error">Llena todos los campos</h3>
                <?php
            }
    }
?>
