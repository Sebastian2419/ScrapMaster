const opciones = document.querySelectorAll(".opcion");
const preguntaTexto = document.getElementById("preguntaTexto");
const botonSiguiente = document.getElementById("botonSiguiente");
const botonAtras = document.getElementById("botonAtras");
const nuevoBotonEnviar = document.createElement("button");

var Opcion1 = document.getElementById("opcion1");
var Opcion2 = document.getElementById("opcion2");
var Opcion3 = document.getElementById("opcion3");
var Opcion4 = document.getElementById("opcion4");
var ids = ["opcion1", "opcion2", "opcion3","opcion4"];

//Clases para remover cuando se pasa de pregunta
var clasesARemover = ["boton-samsung","boton-apple","boton-motorola","boton-xiaomi"];
var clasesARemover_almacenamiento = ["boton-32","boton-64","boton-128","boton-512"];
var clasesARemover_precios = ["boton-500","boton-mil","boton-dosmil","boton-masdosmil"];
var clasesARemover_ram = ["boton-4ram","boton-6ram","boton-8ram"];

var variable 
var variable2 
var variable3 
var variable4

let preguntaActual = 1;


//Validar las preguntas y respuestas actuales cuando se pasan las preguntas
opciones.forEach((opcion) => {
    opcion.addEventListener("click", () => {
    

    switch(preguntaActual){

        case 1:
            respuestaSeleccionada = opcion.getAttribute("data-opcion");    
        break;
        case 2:
            respuestaSeleccionada2 = opcion.getAttribute("data-opcion");
        break;
        case 3:
            respuestaSeleccionada3 = opcion.getAttribute("data-opcion");
        break;
        case 4:
            respuestaSeleccionada4 = opcion.getAttribute("data-opcion");
        break;
    }

        //Remover la clase "seleccionado" de todos los botones
        opciones.forEach((boton) => {
        boton.classList.remove("seleccionado");
        });

        //Agregar la clase "seleccionado" al botón seleccionado
        opcion.classList.add("seleccionado");
        });   
});


botonSiguiente.addEventListener("click", () => {

    //Incrementa el contador de la pregunta actual
    preguntaActual++;
    //console.log(preguntaActual);

    switch(preguntaActual){
        //Si la pregunta actual es la segunda
        case 2:
            opciones.forEach((boton) => {
                boton.classList.remove("seleccionado");
            });
            //Actualiza el texto de la pregunta
            preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Con cuánto almacenamiento lo prefieres?`;

            //Asigna valores de almacenamiento a los botones
            Opcion1.setAttribute("data-opcion","32");
            Opcion2.setAttribute("data-opcion","64");
            Opcion3.setAttribute("data-opcion","128");
            Opcion4.setAttribute("data-opcion","512");
            
            //Elimina clases relacionadas con opciones anteriores
            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar
                    clasesARemover.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Agrega nuevas clases para indicar el almacenamiento en GB
            Opcion1.classList.add("boton-32");
            Opcion2.classList.add("boton-64");
            Opcion3.classList.add("boton-128");
            Opcion4.classList.add("boton-512");

            botonAtras.style.display = 'block';
        break;

        case 3:
            //Elimina la clase "seleccionado" de todos los botones
            opciones.forEach((boton) => {
                boton.classList.remove("seleccionado");
            });

            preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Cuál es tu presupuesto?`;
            
            Opcion1.setAttribute("data-opcion","500");
            Opcion2.setAttribute("data-opcion","1000");
            Opcion3.setAttribute("data-opcion","1999");
            Opcion4.setAttribute("data-opcion","2000");    


            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar
                    clasesARemover_almacenamiento.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Nuevas clases Precios
            Opcion1.classList.add("boton-500");
            Opcion2.classList.add("boton-mil");
            Opcion3.classList.add("boton-dosmil");
            Opcion4.classList.add("boton-masdosmil");
        break;

        case 4:
            //Elimina la clase "seleccionado" de todos los botones
            opciones.forEach((boton) => {
                boton.classList.remove("seleccionado");
            });

            preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Cuántos GB de RAM lo requiere?`;

            Opcion1.setAttribute("data-opcion","4ram");
            Opcion2.setAttribute("data-opcion","6ram");
            Opcion3.setAttribute("data-opcion","8ram");

            Opcion4.setAttribute("data-opcion","eliminarrr");
            
            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar
                    clasesARemover_precios.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Nuevas clases RAM
            Opcion1.classList.add("boton-4ram");
            Opcion2.classList.add("boton-6ram");
            Opcion3.classList.add("boton-8ram");

            //Elimina el botón de siguiente
            Opcion4.remove();
            botonSiguiente.remove();

            // Asignar texto al nuevo botón
            nuevoBotonEnviar.innerText = "ENVIAR";

            // Agregar clases al botón
            nuevoBotonEnviar.classList.add("boton-enviar");

            // Quitar clase
            nuevoBotonEnviar.classList.remove("boton-siguiente");

            // Agregar el botón al contenedor
            const botonEnviar = document.getElementById("botonEnviar");

            botonEnviar.appendChild(nuevoBotonEnviar);

            // Agregar el atributo onclick al botón para redirigir a una página
            botonEnviar.setAttribute("onClick","consultarBD()");

            //Se quita el boton de Atras en la pregunta 4
            botonAtras.style.display = 'none';
        break;
    } 
}
);


botonAtras.addEventListener("click", () => {

    //console.log("ATRAS")
    preguntaActual--;
    console.log(preguntaActual)

    switch(preguntaActual){

        case 1:
            //Actualiza el texto de la pregunta
            preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Cuál es la marca de su preferencia?`;

            //Asigna valores de almacenamiento a los botones
            Opcion1.setAttribute("data-opcion","samsung");
            Opcion2.setAttribute("data-opcion","apple");
            Opcion3.setAttribute("data-opcion","motorola");
            Opcion4.setAttribute("data-opcion","xiaomi");   

            //Elimina clases relacionadas con opciones almacenamiento
            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar
                    clasesARemover_almacenamiento.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Elimina clases relacionadas con opciones precios
            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar 
                    clasesARemover_precios.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Agrega nuevas clases para indicar la marca
            Opcion1.classList.add("boton-samsung");
            Opcion2.classList.add("boton-apple");
            Opcion3.classList.add("boton-motorola");
            Opcion4.classList.add("boton-xiaomi");

            //Se quita el boton de Atras en la pregunta 1
            botonAtras.style.display = 'none';
        break;

        case 2:
            //Actualiza el texto de la pregunta
            preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Con cuánto almacenamiento lo prefieres?`;

            //Asigna valores de almacenamiento a los botones
            Opcion1.setAttribute("data-opcion","32");
            Opcion2.setAttribute("data-opcion","64");
            Opcion3.setAttribute("data-opcion","128");
            Opcion4.setAttribute("data-opcion","512");   
            
            //Elimina clases relacionadas con opciones Marcas
            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar
                    clasesARemover.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Agrega nuevas clases para indicar el almacenamiento en GB
            Opcion1.classList.add("boton-32");
            Opcion2.classList.add("boton-64");
            Opcion3.classList.add("boton-128");
            Opcion4.classList.add("boton-512");

            botonAtras.style.display = 'block';
        break;
        
        case 3:
            //Similar al bloque anterior pero para la tercera pregunta
        
            //Elimina la clase "seleccionado" de todos los botones
            opciones.forEach((boton) => {
                boton.classList.remove("seleccionado");
            });

            preguntaTexto.textContent = `Pregunta ${preguntaActual}: ¿Cuál es tu presupuesto?`;
            
            Opcion1.setAttribute("data-opcion","500");
            Opcion2.setAttribute("data-opcion","1000");
            Opcion3.setAttribute("data-opcion","1999");
            Opcion4.setAttribute("data-opcion","2000");    

            //Elimina clases relacionadas con opciones almacenamiento
            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar
                    clasesARemover_almacenamiento.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Elimina clases relacionadas con opciones Precios
            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar 
                    clasesARemover_precios.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Elimina clases relacionadas con opciones RAM
            ids.forEach(function(id) {
                var elemento = document.getElementById(id);
                if (elemento) {
                // Itera sobre las clases que deseas quitar precios
                    clasesARemover_ram.forEach(function(clase) {
                    elemento.classList.remove(clase);
                    });
                }
            });

            //Nuevas clases Precios
            Opcion1.classList.add("boton-500");
            Opcion2.classList.add("boton-mil");
            Opcion3.classList.add("boton-dosmil");
            Opcion4.classList.add("boton-masdosmil");
        break;
    }
    }
);


