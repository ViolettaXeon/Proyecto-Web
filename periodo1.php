<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periodo 1 - Diagramas PSeInt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Periodo 1: PSeInt</h1>
        <p>Selecciona un taller para ver su diagrama</p>
    </header>

    <main>
        <section class="menu-periodos">
            <button class="btn" onclick="mostrarDiagrama('Hola Mundo', './img/holamundo.png')">1. Hola Mundo</button>
            <button class="btn" onclick="mostrarDiagrama('Sumar 2 Números', './img/sumardosnumeros.png')">2. Sumar Números</button>
            <button class="btn" onclick="mostrarDiagrama('Positivo o Negativo', './img/positivonegativo.png')">3. Positivo/Negativo</button>
            <button class="btn" onclick="mostrarDiagrama('División Segura', './img/dividir.png')">4. División Validada</button>
            <button class="btn" onclick="mostrarDiagrama('Ciclo 1 hasta N', './img/1_n.png')">5. Ciclo 1 a N</button>
            <button class="btn" onclick="mostrarDiagrama('Ciclo 100 al 0', './img/100_0.png')">6. Ciclo 100 a 0</button>
        </section>

        <section class="contenedor-diagrama">
            <h3 id="titulo-taller">Selecciona un taller</h3>
            <img id="pantalla-diagrama" src="" alt="Diagrama" style="display: none;" class="img-diagrama">
        </section>

        <nav class="menu-periodos" style="margin-top: 3rem;">
            <a href="periodo1.php" class="btn" style="background: linear-gradient(135deg, #C0392B 0%, #E07B39 100%); color: #fff;">Menú del Periodo</a>
            <a href="index.php"   class="btn" style="background: linear-gradient(135deg, #C0392B 0%, #E07B39 100%); color: #fff;">Menú Principal</a>
        </nav>
    </main>

    <footer>
        <p>&copy; 2026 - Proyecto de informatica</p>
    </footer>

    <script>
        function mostrarDiagrama(titulo, rutaImagen) {
            document.getElementById('titulo-taller').innerText = "Diagrama: " + titulo;
            let img = document.getElementById('pantalla-diagrama');
            img.src = rutaImagen;
            img.style.display = "block";
        }
    </script>
</body>
</html>
