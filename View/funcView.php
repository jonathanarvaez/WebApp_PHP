<?php

function inicio(){
    echo '<html>';
}

function head(){
    echo '
    <head>
        <meta charset="windows-1252">
        <title>EnLinea&#174; PWA</title>
        <link rel="manifest" href="manifest.json">
        <meta name="theme-color" content="#0D47A1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="Images/favicon.ico" type="image/x-icon"/>
         <!-- Hojas de Estilo (BEGIN) -->
        <link href="StyleSkin/fontawesome.css" rel="stylesheet" />
        <link href="StyleSkin/StyleSkin.css" rel="stylesheet" type="text/css" />
    
        <!-- Hoja de Estilo (END) -->
    </head>';
}

function body(){
    echo '
    <body>
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
	<!-- BARRA SUPERIOR (END) -->
    </body>';
}

function fin(){
    echo '
    </html>';
 }

?>