<?php 
    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 years de experiencia
                </blockquote>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At amet vel corrupti accusantium sunt excepturi eaque ducimus nostrum vero perspiciatis pariatur omnis reiciendis, nemo ut quidem exercitationem incidunt ex assumenda.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, ut commodi neque molestiae sapiente provident autem veniam, maiores rem sit numquam. Consequatur provident sunt ad vitae quos, ipsa quod maxime!</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor siisi tenetur voluptatem, natus rerum quasi molestias?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum enetur voluptatem, consequuntur labore fuga, natus rerum quasi molestias?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero minima </p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer'); 
?>