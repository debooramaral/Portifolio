
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icone na navegação da pagina-->
    <link rel="shortcut icon" href="./imgs/icons8-cursos-48.png" type="">
    <!--css-->
    <link rel="stylesheet" href="estilo.css">
    <!--icones media social-->
    <script src="https://kit.fontawesome.com/4535497667.js" crossorigin="anonymous"></script>
    
    <title>Amaral_DSA</title>
</head>
    <div id="boasvindas">
        <h1> seja bem vindx ☺</h1>
    </div>
<body>
    <nav class="navbar">
        <div class="menu">
            <ul class="list">
                <li><a href="#apresentacao">Inicio</a></li>
                <li><a href="#objetivos">Objetivo</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#footer">Login</a></li>
            </ul>
        </div>
    </nav>

    <section id="apresentacao">
        <div>
            <p class="textoapresentaçao">Eu sou a Débora e este é um lugar que você saberá um pouco sobre mim !</p>
        </div>
        
        <div class="img1">
            <img src="./imgs/minha_fota.jpeg">
        </div>
        
    </section>

    <section id="objetivos">
        <div class="titulo">
            <h3>Objetivo •</h3>
        </div>
        <div class="msgobjetivo">
            <p>Portifólio desenvolvido com o intuito de demonstrar os projetos desenvolvidos no ultimo ano até o momento. Iniciante na área de programação e progredindo cada vez mais com várias tecnologias e ferramentas. Concluindo o curso da Fabrica de Software de Tecnico de Desenvolvimento de Sistemas do SENAC HUB ACADEMY</p>
        </div>
    </section>

    <section id="projetos">
        <div class="tituloprojetos">
            <h3>Projetos Realizados •</h3>
        </div>

        <div class="carrossel-slides">
            <div class="slider">
                <div class="slides">

                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <input type="radio" name="radio-btn" id="radio6">
                    <input type="radio" name="radio-btn" id="radio7">
                    <input type="radio" name="radio-btn" id="radio8">
    
                    <div class="item first"><img src="./imgs/python.png" width="650" height="550" alt=""></div>
                    <div class="item"><img src="./imgs/requisito jera.PNG" width="650" height="550" alt=""></div>
                    <div class="item"><img src="./imgs/UseCaseDiagram1a.png" width="450" height="550" alt=""></div>
                    <div class="item"><img src="./imgs/hubkey manual.PNG" width="450" height="550" alt=""></div>
                    <div class="item"><img src="./imgs/TELA 3 CHAVES.png" width="650" height="550" alt=""></div>
                    <div class="item"><img src="./imgs/banco de dados 2.PNG" width="650" height="550" alt=""></div>
                    <div class="item"><img src="./imgs/tela kits jera.png" width="650" height="550" alt=""></div>
                    <div class="item"><img src="./imgs/react native.png" width="450" height="550" alt=""></div>
    
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                        <div class="auto-btn6"></div>
                        <div class="auto-btn7"></div>
                        <div class="auto-btn8"></div>
                    </div>
    
                    <div class="manual-navigation">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                        <label for="radio5" class="manual-btn"></label>
                        <label for="radio6" class="manual-btn"></label>
                        <label for="radio7" class="manual-btn"></label>
                        <label for="radio8" class="manual-btn"></label>
                    </div>
    
                </div>
            </div>
        </div>

        <script src="script.js"></script>

    </section>
  
    <section id="cardhover">
        <div class="carddev">
            <ul class="ul">
                <li>
                   <a href="https://github.com/debooramaral"><i class="fa-brands fa-github"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/debooramaral/"><i class="fa-brands fa-instagram-square"></i></a>
                </li>
            </ul>
            <img src="./imgs/1616366778430.jpg" alt="">
            <div class="con-text">
                <h2>
                    DESENVOLVEDORA
                </h2>
                <p class="cardp">
                    Psicóloga por formação, não tive oportunidade de atuar na área e realizei um sonho de migrar para o mundo da tecnologia ♥
                </p>
                
            </div>
    </section>

    <section id="destaques">
        <div class="titulodestaques">
            <h3>Destaques •</h3>
        </div>

        <div class="destaques-item">
            <div>
                <img class="img2" src="./imgs/1634608334986_2.jpg">
            </div>
            <div>
                <img class="img3" src="./imgs/1648683427510_2.jpg" alt="">
            </div>
            <div>
                <img class="img4" src="./imgs/1645395871606_2.jpg" alt="">
            </div>
        </div>

    </section>

    <section id="contato">
        <div class="titulocontato">
            <h3>Contato •</h3>
        </div>
        <div class="formulario-contato">
            
            <div class="formulario">
                <form action="" method="post">
                    <div>
                        <label for="usuario">Nome:</label>
                        <input type="text" id="nome" name="nome-usuario">
                    </div>
                    <div>
                        <label for="email">E-Mail:</label>
                        <input type="email" id="email" name="email-usuario">
                    </div>
                    <div>
                        <label for="texto">Mensagem</label>
                        <textarea name="texto" id="texto" cols="40" rows="5"></textarea>
                    </div>
                    <div class="btn-contato">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="mensagem">
                <p>Envie uma mensagem para mim. <br>
                    Vamos conversar sobre ideias e projetos !</p>
            </div>
        </div>
        
    </section>

    <section id="footer">
        <footer>
            <div class="footer-content">
                <h3>Débora Santos Amaral</h3>
                <p>Todos os Direitos Reservados</p>
                <ul class="links-footer">
                    <div class="socialmedia">
                        <li><a href="https://www.linkedin.com/in/d%C3%A9bora-amaral-60b030140/"><i class="fa-brands fa-linkedin"></i></a></li>
                    </div>
                    <div class="paginas-footer">
                        <li class="cadastro-ftr"><a href="cadastro.php">Faça o Cadastro</a></li>
                        <li class="login-ftr"><a href="login.php">Faça o Login</a></li> 
                    </div>
                    
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Senac MS &copy; 2022 - Fabrica de Software. Designer By <span>• debooramaral •</span></p>
            </div>
        </footer>
    </section>
    
</body>
</html>

<!--https://fontawesome.com/kits/4535497667/use?welcome=yes conta kshfhfhdnnbbb-->