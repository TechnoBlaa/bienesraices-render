<?php 
    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>


    <main class="contenedor seccion contenido-centrado"><!--Seccion main-->
        <h1>Guia para la decoracion de tu hogar</h1>

        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen dela propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

        
        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quisquam quas minus? Laboriosam voluptates deleniti, nulla ullam atque vero quas. Repellat qui nulla molestiae exercitationem repellendus, accusantium libero itaque perspiciatis.</p>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque ad ipsam accusantium eveniet nihil minima omnis pariatur, veritatis asperiores aliquam quam consequatur exercitationem hic facere in soluta est, vitae inventore veritatis asperiores aliquam quam consequatur exercitationem hic facere in soluta est, vitae inventore veritatis asperiores aliquam quam consequatur exercitationem hic facere in soluta est, vitae inventore veritatis asperiores aliquam quam consequatur exercitationem hic facere in soluta est, vitae inventore veritatis asperiores aliquam quam consequatur exercitationem hic facere in soluta est, vitae inventore veritatis asperiores aliquam quam consequatur exercitationem hic facere in soluta est, vitae inventore!</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer'); 
?>