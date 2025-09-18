<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación de XV Años - Briahna Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

    <!-- Elementos decorativos -->
        <section class="fondo1 section1">
            <p >Nuestra Boda</p>
            <h1 class="titulo" >David y Julieta</h1>
            <p class="fecha" > 8 de octubre</p>
            <img src="base/carta.png" alt="" style="width: 150px; margin-top: 10px;margin:auto">
            <p>Click para abrir la invitación</p>

           <h4>HEMOS RESERVADO</h4>
           <H1> 2</H1>
           <P>LUGARES EN SU HONOR</P>


        </section>
    <!-- Contenido principal -->

    <section class="section1 bg1" style="min-height: 450px;">
            <h4 style="max-width: 300px;margin-top:80px;
    text-align: center;">"EL que encontró una esposa encontró la felicidad: Yavé es quien le otorgó ese favor." <br>Provebios 18:22</h4>
            <h1 class="titulo" >D & J</h1>
            <p>Nos casamos</p>

        </section>
        <img src="base/2.png" alt="" style="width: 100%;margin-top:-80px">

    <!-- Contenido segundo -->
     <section class="section1 bg1">
            <p>Con nuestro amor, la bendición de Dios<br> y la de nuestros Padres:</p>
            <br>
            <p>Nosotros</p>
            <h1 class="titulo" >David y Julieta</h1>
            <p>Tenemos el honor de invitarte a<br>celebrar nuestra unón en matrimonio</p>

            <br>
            <br>
                            <div class="audio-player" id="audioPlayerContainer">
                    <p data-i18n="press_heart">Presiona el ❤ para Nuestra canción</p>

                    <button class="play-btn" id="playBtn">
                        <i class="fas fa-heart"></i>
                    </button>
                    <span class="song-title" data-i18n="song_title">wave to earth - love.</span>

                </div>

                            <div class="contador">
                <h4 id="contador-texto"   style="text-aling:center" data-i18n="countdown_text">¡Solo faltan!</h4>
                <div class="tiempo">
                    <div class="unidad">
                        <div class="numero" id="dias">00</div>
                        <div class="etiqueta" data-i18n="days">Días</div>
                    </div>
                    <div class="unidad">
                        <div class="numero" id="horas">00</div>
                        <div class="etiqueta" data-i18n="hours">Horas</div>
                    </div>
                    <div class="unidad">
                        <div class="numero" id="minutos">00</div>
                        <div class="etiqueta" data-i18n="minutes">Minutos</div>
                    </div>
                    <div class="unidad">
                        <div class="numero" id="segundos">00</div>
                        <div class="etiqueta" data-i18n="seconds">Segundos</div>
                    </div>
                </div>
            </div>
     </section>

<img src="base/3.png" alt="" style="width: 100%">

<section class="section1 bg1">
    <article>
        <img src="iglesia.png" alt="">
        <h4>18:30 HRS. <BR>CEREMONIA</h4>
        <p>IGLESIA XXXXXX</p>
        <a href="#">ver ubicación</a>
    </article>
    <article>
        <img src="copas.svg" alt="">
        <h4>18:30 HRS. <BR>CEREMONIA</h4>
        <p>IGLESIA XXXXXX</p>
        <a href="#">ver ubicación</a>
    </article>
</section>

<section class="section1 bg2">
    <h2>Itinerario de actividades</h2>
    <article>
        <img src="ceremonia.svg" alt="">    
        <div class="info">
            <h5>Ceremonia <br>18:30</h5>
        </div>
    </article>
    <article>
        <img src="recepcion.svg" alt="">
        <div class="info">
            <h5>Recepción <br>20:30</h5>
        </div>
    </article>
    <article>
        <img src="cena.svg" alt="">
        <div class="info">
            <h5>Cena <br>20:30</h5>
        </div>
    </article>
    <article>
        <img src="fiesta.svg" alt="">
        <div class="info">
            <h5>Fiesta <br>20:30</h5>
        </div>
    </article>
</section>
<img src="base/5.png" alt="" style="width: 100%"  >
<section>
    <h3>CÓDIGO DE VESTIMENTA</h3>
    <article>
        <p>Etiqueta</p>
        <img src="vestimenta.svg" alt="">
        <p>Damas: Vestido largo(no blanco)</p>
        <p>Caballeros: Traje Formal</p>
    </article>
</section>

<section>
    <article>
        <img src="wsp.svg" alt="">
    <h3>CONFIRMACIÓN DE ASISTENCIA</h3>
    <p>Te agradeceremos confirmar tu asistencia antes del 8 de Septiembre de 2025</p>
    <a href="wa.me/912144379">Contacto</a>
    </article>

    <article>
        <h3>SIN NIÑOS</h3>
        <p>Este evento es solo para adultos. Agradecemos tu comprensión.</p>
    </article>

    <article>
        esperamos contar con tu presencia en este día tan especial para nosotros.
        <p>Con cariño,</p> 
        <h3>David & Julieta</h3>
        <h1>Muchas gracias!</h1>
    </article>
</section>
<img src="base/6.png" alt="">




    </div>

    <audio id="audioPlayer" loop>
        <source src="audio.mp3" type="audio/mpeg">
    </audio>

    <script>
        // Traducciones personalizadas


        // Función para cambiar idioma


        // Event listeners para botones de idioma

        // Inicializar con español

        // El resto de tu código JavaScript existente
        // Contador regresivo
        const fechaEvento = new Date('November 1, 2025 18:00:00').getTime();

        const actualizarContador = () => {
            const ahora = new Date().getTime();
            const diferencia = fechaEvento - ahora;

            if (diferencia > 0) {
                const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
                const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
                const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

                document.getElementById('dias').innerText = dias.toString().padStart(2, '0');
                document.getElementById('horas').innerText = horas.toString().padStart(2, '0');
                document.getElementById('minutos').innerText = minutos.toString().padStart(2, '0');
                document.getElementById('segundos').innerText = segundos.toString().padStart(2, '0');
            } else {
                document.getElementById('contador-texto').innerText = "¡El evento ya comenzó!";
                document.querySelector('.tiempo').style.display = 'none';
            }
        };

        setInterval(actualizarContador, 1000);
        actualizarContador();

        // Reproductor de música
        const audioPlayer = document.getElementById('audioPlayer');
        const playBtn = document.getElementById('playBtn');
        const audioPlayerContainer = document.getElementById('audioPlayerContainer');
        let isPlaying = false;

        // Mostrar el reproductor después de un retraso
        setTimeout(() => {
            audioPlayerContainer.classList.add('visible');
        }, 3000);

        playBtn.addEventListener('click', () => {
            if (isPlaying) {
                audioPlayer.pause();
                playBtn.innerHTML = '<i class="fas fa-heart"></i>';
            } else {
                audioPlayer.play().catch(e => {
                    console.log("La reproducción automática fue bloqueada. Haga clic para iniciar.");
                });
                playBtn.innerHTML = '<i class="fas fa-pause"></i>';
            }
            isPlaying = !isPlaying;
        });

        // Formulario de confirmación
        document.getElementById('confirmacionForm').addEventListener('submit', function (e) {
            e.preventDefault();
            
            // Crear FormData y enviar con fetch
            const formData = new FormData(this);
            
            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Mostrar alerta de éxito
                alert('¡Confirmación enviada con éxito!');
                this.reset();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Hubo un error al enviar la confirmación');
            });
        });

        // Animación de la barra de tiempo

        // Observador de intersección para animaciones


        // Observar todas las secciones


        // Llamar a la animación de la barra de tiempo al cargar y al hacer scroll
 
    </script>
</body>
</html>