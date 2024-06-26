<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Registrate en DevWebCamp</p>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form class="formulario" action="/registro" method="POST">
        <div class="formulario__campo">
            <label class="formulario__label" for="nombre">Nombre:</label>
            <input class="formulario__input" type="text" placeholder="Tu Nombre" id="nombre" name="nombre" value="<?php echo $usuario->nombre ?>">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="apellido">Apellido:</label>
            <input class="formulario__input" type="text" placeholder="Tu Apellido" id="apellido" name="apellido" value="<?php echo $usuario->apellido ?>">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email:</label>
            <input class="formulario__input" type="email" placeholder="Tu Email" id="email" name="email" value="<?php echo $usuario->email ?>">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password:</label>
            <input class="formulario__input" type="password" placeholder="Tu Password" id="password" name="password">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="password2">Repetir Password:</label>
            <input class="formulario__input" type="password" placeholder="Repite tu Password" id="password2" name="password2">
        </div>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">

    </form>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes Cuenta? Inicia Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
    </div>
</main>