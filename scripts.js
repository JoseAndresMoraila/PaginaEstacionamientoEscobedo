var Contador=1; // Inicializa la variable Contador con un valor de 1. Esta variable se utilizará para rastrear qué imagen debe mostrarse a continuación.

        setInterval(function(){ /*setInterval(function() {...}, 4000);: Establece un intervalo de tiempo que ejecutará la función anónima proporcionada 
        cada 4000 milisegundos (4 segundos)*/

            document.getElementById('Radio' + Contador).checked=true;/*document.getElementById('Radio' + Contador).checked = true;: Busca el elemento de
             radio cuyo ID sea 'Radio' seguido del valor actual de Contador (por ejemplo, 'Radio1', 'Radio2', etc.). Luego, establece el atributo 
             checked de ese botón de radio en true, lo que activa la selección.*/

            Contador++; /*Contador++;: Incrementa el valor de Contador en 1, de modo que en la próxima iteración del intervalo, se seleccionará el
             siguiente botón de radio.*/

            if(Contador > 3){ //if (Contador > 3) {...}: Verifica si el valor de Contador ha alcanzado o superado 3, lo que significa que hemos recorrido todos los botones de radio disponibles.

                Contador = 1;//Contador = 1;: Si Contador es mayor que 3, se restablece a 1 para volver a la primera imagen. Esto crea un ciclo continuo a través de las imágenes.
            }
        }, 4000);


        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll(".NavLink");
            const contenedorPadre = document.querySelector(".ContendorPadre");
        
            navLinks.forEach(link => {
                link.addEventListener("click", function (event) {
                    event.preventDefault();
                    const targetPosition = link.getAttribute("data-position");
                    contenedorPadre.style.setProperty("--target-position", targetPosition);
                    contenedorPadre.classList.add("active");
                });
            });
        });

        
        
          
          
        