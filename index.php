<?php 
    require 'includes/App.php';
    incluirTemplate ('header',true);
?>

    <main class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis repudiandae possimus atque recusandae dignissimos totam fuga aliquid hic, molestias, dicta excepturi velit consequuntur delectus quia minus, quos nobis consequatur maiores!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis repudiandae possimus atque recusandae dignissimos totam fuga aliquid hic, molestias, dicta excepturi velit consequuntur delectus quia minus, quos nobis consequatur maiores!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis repudiandae possimus atque recusandae dignissimos totam fuga aliquid hic, molestias, dicta excepturi velit consequuntur delectus quia minus, quos nobis consequatur maiores!</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>
        <?php 
            $limite = 3;
            include 'includes/templates/anuncios.php';
        ?>
        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>
    
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="imagen/webp">
                        <source srcset="build/img/blog1.jpg" type="imagen/jpeg">
                        <img src="build/img/blog1.jpg" alt="Texto entrada blog" loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales.</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="imagen/webp">
                        <source srcset="build/img/blog2.jpg" type="imagen/jpeg">
                        <img src="build/img/blog2.jpg" alt="Texto entrada blog" loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guia.</p>
                    </a>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofreciones cumple con todas
                    mis expectativas.
                </blockquote>
                <p>- Federico De Lillo</p>
            </div>
        </section>
    </div>

    <?php incluirTemplate ('footer');?>