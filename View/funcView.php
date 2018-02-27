<?php

function inicio()
{
    echo 
    '<html>
        <head>
            <meta charset="ISO-8859-1">
            <title>EnLinea&#174; PWA</title>
            <link rel="manifest" href="manifest.json">
            <meta name="theme-color" content="#0D47A1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" href="Images/favicon.ico" type="image/x-icon"/>
             <!-- Hojas de Estilo (BEGIN) -->
            <link href="StyleSkin/fontawesome.css" rel="stylesheet" />
            <link href="StyleSkin/StyleSkin.css" rel="stylesheet" type="text/css" />

            <!-- Hoja de Estilo (END) -->
        </head>
        <body>';
}


function barraTop()
{
    echo '
    <!-- BARRA SUPERIOR (BEGIN) -->
    <div id="N0BarraTop" class="barraTop-Div">
        <table id="N0BarraTop-Tabla" class="barraTop-Table">
            <tr>
                <td class="barraTop-Table-Menu-s barraTop-Table-Menu-m barraTop-Table-Menu-f" > <i class="fa fa-bars"></i> </td>
                <td class="barraTop-Table-Menu-s barraTop-Table-Menu-m barraTop-Table-Menu-f" title="Software de Gestion Empresarial"> <img src="Images/logo.png" alt="logo" class="barraTop-logo-s barraTop-logo-m barraTop-logo-f"> </td>
                <td class="barraTop-Table-Titulo-s barraTop-Table-Titulo-m barraTop-Table-Titulo-f">Consulta de pacientes</td>
                <th class="barraTop-Table-Espaciador-s barraTop-Table-Espaciador-m barraTop-Table-Espaciador-f"></th>
                <td class="barraTop-Table-Boton-s barraTop-Table-Boton-m barraTop-Table-Boton-f" title="Cargando..."> <i class="fa fa-spinner fa-pulse fa-3x fa-fw ico-cargando-s ico-cargando-m ico-cargando-f" aria-hidden="true"></i> </td>
                <td class="barraTop-Table-Boton-s barraTop-Table-Boton-m barraTop-Table-Boton-f" title="Mensajes" > <i class="fa fa-bell" aria-hidden="true"></i> </td>
                <td class="barraTop-Table-Boton-s barraTop-Table-Boton-m barraTop-Table-Boton-f" title="Usuario" > <i class="fa fa-user" aria-hidden="true"></i> </td>
            </tr>
        </table>
    </div>
    <!-- BARRA SUPERIOR (END) -->';
}

function cuerpoInicio ()
{
    echo
   '<!--CUERPO DE LA WEB (BEGIN)-->
    <div class="cuerpo-Div cuerpo-Div-s cuerpo-Div-m cuerpo-Div-f"> <!-- cuerpo-Div (BEGIN) -->
        <div class="row"> <!-- row (BEGIN) -->';
    
}

function cuerpoFin(){
    echo
   '        </div> <!-- row (END) -->
        </div> <!-- cuerpo-Div (END) -->
    <!--CUERPO DE LA WEB (BEGIN)-->';
    
}

function menuPrincipal()
{
    $titulo01 = 'Consulta Datos del Paciente ';
    $titulo02 = 'Consulta Datos del Paciente';
    $titulo03 = '';

    $contenido01 = '<ul>
                        <li title="Consultar" class="botonMenu02"><a href="/Download/Certificado.pdf" target="_blank" >Consultar</a></li>
                        <li title="Comprobador" class="botonMenu02">Comprobador</li>
                        <li title="Paciente-Consumos" class="botonMenu02">Paciente-Consumos</li>
                        <li title="Bodega de Datos" class="botonMenu02">Bodega de Datos</li>
                        <li title="Lista de Atencion" class="botonMenu02">Lista de Atencion</li>
                    </ul>';
    $contenido02 = '<p>Datos de Pacientes01</p>
                    <p>Datos de Pacientes02</p>
                    <p>Datos de Pacientes03</p>';
    $contenido03 = '<ul>
                        <li title="Configuración" class="botonMenu01">Configuración</li>
                        <li title="Cuentas por Cobrar" class="botonMenu01">CxC</li>
                        <li title="Ejecución" class="botonMenu01">Ejecución</li>
                        <li title="Compras" class="botonMenu01">Compras</li>
                        <li title="Inventarios" class="botonMenu01">Inventarios</li>
                    </ul>';
    echo '
        <!-- MENU PRINCIPAL (BEGIN) -->
        <div id="N0Menu" class="col-3 col-m-3 menu menuPrincipal-s menuPrincipal-m menuPrincipal-f">
            <table class="menuPrincipal-Tabla">
    ';
    echo 
    '           <tr>
                    <td>
                        <div class="menuPrincipal-Tabla-Titulo">
                            '.$titulo01.'
                       </div>
                        <div class="menuPrincipal-Tabla-OpcVariables">
                            '.$contenido01.'
                        </div>
                    </td>
                </tr>';
    echo
    '           <tr>
                    <td>
                        <div class="menuPrincipal-Tabla-Titulo">
                            '.$titulo02.'
                        </div>
                        <div class="menuPrincipal-Tabla-OpcFijas">
                            '.$contenido02.'
                        </div>
                    </td>
                </tr>';
    echo
    '           <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="menuPrincipal-Tabla-Titulo">
                            '.$titulo03.'
                        </div>
                        <div class="menuPrincipal-Tabla-Sistemas">
                            '.$contenido03.'
                        </div>
                    </td>
                </tr>';
    echo
    '       </table>
        </div>
        <!-- MENU PRINCIPAL (END) -->';
}

function fin()
{
    echo '
        </body>
    </html>';
 }

?>