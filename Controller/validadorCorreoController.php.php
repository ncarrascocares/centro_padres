<?php

class Validador{

    //funcion para ecorrer un correo y buscar caracteres obligatorios d eun correo
    function validaCorreo($correo){
        $arroba = 0;
        $punto = 0;
        $estado_correo ='no_valido';
        for($i=0; $i <= strlen($correo); $i++){
            if ($correo[$i] == '@') {
                $arroba++;
            }
            if ($correo[$i] == '.') {
                $punto++;
            }
        }

        if($arroba = 1 && $punto > 0){
            $estado_correo = 'correo-valido';
        }
        return $estado_correo;
    }


}


?>