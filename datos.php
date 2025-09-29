<?php
// estos arrrays actuan como si fuesen la base de datos para poder coger los datos 

    function reellenarCheckbox(){
        $intereses=[
            "sostenibilidad" => "usos sostenibles en el clima",
            "usabilidad" => "usar materiales reciclables",
            "electricidad" => "uso de energias renobables"
        ];
        return $intereses;
    }

    function rellenarSelectArray(){
        $pais = [
            "España","china","italia","japon","croacia","alemania","chile"
        ];
        return $pais;
    }  
?>