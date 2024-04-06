<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Cursos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="shortcut icon" type="image/png" href="./images/logo.webp">
    <script src="scripts/script.js" defer></script>
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            font-weight: bold;
            font-size: 16px;
            scroll-behavior: smooth;
        }

        li,
        a {
            color: black;
            text-decoration: none;
        }

        header {
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 4%;
            background-color: #f8f8f8;
        }

        .logo {
            height: 64px;
            cursor: pointer;
        }

        .nav_links {
            list-style: none;
        }

        .nav_links li {
            position: relative;
            display: inline-block;
            padding: 0px 20px;
        }

        .nav_links li::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 3px;
            background: #007bff; 
            
            border-radius: 40px;
            transform: scaleX(0);
            transition: transform 0.2s;
        }

        .nav_links li:hover::after {
            transform: scaleX(1);
        }

        .courses-section {
            background-color: #f8f8f8;
            padding: 50px 0;
            text-align: center;
            margin-top: 30px; /* Adicionando margem no topo */
        }

        .courses-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .course {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto 30px;
            transition: transform 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .course:hover {
            transform: translateY(-5px);
        }

        .course img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .course h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .course p {
            margin-bottom: 20px;
            color: #555;
        }

        .mobile-menu {
            display: none;
        }

        .mobile-menu button {
            border: none;
            background: none;
            cursor: pointer;
        }

        footer {
            background-color: #f8f8f8;
            padding: 20px 0;
            text-align: center;
        }

        @media (max-width: 730px) {
            .nav_links {
                pointer-events: none;
                display: flex;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                text-align: center;
                width: 100%;
                height: 92vh;
                background: #f8f8f8;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                opacity: 0;
            }

            .nav_links li {
                margin-left: 0;
            }

            .mobile-menu {
                display: block;
            }

            .nav_links.active {
                pointer-events: all;
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="#"><img src="images/logo.webp" class="logo"/></a>
        <nav>
            <div class="mobile-menu">
                <button onclick="showMenu()">
                   
                </button>
            </div>
            <ul class="nav_links">
                <li class="nav-item"><a href="/">Home</a></li>
                <li class="nav-item"><a href="/cursos">Cursos</a></li>
                <li class="nav-item"><a href="/departamentos">Departamentos</a></li>
                <li class="nav-item"><a href="/oportunidades">Oportunidades</a></li>
                <li class="nav-item"><a href="/vestibulinho">Vestibulinho</a></li>
                <li class="nav-item"><a href="/instituição">Instituição</a></li>
            </ul>
        </nav>
    </header>

    



    <section class="courses-section">
        <div class="courses-container">
            <div class="course">
                <img src="images/ds.jpg" alt="Desenvolvimento de Sistemas">
                <h3>Desenvolvimento de Sistemas</h3>
                <p>Curso para aprender a desenvolver sistemas de software.</p>
            </div>
            <div class="course">
                <img src="images/adm.jpg" alt="Administração">
                <h3>Administração</h3>
                <p>Curso para aprender os princípios de administração de negócios.</p>
            </div>
            <div class="course">
                <img src="images/rh.webp" alt="Recursos Humanos">
                <h3>Recursos Humanos</h3>
                <p>Curso para aprender a gerenciar recursos humanos em uma organização.</p>
            </div>
            <div class="course">
                <img src="images/log.jpg" alt="Logística">
                <h3>Logística</h3>
                <p>Curso para aprender sobre gestão de cadeia de suprimentos e logística.</p>
            </div>
            <div class="course">
                <img src="images/cont.jpg" alt="Contabilidade">
                <h3>Contabilidade</h3>
                <p>Curso para aprender princípios e práticas contábeis.</p>
            </div>
            <div class="course">
                <img src="images/juri.jpg" alt="Contabilidade">
                <h3>Serviços juridicos</h3>
                <p>Curso para aprender sobre serviços jurídicos e atividades relacionadas ao campo do direito.</p>
            </div>
        </div>
    </section>
    <!-- Fim da seção de Cursos Disponíveis -->

    <footer style="background-color:#0000ff  ; color: white; padding: 20px;">
        <div style="text-align: center;">
            <p>© 2024 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

    <script>
        function showMenu() {
            var navLinks = document.querySelector('.nav_links');
            navLinks.classList.toggle('active');
        }
    </script>


</body>
</html>
