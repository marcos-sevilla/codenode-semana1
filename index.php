<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codenode - Semana 1</title>
    <style>
        body { font-family: sans-serif; margin: 40px; line-height: 1.6; }
        form { background: #f4f4f4; padding: 20px; border-radius: 8px; max-width: 400px; }
        .respuesta { margin-top: 20px; padding: 10px; border-left: 5px solid #007bff; background: #e7f3ff; }
    </style>
</head>
<body>

    <header>
        <h1>Tarea Semana 1: Formulario PHP</h1>
    </header>

    <main>
        <form action="index.php" method="POST">
            <label for="nombre">Escribe tu nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required>
            <button type="submit">Enviar a PHP</button>
        </form>

        <section class="respuesta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Saneamiento de datos para seguridad
                $nombre = htmlspecialchars($_POST['nombre']);
                echo "<h3>Resultado del servidor:</h3>";
                echo "<p>¡Hola <strong>$nombre</strong>! Tu primer script en PHP funciona correctamente.</p>";
            } else {
                echo "<p>Esperando datos del formulario...</p>";
            }
            ?>
        </section>
    </main>

</body>
</html>
