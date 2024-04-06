<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Instituição</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400,400italic,700,700italic,900,900italic%7CNunito+Sans:300,regular,600,700" media="all">	
        <script src="https://kit.fontawesome.com/27a76c8340.js" crossorigin="anonymous"></script>
        
     
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}





/* Opção atual do menu */

.button {
    display: inline-block;
    background-color: #b28756;
    color: white;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 600;
    padding: 10px 30px;
    margin-top: 30px;
    border-radius: 20px;
    font-family: 'Nunito Sans', sans-serif;
    text-decoration: none;
}
button:focus {
    outline: 0;
}

/* Descrição breve antes do formulário*/
.default {
    color: black;
    background-color: #FCE9CB;
    padding-top: 115px;
    padding-bottom: 50px;   
}
.default .section-title, .default .section-desc  {
    text-align: center;
    text-transform: uppercase;
    font-weight: 600;
}
.default .section-title {
    font-size: 20px;
    font-family: 'Merriweather';
}
.default .section-desc {
    font-size: 12px;
    color: #6c757d;
    margin-top: 10px;
    margin-bottom: 40px;
}
.default .section-body {
    max-width: 1140px;
    margin: auto;
}
/* Tema 1 */
.default.light {
    background-color: white;
}


.section-aboutus {
    display: flex;
}
.section-aboutus--left {
    flex: 1;
}
.section-aboutus--left p {
    font-size: 16px;
    font-family: 'Nunito Sans', sans-serif;
    line-height: 28px;
}
.section-aboutus--right {
    width: 500px;
    text-align: center;
}
.section-aboutus--right img {
    height: 300px;
    width: auto;
    box-shadow: 1px 1px 10px #333;
}   

/* Formulário */
.section-form {
    background-color:  #FFFFFF ;
    padding-top: 50px;
    padding-bottom: 50px; 
}
.section-form-body {
    max-width: 1140px;
    margin: auto;
}


/* Botões*/

.button {
    display: inline-block;
    background-color:  #007bff;;
    color: white;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 600;
    padding: 10px 30px;
    margin-top: 30px;
    border-radius: 20px;
    font-family: 'Nunito Sans', sans-serif;
}
button:focus {
    outline: 0;
}



/* MENU ACIMA*/

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
  background-color: #0000;
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
        <section class="default light" id="who">
			<div class="section-title">infraestrutura</div>
			<div class="section-desc">Voluntariado</div>
			<div class="section-body">

				<div class="section-aboutus">
					<div class="section-aboutus--left">
                        <p>Em 6 de abril de 2002, foi inaugurada a ETEC da Zona Leste de São Paulo, um centro de ensino que oferece uma gama diversificada de cursos técnicos e superiores. Localizada na Avenida Águia de Haia, 2683, Cidade A.E. Carvalho, São Paulo, a escola possui uma infraestrutura completa.
Suas instalações abrangem desde salas de aula modernas até laboratórios bem equipados, uma biblioteca bem fornecida, enfermaria, teatro, áreas de lazer e duas quadras poliesportivas, uma delas coberta. Além disso, o amplo estacionamento e o sistema de segurança interno, com câmeras de vigilância, oferecem comodidade e tranquilidade aos estudantes e visitantes.</p>
                        <br>
						<p>
Uma característica notável da ETEC da Zona Leste é a oferta de cursos técnicos modulares e descentralizados, que proporcionam uma abordagem flexível e adaptável ao aprendizado. Adicionalmente, a escola disponibiliza diversos cursos gratuitos, ampliando o acesso à educação de qualidade.

Com uma estrutura tão completa e uma gama diversa de cursos, a ETEC da Zona Leste se destaca como uma instituição comprometida com o desenvolvimento educacional e profissional de seus alunos.
                        </p>
                        <br><br>

						<a href="/" class="button">Voltar</a>
					</div>
					<div class="section-aboutus--right orione">
						<img src="images/infra.jpg">
				</div>
			</div>
	
		</section>
        
        <section class="section-form" id="form-sec">
            <div class="section-form-body">

                <div class="container">
                    <h1 style="text-align: center;  margin-bottom: 20px;">Nossa historia</h1>
            
                    
                        Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
<p>Fundada em 2008, a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.
Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.
Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade. </p>
                        
                    
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

        
</body>
</html>
