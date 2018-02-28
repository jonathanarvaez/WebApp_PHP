<?php
/*Esta funcion incluye los metodos para rellenar el menu principal*/

function menuPTitulo01()
{
    echo 'Consulta Datos del Paciente';
}

function menuPContenido01()
{
    echo 
   '<ul>
        <li title="Consultar" class="botonMenu02"><a href="/Download/Certificado.pdf" target="_blank" >Consultar</a></li>
        <li title="Comprobador" class="botonMenu02">Comprobador</li>
        <li title="Paciente-Consumos" class="botonMenu02">Paciente-Consumos</li>
        <li title="Bodega de Datos" class="botonMenu02">Bodega de Datos</li>
        <li title="Lista de Atencion" class="botonMenu02">Lista de Atencion</li>
    </ul>';
    echo'';
}

function menuPTitulo02()
{
    echo 'Consulta Datos del Paciente';
}

function menuPContenido02()
{
    echo 
   '<p>Datos de Pacientes01</p>
    <p>Datos de Pacientes02</p>
    <p>Datos de Pacientes03</p>';
}

function menuPTitulo03()
{
    echo '';
}

function menuPContenido03()
{
    echo 
   '<ul>
        <li title="Configuración" class="botonMenu01">Configuración</li>
        <li title="Cuentas por Cobrar" class="botonMenu01">CxC</li>
        <li title="Ejecución" class="botonMenu01">Ejecución</li>
        <li title="Compras" class="botonMenu01">Compras</li>
        <li title="Inventarios" class="botonMenu01">Inventarios</li>
    </ul>';
}


?>

