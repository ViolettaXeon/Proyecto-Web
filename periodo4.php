<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periodo 4 - Proyecto Final</title>

    <!-- Mantiene el mismo estilo -->
    <link rel="stylesheet" href="style.css">

    <style>
        .contenedor-periodo4 {
            margin-top: 2rem;
            padding: 2rem;
            border-radius: 20px;
            background: rgba(255,255,255,0.9);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border: 2px dashed var(--naranja-medio);
        }

        .tarjetas {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .tarjeta {
            background: linear-gradient(
                135deg,
                rgba(255,173,173,0.25),
                rgba(255,203,164,0.25)
            );
            padding: 1.5rem;
            border-radius: 16px;
            transition: 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .tarjeta:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 22px rgba(0,0,0,0.15);
        }

        .tarjeta h3 {
            margin-bottom: 0.7rem;
            color: var(--rojo-oscuro);
        }

        .tarjeta p {
            color: var(--gris-texto);
            font-size: 0.95rem;
        }

        .mensaje-final {
            margin-top: 2rem;
            padding: 1rem;
            border-left: 5px solid var(--rojo-medio);
            background: rgba(255,255,255,0.8);
            border-radius: 10px;
            font-weight: 600;
        }

        .icono {
            font-size: 2.2rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <header>
        <h1>Periodo 4</h1>
        <p>Proyecto Final y Nuevos Aprendizajes</p>
    </header>

    <main>

        <section class="contenedor-periodo4">

            <h2 style="color: var(--rojo-oscuro); margin-bottom: 1rem;">
                Bienvenido al Periodo 4
            </h2>

            <p>
                En este periodo se desarrollarán proyectos más avanzados
                utilizando PHP, diseño web y lógica de programación.
            </p>

            <div class="tarjetas">

                <div class="tarjeta">
                    <div class="icono">💻</div>
                    <h3>Proyecto Web</h3>
                    <p>
                        Desarrollo de una página dinámica utilizando PHP,
                        HTML y CSS.
                    </p>
                </div>

                <div class="tarjeta">
                    <div class="icono">🎨</div>
                    <h3>Diseño Moderno</h3>
                    <p>
                        Aplicación de estilos modernos y responsive
                        para mejorar la experiencia visual.
                    </p>
                </div>

                <div class="tarjeta">
                    <div class="icono">🧠</div>
                    <h3>Lógica Avanzada</h3>
                    <p>
                        Uso de estructuras condicionales, ciclos
                        y formularios interactivos.
                    </p>
                </div>

                <div class="tarjeta">
                    <div class="icono">🚀</div>
                    <h3>Proyecto Final</h3>
                    <p>
                        Integración de todos los conocimientos
                        aprendidos durante el año.
                    </p>
                </div>

            </div>

            <div class="mensaje-final">
                ✨ Sigue aprendiendo y mejorando tus habilidades en programación.
            </div>

        </section>

        <nav class="menu-periodos" style="margin-top: 3rem;">
            <a href="periodo4.php" class="btn">
                Menú del Periodo
            </a>

            <a href="index.php" class="btn">
                Menú Principal
            </a>
        </nav>

    </main>

    <footer>
        <p>&copy; 2026 - Proyecto de informática</p>
    </footer>

</body>
</html>