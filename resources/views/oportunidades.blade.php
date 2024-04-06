<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Oportunidades</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400,400italic,700,700italic,900,900italic%7CNunito+Sans:300,regular,600,700" media="all">	
        <script src="https://kit.fontawesome.com/27a76c8340.js" crossorigin="anonymous"></script>
       
        <link rel="stylesheet" href="../css/formulario.css"> 
        <link href="get.html" rel="stylesheet">
       
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    font-family: 'Nunito Sans', sans-serif;
    font-size: 13px;
    overflow-x: hidden; /* Ignora o que ultrapassar na horizontal*/;
}
header {
    height: 100px;
    background-color: white;
}
#hd {
    width: 100%;
    position: fixed;
	top: 0;
	z-index: 100;
}

.header {
    max-width: 1140px; /* 1140 px -> Máximo que conteúdo expandirá lateralmente*/
    height: 100px;
    margin: auto; /* Centralizar*/
    display: flex;
    align-items: center;
}

.menu {
    width: 50%;
    flex: 1;
    background-color: #FDFEFF;
    display: flex;
    justify-content: center;
}
.menu nav {
    margin-top: 8px;
}


/* Opção atual do menu */
.menu .atual a{
    color: #5129cc;
    background-color: #B3E5FC;
}
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



/* Formulário */
.section-form {
    background-color: #F2EDFF;
    padding-top: 50px;
    padding-bottom: 50px; 
}
.section-form-body {
    max-width: 1140px;
    margin: auto;
}

.container{
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    height: 50px;
    font-size: 20px;
    font-family: 'Merriweather';
    font-weight: 600;
    color: #333;
    text-align: center;
    vertical-align: middle;
}
.container #titulo-form{
    border-bottom: 3px solid #0000ff;
}
.container header::before{
    content: "";
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container form{
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    background-color: #0000ff;
    transition: 0.3s ease;
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 400px;
    font-size: 16px;
    font-weight: 600;
    margin: 18px 0px 20px 0px;
    color: #333;
    border-bottom: 2px solid #F2EDFF;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 10px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input:focus,
.input-field select:focus, textarea:focus {
    border-color: #9b59b6;
    box-shadow: 0 3px 6px rgba(224, 11, 139, 0.2);
}


.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}

.fields-check {
    display: flex;
    font-size: 15px;
}
.fields-check .coluna-check {
    flex: 1;
}
.coluna-check .atuacao-input {
    margin-bottom: 9px;
}

.div-textarea {
    width: 40%;
    margin: 10px auto; 
}

textarea {
    border-radius: 3px;
    padding: 9px 9px;
    border: 2px solid #F2EDFF;
    font-family: 'Nunito Sans',sans-serif;
    width: 100%;
    resize: none;
    outline: 0;
}





@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
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
  background-color: #f8f8f8;
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
  .logo {
  height: 64px;
  cursor: pointer;
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
			<div class="section-title">Concurso público</div>
			<div class="section-desc">etecs</div>
			<div class="section-body">

				<div class="section-aboutus">
					<div class="section-aboutus--left">
                        <p>Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023. O calendário do concurso para os cargos administrativos e os editais para docentes, que são liberados em lotes, estão disponíveis nos links abaixo.</p>
                        <br>
						<p>
Uma característica notável da ETEC da Zona Leste é a oferta de cursos técnicos modulares e descentralizados, que proporcionam uma abordagem flexível e adaptável ao aprendizado. Adicionalmente, a escola disponibiliza diversos cursos gratuitos, ampliando o acesso à educação de qualidade.
Com uma estrutura tão completa e uma gama diversa de cursos, a ETEC da Zona Leste se destaca como uma instituição comprometida com o desenvolvimento educacional e profissional de seus alunos.
                        </p>
                        <br><br>

						<a href="https://www.cps.sp.gov.br/concursopublico/" class="button">Saiba mais</a>
					</div>
					<div class="section-aboutus--right orione">
						<img src="images/concurso.jpg">
				</div>
			</div>
</section>

      <section class="default light" id="who">
			<div class="section-title">Processo Seletivo Simplificado</div>
			<div class="section-desc">Auxiliar de Docente</div>
			<div class="section-body">

				<div class="section-aboutus">
					<div class="section-aboutus--left">
                        <p>Prepare-se para embarcar em uma jornada de ensino e aprendizado! O Processo Seletivo Simplificado para Auxiliar de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia (FATECs) está com inscrições abertas.</p>
                        <br>
						<p>
            Participe deste processo seletivo e compartilhe seu conhecimento, experiência e paixão pelo ensino. As inscrições estão disponíveis para aqueles que desejam desempenhar um papel fundamental na educação técnica do Estado de São Paulo.
                        </p>
                        <br><br>

						<a href="https://urhsistemas.cps.sp.gov.br/dgsdad/SelecaoPublica/PSSAD/Abertos.aspx" class="button">Inscreva-se</a>
					</div>
					<div class="section-aboutus--right orione">
						<img src="images/auxilio.jpg">
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
