// Este script contiene las funciones de javascript relacionadas con la interfaz 
// y los eventos de clic.
// Esto es solo cambios en el css para lograr efectos en la presentacion.
var eventosWebEstatica = /** @class */ (function () {
    function eventosWebEstatica() {
        //Se declaran auxiliarIdlas variables para los nombres de los elementos  
        this.bloqueMenuId = "";
        this.bloqueAuxiliarId = "";
        this.bloqueContenidoId = "";
    }
    eventosWebEstatica.prototype.BotonClicEfecto = function (Afectado, bloqueMenuId, bloqueAuxiliarId, bloqueContenidoId) {
        /*Afectado es 1 para menu, 2 para Notificaciones*/
        this.exito = false;
        this.bloqueMenuId = bloqueMenuId; /*Elemento al que se afecta*/
        this.bloqueAuxiliarId = bloqueAuxiliarId; /*Elemento que no se afecta, se necesita para averiguar su estado*/
        this.bloqueContenidoId = bloqueContenidoId; /*Elemento Contenido afectado de forma indirecta*/
        this.numero01 = Afectado;
        /*Estado indica el estado de visibilidad 1: Menu, 2: Notificacion*/
        this.bloqueMenuVisibilidad = false; /*Por defecto se toma el Menu como oculto*/
        this.bloqueAuxiliarVisibilidad = false; /*Por defecto se toma Auxiliar como oculto*/
        var bloqueMenu = document.getElementById(this.bloqueMenuId);
        var bloqueAuxiliar = document.getElementById(this.bloqueAuxiliarId);
        var bloqueContenido = document.getElementById(this.bloqueContenidoId);
        if (bloqueMenu != null && bloqueAuxiliar != null && bloqueContenido != null) {
            if (this.numero01 == 1) {
                if (bloqueMenu.style.display == "block" || bloqueMenu.style.display != "none") {
                    bloqueMenu.style.display = "none";
                }
                else {
                    bloqueMenu.style.display = "block";
                }
            }
            if (this.numero01 == 2) {
                if (bloqueAuxiliar.style.display == "block" || bloqueAuxiliar.style.display != "none") {
                    bloqueAuxiliar.style.display = "none";
                }
                else {
                    bloqueAuxiliar.style.display = "block";
                }
            }
            if (bloqueMenu.style.display == "block" || bloqueMenu.style.display != "none") {
                this.bloqueMenuVisibilidad = true;
            }
            if (bloqueAuxiliar.style.display == "block" || bloqueAuxiliar.style.display != "none") {
                this.bloqueAuxiliarVisibilidad = true;
            }
            //            console.log(this.Estado1);
            //            console.log(this.Estado2);
            if (this.bloqueMenuVisibilidad == false && this.bloqueAuxiliarVisibilidad == false) {
                bloqueContenido.className = "col-12 col-m-12 cuerpo-Contenido";
            }
            else if (this.bloqueMenuVisibilidad == true && this.bloqueAuxiliarVisibilidad == false) {
                bloqueContenido.className = "col-9 col-m-9 cuerpo-Contenido";
            }
            else if (this.bloqueMenuVisibilidad == false && this.bloqueAuxiliarVisibilidad == true) {
                bloqueContenido.className = "col-9 col-m-12 cuerpo-Contenido";
            }
            else {
                bloqueContenido.className = "col-6 col-m-9 cuerpo-Contenido";
            }
        }
        return this.exito;
    };
    return eventosWebEstatica;
}());
