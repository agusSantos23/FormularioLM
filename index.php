<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/baseO.css">
    <link rel="stylesheet" href="./css/footerO.css">
    <link rel="stylesheet" href="./css/decoracionO.css">

    <title>WEPELING</title>
</head>
<body>
    
    <div id="lineasI">
        <div class="fino r"></div>
        <div class="grueso r"></div>
    </div>

    <div id="lineasD">
        <div class="fino r"></div>
        <div class="grueso r"></div>
    </div>

    <img src="./img/luna.png" alt="Luna" id="luna">

    <img src="./img/dirigible.png" alt="Dirigible" class="dirigible">

    <header>
        <h1>WEPELING<span>S</span></h1>
    </header>

    <main class="cuerpo">
        <a class="enl" href="./cuerpos/iniciarSUF.php">Iniciar Sesion</a>

        <a class="enl" href="./cuerpos/crearUF.php">Crear Usuario</a>

        <a class="enl" href="./cuerpos/iniciarSAF.php">Administracion</a>
    </main>

    <footer>
        <main>
            <section class="enlacesF">
                <a href="#">Inicio</a>
                <a href="./cuerpos/iniciarSAF.php">Administracion</a>
                <a href="./cuerpos/correoContacto.php">Contactar</a>

            </section>
            <section class="enlacesF">
                <a href="./cuerpos/iniciarSUF.php">Iniciar Sesion</a>
                <a href="./cuerpos/crearUF.php">Crear Usuario</a>
                <a href="./cuerpos/recuperarU.php">Recuperar Cuenta</a>
            </section>
        </main>
        <aside>
            <a href="https://github.com/agusSantos23" target="_blank"><img src="./svg/github.svg" alt="github"></a>
            <a href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header-signin" target="_blank"><img src="./svg/linke.svg" alt="linkeding"></a>
            <a href="https://agussantos.es/" target="_blank"><img src="./svg/hand.svg" alt="gmail"></a>

        </aside>
        <h4 class="copy">&copy;Agustin Prieto Atienza</h4>
    </footer>

    <script>
        //Busqueda de etiquetas en el documento
        const titulo = document.querySelector("h1");
        const letra = document.querySelector("span");

        //Agregar clase cuando titulo es clicado
        titulo.addEventListener("click",()=>{

            letra.className = "santos";
        });
    </script>
</body>
</html>