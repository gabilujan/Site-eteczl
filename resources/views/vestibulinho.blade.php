<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Vestibulinho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="shortcut icon" type="imagex/png" href="./images/logo.webp">
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400,400italic,700,700italic,900,900italic%7CNunito+Sans:300,regular,600,700" media="all">	
	<script src="https://kit.fontawesome.com/27a76c8340.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/principal.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

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

.home {
  margin-top: 30px;
  padding: 15px 9%;
  padding-bottom: 15%;
}

.box-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
  gap: 15px;
}

.box-container .box {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  text-align: center;
  background-color: white;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  border-radius: 8px;
  padding: 15px 10px;
}

.text {
  font-size: 16px;
  font-weight: normal;
}


.texto {
  display: flex;
  justify-content: center;
}



.email {
  margin-top: 50px;
  padding: 15px 9%;
  padding-bottom: 8%;
}

.container-form {
  width: 100%;
  margin-top: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}
form {
  background: white;
  display: flex;
  flex-direction: column;
  padding: 2vw 4vw;
  width: 90%;
  max-width: 600px;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

form input,
form textarea {
  border: 0;
  margin: 10px 0;
  padding: 20px;
  outline: none;
  background: #f8f8f8;
  font-size: 16px;
  border-radius: 6px;
}

form button {
  margin-top: 10px;
}

.mobile-menu {
  display: none;
}

.mobile-menu button {
  border: none;
  background: none;
  cursor: pointer;
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

  .nav_links.active{
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
    
      <section class="banner">

<div class="slide">
  <div class="slidearea">
    <h1>Vestibulinho<br></h1>
    <h2>Ocorrem de Forma Semestral</h2>
    <a href="#who" class="button">Saiba Mais</a>
  </div>
</div>

</section>
      <section class="default light" id="who">
			<div class="section-title">Informações</div>
			<div class="section-desc">Como funciona?</div>
			<div class="section-body">

				<div class="section-aboutus">
					<div class="section-aboutus--left">
						<p>Contemplando os dois semestres do ano, o Vestibulinho é a porta de entrada para os cursos que se dividem em modalidades, sendo elas na ETEC Zona Leste: Ensino Técnico, Ensino Integrado Tradicional (M-Tec) e Articulação Médio-Técnica e Superior (AMS). É importante que os interessados à candidatura compreendam cada uma das modalidades, escolhendo a mais adequada à sua disponibilidade. Para a obtenção de um resultado positivo, o candidato deve se preparar para a prova com antecedência. </p>
							<br>
							<p>A prova do Vestibulhinho tem duração de quatro horas. Os candidatos devem responder a 50 questões-teste, cada uma valendo um ponto, com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.

A prova prestada para as vagas remanescentes, as quais dão acesso direto ao segundo módulo do Ensino Técnico, é constituída de 30 questões-teste, também com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.</p>
							<br/>
						<a href="https://www.vestibulinhoetec.com.br/home/" class="button">Inscreva-se</a>
					</div>
					<div class="section-aboutus--right nova">
						<img src="images/etec.png">
					</div>
				</div>
			</div>
	

		</section>
    
	
    <footer style="background-color:#0000ff  ; color: white; padding: 20px;">
        <div style="text-align: center;">
            <p>© 2024 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

		


      
