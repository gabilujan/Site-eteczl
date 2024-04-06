<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Etec zl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="shortcut icon" type="imagex/png" href="./images/logo.webp">
    <script src="scripts/script.js" defer></script>
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

body {
  background: url("/images/back.png") no-repeat;
  background-size: 100%;
  background-color: #f8f8f8;
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

.btn {
  cursor: pointer;
  background-color: #0000ff;
  border: none;
  padding: 10px 70px;
  color: white;
  border-radius: 6px;
  transition: 0.3s;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.14);
}
.btn:active {
  background-color:  #007bff;
}
.map {
  margin-top: 10px;
  margin-bottom: 10px;
}

.fotos {
  margin-top: -40px;
  padding: 15px 9%;
}
.texto {
  display: flex;
  justify-content: center;
}

.slider {
  margin-top: -80px;
  display: flex;
  width: 100%;
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}

.images {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 700px;
}

.slide {
  opacity: 0;
  transition: opacity 0.3s;
  position: absolute;
  width: 100%;
  border-radius: 10px;
}
.on {
  opacity: 1;
}

#prev-btn,
#next-btn {
  cursor: pointer;
  width: 30px;
  height: 30px;
  border: none;
  background-color: transparent;
}

#prev-btn img,
#next-btn img {
  width: 100%;
  height: 100%;
}

#prev-btn {
  transform: rotate(180deg);
}

.btnblog {
  margin-top: -70px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.projects {
  margin-top: 100px;
  padding: 15px 9%;
  padding-bottom: 8%;
}

.img1 {
  border-radius: 10px;
  margin-bottom: 10px;
}

.btnsm {
  margin-top: 10px;
}

.texto1 {
  margin-bottom: 20px;
}

.sm-container {
  margin-top: -160px;
  left: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s;
  pointer-events: none;
}

.sm-container.active {
  opacity: 1;
  pointer-events: auto;
}

.sm-container .popup-box {
  padding: 20px;
  width: 500px;
  background: white;
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.popup-box .btnclose {
  margin-top: 20px;
  width: 100%;
}

.popup-box h1 {
  font-size: 20px;
  margin-bottom: 10px;
}

.sm-container2 {
  margin-top: -160px;
  left: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s;
  pointer-events: none;
}

.sm-container2.active {
  opacity: 1;
  pointer-events: auto;
}

.sm-container2 .popup-box {
  padding: 20px;
  width: 500px;
  background: white;
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            <img src="images/burger-menu-svgrepo-com (1).svg" alt="" class="icon">
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
    <div class="home">
      <div class="box-container">
        <div class="box">
          <h1>
            SEJA BEM VINDO(A) A ETEC ZONA LESTE<br />
          </h1>
          <p class="text">
          A Etec Zona Leste, localizada estrategicamente na Avenida Águia de Haia, é um importante polo educacional em São Paulo. É reconhecida pela excelência educacional e desenvolvimento profissional dos alunos. Oferece uma variedade de cursos técnicos em áreas como informática, administração e eletrônica, preparando os alunos para o mercado de trabalho. Além disso, destaca-se por suas atividades extracurriculares, promovendo o desenvolvimento integral dos estudantes.          </p>
          <button class="btn" onClick="location.href='#email'">ENTRAR EM CONTATO</button>
        </div>
        <div class="box">
          <h1>ONDE NOS ENCONTRAR</h1>
          <p class="map">
            <iframe
            img src="images/encontrar.jpg"
              width="100%"
              height="300vh"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </p>
          <button class="btn" onClick="parent.open('https://www.google.com/maps/place/Etec+da+Zona+Leste/@-23.5231922,-46.475812,15z/data=!4m2!3m1!1s0x0:0x8076d1577db86cf1?sa=X&ved=1t:2428&ictx=111')">VEJA COMO CHEGAR</button>
        </div>
      </div>
    </div>

  <div class="texto" style="margin-bottom: -20px; margin-top: -150px;">
  <h1>FOTOS DA ETEC!</h1>
</div>

      <div class="slider" style="margin-top: -220px;">
        <button id="prev-btn"><img src="images/arrow.png"></button>
        <div class="images">
          <img src="images/imagem4.jpg" alt="" class="slide on">
          <img src="images/imagem3.webp" alt="" class="slide">
          <img src="images/imagem2.webp" alt="" class="slide">
          <img src="images/imagem1.webp" alt="" class="slide">
        </div>
        <button id="next-btn"><img src="images/arrow.png" alt=""></button>
      </div>
      <div class="btnblog">
          <button class="btn" onClick="parent.open('https://www.instagram.com/eteczonalesteoficial/')">ACESSE NOSSO INSTAGRAM</button>
      </div>
    </div>

    <div class="projects" id="projects">
      <div class="texto texto1">
          <h1>INFORMAÇÕES</h1>
      </div>

      <div class="box-container">
        <div class="box">
          <img src="images/testes.png" alt="" class="img1">
          <h1>
             EQUIPE DE DIREÇÃO
          </h1>
          <button class="btn btnsm sm1">SAIBA MAIS</button>      
          <div class="sm-container">
            <div class="popup-box">
              <h1>EQUIPE DE DIREÇÃO</h1>
              <p class="text">A Direção Escolar é o departamento executivo encarregado da organizar as atividades administrativas e pedagógicas da Etec. Suas atribuições, indicação e designação, são realizadas de acordo com o Capítulo IV, Seção I do Regimento Comum das Etecs (Deliberação CEETEPS nº 87, de 08 de dezembro de 2022).</p>
              <button class="close btn btnclose saibamenos">FECHAR</button>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="images/EQUIPE.jpg" alt="" class="img1">
          <h1>CORDENADORES</h1>
          <button class="btn btnsm sm2">SAIBA MAIS</button>
          <div class="sm-container2">
            <div class="popup-box">
              <h1>CORDENADORES</h1>
              <p class="text">As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento do ensino, à supervisão de sua execução, ao controle das atividades docentes em relação às diretrizes didáticas pedagógicas e administrativas, bem como pela otimização dos recursos físicos e didáticos disponíveis para os cursos mantidos pelas Etecs.</p>
              <button class="close btn btnclose saibamenos2">FECHAR</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="email" id="email">
      <div class="texto">
        <h1>CONTATO</h1>
      </div>
      <div class="container-form">
        <form class="contact_form" action="#">
        <h1>Telefone: (11) 2045-4000 | (11) 2045-4011</h1>
        <h1>  E-mail: e211dir@cps.sp.gov.br</h1>
        <h1>   Facebook: Eteczonalesteoficial</h1>

        
        </form>
      </div>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>
      const form = document.querySelector('.contact_form'),
        name = document.querySelector('.name'),
        email = document.querySelector('.emailinput'),
        phone = document.querySelector('.phone'),
        msg = document.querySelector('.message');

        
    </script>
    
    <footer style="background-color:#0000ff  ; color: white; padding: 20px;">
        <div style="text-align: center;">
            <p>© 2024 Etec Zona Leste. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
  
