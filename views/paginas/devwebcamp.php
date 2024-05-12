<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de LatinoAmérica</p>
    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen del DevWebCamp">
            </picture>
        </div>
        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil velit quam sint consequuntur ut est. Rerum aliquid ipsum odit voluptas excepturi accusamus sit repellat provident. Eos aliquid reprehenderit assumenda iure!</p>

            <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt similique rem nemo facilis? Voluptates obcaecati placeat veniam neque fugiat rerum velit reiciendis voluptate quos quisquam eaque corrupti, esse eius deleniti?</p>
        </div>
    </div>
</main>