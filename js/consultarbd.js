
function consultarBD() {
    //console.log('Esta entrando a la Función desde el nuevo Botón');

    //Se recogen las respuestas seleccionadas de las preguntas anteriores
    var variable = respuestaSeleccionada
    var variable2 = respuestaSeleccionada2
    var variable3 = respuestaSeleccionada3
    var variable4 = respuestaSeleccionada4

    //Se crea un objeto FormData para enviar los datos al servidor
    var data = new FormData();
    data.append('marca', variable);
    data.append('almacenamiento', variable2);
    data.append('precio', variable3);
    data.append('ram', variable4);

    // Se realiza una solicitud fetch al servidor
    fetch('../php/consultas.php', {
        method: 'POST',
        body: data,
        error: function() {
            alert('Error al realizar la consulta.');
        }
    })

    //Se maneja la respuesta del servidor como texto
    .then(response => response.text())
    .then(data => {

        //Si hay datos en la respuesta del servidor
        if(data && data.length > 0){

        //console.log('Aca se muestran los datos')
        //console.log(data); // Imprime la respuesta del servidor
        
        //Se obtiene el elemento con id 'resultado'
        const resultadoElement = document.getElementById('resultado');
        //Se establece el contenido del elemento con la respuesta del servidor
        resultadoElement.innerHTML = data;
        

        //console.log('Aca finalizan los datos')

        }else{
            //Si no hay datos, se muestra un mensaje en el elemento con id 'resultado'
            const resultadoElement = document.getElementById('resultado');
            resultadoElement.innerHTML = "No se encontraron resultados";
        }
    })
    //Se maneja cualquier error ocurrido durante la solicitud fetch
    .catch(error => {
        console.error('Error:', error);
    });

    
}

