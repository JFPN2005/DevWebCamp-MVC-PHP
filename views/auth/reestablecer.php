<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nuevo Password</p>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if($token_valido) { ?>
        <form class="formulario" method="POST">
            <div class="formulario__campo">
                <label class="formulario__label" for="password">Nuevo Password:</label>
                <input class="formulario__input" type="password" placeholder="Tu Nuevo Password" id="password" name="password">
            </div>

            <input type="submit" class="formulario__submit" value="Guardar Password">

        </form>
    <?php } ?>
    <div class="acciones">
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</a>
        <a href="/registro" class="acciones__enlace">¿No tienes una Cuenta? Crea una</a>
    </div>
</main>