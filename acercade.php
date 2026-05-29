<link rel="stylesheet" href="style.css">

<main>

    <nav class="menu-periodos" style="margin-top: 1rem;">
        <a href="index.php" class="btn">
            Volver al Menú Principal
        </a>
    </nav>

    <section class="contenedor-taller">

        <h2 style="
            font-family: 'Playfair Display', serif;
            color: var(--rojo-oscuro);
            margin-bottom: 2rem;
            font-size: 2rem;
        ">
            Acerca de Mí
        </h2>

        <div style="
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        ">

            <!-- Imagen -->
            <img 
                src="img/violetta.jfif"
                alt="Violetta"
                style="
                    width: 180px;
                    height: 180px;
                    object-fit: cover;
                    border-radius: 50%;
                    border: 5px solid var(--naranja-pastel);
                    box-shadow: 0 6px 18px var(--sombra);
                    transition: 0.3s ease;
                "
            >

            <!-- Información -->
            <div style="
                flex: 1;
                min-width: 260px;
                text-align: left;
            ">

                <h3 style="
                    font-family: 'Playfair Display', serif;
                    color: var(--rojo-oscuro);
                    font-size: 2rem;
                    margin-bottom: 1rem;
                ">
                    Violetta
                </h3>

                <div class="resultado-box" style="
                    display: block;
                    margin-bottom: 1rem;
                ">
                    <strong>Propósito de la página:</strong><br><br>

                    Mostrar mis conocimientos y aprendizajes a traves del periodo.
                </div>

                <div class="resultado-box" style="
                    display: block;
                ">
                    <strong>Intereses y Gustos:</strong><br><br>

                    Me encanta dibujar, cantar, actuar, escribir novelas dramaticas y ayudar a mis amigos.
                </div>

            </div>

        </div>

    </section>

</main>
