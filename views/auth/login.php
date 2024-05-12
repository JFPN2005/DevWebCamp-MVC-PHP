<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia Sesión en DevWebCamp</p>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>
    
    <form class="formulario" action="/login" method="POST">
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email:</label>
            <input class="formulario__input" type="email" placeholder="Tu Email" id="email" name="email">
        </div>
        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password:</label>
            <input class="formulario__input" type="password" placeholder="Tu Password" id="password" name="password">
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">

    </form>
    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿No tienes una Cuenta? Crea una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
    </div>
</main>