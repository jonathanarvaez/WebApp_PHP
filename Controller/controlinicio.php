<?php

include_once './View/funcView.php';
//Los nombres de los controladores empiezan por control+NombreControl
//Los nombres de las funciones del controlador empiezan por NombreControl+NombreFuncion
//Es asi como en este caso el controlador de inicio se llama controlInicio (control+inicio)
//Una funcion que se quiera llamar esqueleto se llamaria inicioEsqueleto (inicio+Esqueleto)
//Los nombres compuestos ayudan en ubiacion, estructura y seguridad.

function inicioEsqueleto()
{
    inicio();
    head();
    body();
    fin();
}
