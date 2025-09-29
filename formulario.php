<?php
    //require hace obligatorio que exista y cargure el archivo 
    require_once "datos.php";
//rellenamos los array cargandolos desde la función que tenemos dentro de un archivo que imit la busqueda en BD 
     $intereses= reellenarCheckbox();
    $paises = rellenarSelectArray();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario deinamico</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>
<form action="info.php" method="get">
    
    <!-- Usuario y contraseña -->
    <label for="usuario">Nombre de usuario:</label><br>
    <input type="text" id="usuario" name="usuario"><br><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <!-- Género -->
    <p>Género:</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">Masculino</label><br>
    <input type="radio" id="femenino" name="genero" value="femenino">
    <label for="femenino">Femenino</label><br><br>

    
    <!-- Intereses relacionados con el cambio climático -->
    <p>¿Qué temas te interesan?</p>
    <!--Los bloques de echo son los unicos que no se cambian en la vista, se mantienen siempre-->
    <?php
        foreach ($intereses as $clave => $value) {
            echo '<input type="checkbox" value="'.$clave.'" name="interes[]" id="'.$clave.'">';
            echo '<label for="'.$clave.'">'.$value.'</label><br>';
        }
    ?>


    <p>Nacionalidad</p>
    <select name="paises" id="" required>
        <?php
            foreach ($paises as $valor) {
                echo '<option value="'.$valor.'">'.$valor.'</option>';
            }
        ?>
    </select>


    <!-- Aceptación de políticas -->
    <input type="checkbox" id="politicas" name="politicas" required>
    <label for="politicas">Estoy de acuerdo con las políticas de privacidad y uso</label><br><br>

    <input type="submit" value="Registrarse">
    <input type="reset" value="Reiniciar formulario">
  </form>
</body>
</html>