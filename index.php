<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniature Painter Guides | Registro de Academia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="hero">
    <hgroup>
        <h1>Miniature Painter Guides</h1>
        <p>Domina el pincel, domina el campo de batalla.</p>
    </hgroup>
</header>

<main>
    <article class="form-container">
        <header>
            <h2>Únete a la Academia de Pintura</h2>
            <p>Regístrate para recibir guías exclusivas de:</p>
            <ul class="tag-list">
                <li><mark>Imprimación</mark></li>
                <li><mark>Veladuras</mark></li>
                <li><mark>Contrastes</mark></li>
            </ul>
        </header>
        
        <form id="registroForm" action="index.php" method="POST">
            <fieldset>
                <legend>Datos Personales del Artista</legend>
                
                <p>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej: Marcos" required>
                </p>
                
                <p>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" placeholder="Ej: Sevilla" required>
                </p>

                <p>
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" required min="1" max="99" value="18">
                </p>

                <p>
                    <label for="email">Email de contacto</label>
                    <input type="email" id="email" name="email" placeholder="artista@ejemplo.com" required>
                </p>

                <button type="submit" id="btnEnviar">Empezar a pintar</button>
            </fieldset>
        </form>

        <aside id="mensajeJs" class="hidden" aria-live="polite"></aside>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <section class="php-response" role="alert">
                <?php $nombre = htmlspecialchars($_POST['nombre']); ?>
                <p>¡Bienvenido, artista <strong><?php echo $nombre; ?></strong>!</p>
                <p><small>Revisa tu email para tu primera guía de pincel seco.</small></p>
            </section>
        <?php endif; ?>
    </article>
</main>

<footer>
    <address>
        Proyecto DAM - <a href="https://github.com/marcos-sevilla/codenode-semana1">Repositorio GitHub</a>
    </address>
    <p><small>&copy; 2026 Miniature Painter Guides</small></p>
</footer>

<script src="script.js"></script>
</body>
</html>