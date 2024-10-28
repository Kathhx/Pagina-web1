<?php
include("templates/nav.php");
?>

    <!--INICIO DE LA PÁGINA-->
    <header class="header">
    
        <div class="header-contenido contenedor">
            <div class="header-img">
                <img src="inicio.jpg" alt="">
            </div>

            <div class="header-txt">
                <h1>zara</h1>
                <p class="p1">Las mejores prendas de moda exclusivas para ti</p>
                <div class="buscar1">
                    <input type="text" name="b" placeholder="Buscar producto por Código">
                    <button><i class='bx bx-search-alt-2'></i></button>
                </div>
            </div>
        </div>
    </header>

    <!--PRODUCTOS QUE SE ESTAN VENDIENDO -->
    <h2 class="title">Nuestras categorías</h2>
    <div class="enlaces-contenedor">
        <div class="enlace">
            <a href="mujeres.php"><img src="mujeres.jpg"></a>
            <h2>MUJER</h2>
        </div>
        <div class="enlace">
            <a href="hombres.php"><img src="Hombres.jpg"></a>
            <h2>HOMBRE</h2>
        </div>
        <div class="enlace">
            <a href="niñas y niñas.php"><img src="Niños.jpg"></a>
            <h2>NIÑOS</h2>
        </div>
        <div class="enlace">
            <a href="bolsos.php"><img src="bolso.png"></a>
            <h2>BOLSOS</h2>
        </div>
        <div class="enlace">
            <a href="deportes.php"><img src="deportes.png"></a>
            <h2>DEPORTES</h2>
        </div>
        <div class="enlace">
            <a href="accesorios.php"><img src="accesorios.jpg"></a>
            <h2>ACCESORIOS</h2>
        </div>
    </div>

<?php
include("templates/pie.php");
?>
