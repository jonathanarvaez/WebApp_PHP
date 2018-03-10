<?php
include_once 'funcMenu.php';


//esta funcion incluye los metodos para construccion basica de la web


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
            <link rel="icon" href="Images/IconosEnLinea/ICO/favicon.ico" type="image/x-icon"/>
            <!-- Hojas de Estilo (BEGIN) -->
                <link href="StyleSkin/fontawesome.css" rel="stylesheet" />
                <link href="StyleSkin/StyleSkin.css" rel="stylesheet" type="text/css" />
            <!-- Hoja de Estilo (END) -->
            <!-- Scripts (BEGIN) -->
                <script src="Core/jsEventosClic.js" type="text/javascript"></script>
            <!-- Scripts (END) -->
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
                <td class="barraTop-Table-Menu-s barraTop-Table-Menu-m barraTop-Table-Menu-f" onClick="eventosWebEstatica.prototype.BotonClicEfecto(1,\'N0Menu\', \'N0Auxiliar\',\'N0Contenido\')"> <i class="fa fa-bars"></i> </td>
                <td class="barraTop-Table-Menu-s barraTop-Table-Menu-m barraTop-Table-Menu-f" title="Software de Gestion Empresarial"> <img src="Images/IconosEnLinea/PNG/EnLinea_T_PNG_512.png" alt="Software De Gestion Empresarial" class="barraTop-logo-s barraTop-logo-m barraTop-logo-f"> </td>
                <td class="barraTop-Table-Titulo-s barraTop-Table-Titulo-m barraTop-Table-Titulo-f">Consulta de pacientes</td>
                <th class="barraTop-Table-Espaciador-s barraTop-Table-Espaciador-m barraTop-Table-Espaciador-f"></th>
                <td class="barraTop-Table-Boton-s barraTop-Table-Boton-m barraTop-Table-Boton-f" title="Cargando..."> <i class="fa fa-spinner fa-pulse fa-3x fa-fw ico-cargando-s ico-cargando-m ico-cargando-f" aria-hidden="true"></i> </td>
                <td class="barraTop-Table-Boton-s barraTop-Table-Boton-m barraTop-Table-Boton-f" title="Mensajes" onClick="eventosWebEstatica.prototype.BotonClicEfecto(2,\'N0Menu\', \'N0Auxiliar\',\'N0Contenido\')" > <i class="fa fa-bell" aria-hidden="true"></i> </td>
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
    echo 
       '<!-- MENU PRINCIPAL (BEGIN) -->
        <div id="N0Menu" class="col-3 col-m-3 menu menuPrincipal-s menuPrincipal-m menuPrincipal-f">
            <table class="menuPrincipal-Tabla">
                <tr>
                    <td>
                        <div class="menuPrincipal-Tabla-Titulo">
                            ';
                            menuPTitulo01();
    echo 
                       '</div>
                        <div class="menuPrincipal-Tabla-OpcVariables">
                            ';
                            menuPContenido01();
    echo               
                       '</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="menuPrincipal-Tabla-Titulo">
                            ';
                            menuPTitulo02();
    echo               
                       '</div>
                        <div class="menuPrincipal-Tabla-OpcFijas">
                            ';
                            menuPContenido02();
    echo               
                       '</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="menuPrincipal-Tabla-Titulo">
                            ';
                            menuPTitulo03();
    echo               
                       '</div>
                        <div class="menuPrincipal-Tabla-Sistemas">
                            ';
                            menuPContenido03();
    echo               
                       '</div>
                    </td>
                </tr>
            </table>
        </div>
        <!-- MENU PRINCIPAL (END) -->';
}


function areaContenido()
{
    echo 
   '<!-- ZONA DE CONTENIDO DE LA WEB (BEGIN) -->
    <div id="N0Contenido" class="col-6 col-m-9 cuerpo-Contenido">';
    
    echo 
   '</div>
    <!-- ZONA DE CONTENIDO DE LA WEB (END) -->';
    
}

function areaAuxiliar()
{
    echo 
   '<!-- AREA DE NOTIFICACIONES Y MENSAJES (BEGIN) -->
    <div id="N0Auxiliar" class="col-3 col-m-12 cuerpo-Auxiliar-s cuerpo-Auxiliar-m cuerpo-Auxiliar-f cuerpoAuxiliar" >
     <table class="cuerpoAuxiliar-Tabla">
     <tr><td> <div class="aside">
                        <h2>What?</h2>
                        <p>Chania is a city on the island of Crete.</p>
                        <h2>Where?</h2>
                        <p>Crete is a Greek island in the Mediterranean Sea.</p>
                        <h2>How?</h2>
                        <p>You can reach Chania airport from all over Europe.</p>
                    </div></td></tr><tr><td> <div class="aside">
                        <h2>What?</h2>
                        <p>Chania is a city on the island of Crete.</p>
                        <h2>Where?</h2>
                        <p>Crete is a Greek island in the Mediterranean Sea.</p>
                        <h2>How?</h2>
                        <p>You can reach Chania airport from all over Europe.</p>
                    </div></td></tr><tr><td> <div class="aside">
                        <h2>What?</h2>
                        <p>Chania is a city on the island of Crete.</p>
                        <h2>Where?</h2>
                        <p>Crete is a Greek island in the Mediterranean Sea.</p>
                        <h2>How?</h2>
                        <p>You can reach Chania airport from all over Europe.</p>
                    </div></td></tr><tr><td> <div class="aside">
                        <h2>What?</h2>
                        <p>Chania is a city on the island of Crete.</p>
                        <h2>Where?</h2>
                        <p>Crete is a Greek island in the Mediterranean Sea.</p>
                        <h2>How?</h2>
                        <p>You can reach Chania airport from all over Europe.</p>
                    </div></td></tr><tr><td> <div class="aside">
                        <h2>What?</h2>
                        <p>Chania is a city on the island of Crete.</p>
                        <h2>Where?</h2>
                        <p>Crete is a Greek island in the Mediterranean Sea.</p>
                        <h2>How?</h2>
                        <p>You can reach Chania airport from all over Europe.</p>
                    </div></td></tr><tr><td> <div class="aside">
                        <h2>What?</h2>
                        <p>Chania is a city on the island of Crete.</p>
                        <h2>Where?</h2>
                        <p>Crete is a Greek island in the Mediterranean Sea.</p>
                        <h2>How?</h2>
                        <p>You can reach Chania airport from all over Europe.</p>
                    </div></td></tr>';
    
    echo 
   '    </table>
       </div> 
    <!-- AREA DE NOTIFICACIONES Y MENSAJES (END) -->';
}

function barraBottom()
{
    echo 
   '<!-- BARRA INFERIOR DE LA WEB (BEGIN) -->
    <div class="barraBottom-Div">
        <p>Softgem</p>
    </div>
    <!-- BARRA INFERIOR DE LA WEB (END) -->';
}

function fin()
{
    echo '
        </body>
    </html>';
 }

?>