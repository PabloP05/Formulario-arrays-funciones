<?php


//comprovacion de que el campo nombre y pasword contengan datos 
if(!empty($_GET['nombre'])){
    echo "<h2>nombre :".$_GET['nombre']."</h2>";
}else{
     echo "<h2>nombre : vacio";
}

if(!empty($_GET['pasword'])){
    echo "<h2>clave :".$_GET['pasword']."</h2>";
}else{
     echo "<h2>clave : vacio";
}

if(isset($_GET['genero'])){
    echo "<h2>Genero : ".$_GET['genero']."</h2>";
}
else{
    echo "<h2>Genero : prefiero no decirlo</2>";
}

if(isset($_GET['interes'])){
    echo "<h2>Intereses : </h2>";
    foreach ($_GET['interes'] as $value) {
       echo $value;
    }
}else{
    echo "<h2>Intereses : No especificado</h2>";
}

?>