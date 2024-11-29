<!DOCTYPE html>
<html lang="lp-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Cabeçario -->
    <center>
        <header>
            <div class=" container ">
                <h1> Bem- Vindo ao CinePlay </h1>
                <P class="p1">Estamos felizes de te-lo aqui! Preencha o formulário abaixo para mais informações sobre filmes e
                    cinemas perto de você</P>
                <nav>
                    <ul>
                        <li><a href="">Filmes</a></li>
                        <li><a href="">Sessão Pipoca</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </center>
    <main>

        <p class="p2"> Aqui você acha os melhores filmes nas melhores qualidades, você pode <br>
            garantir seus ingressos e até ja comprar sua pipoca e refri na hora do filme <br>
            para seu momento ficar melhor. </p> <br>
        <div class="forms">
            <form action="/enviar-formulario" method="post">
                <label for="Nome">Nome:</label>
                <input type="text" id="Nome" name="Nome" placeholder="Digite seu nome aqui"> <br>

                <label for="Email">Email:</label>
                <input type="email" id="Email" name="Email" placeholder="Digite seu email aqui"> <br>

                <label for="Cidade">Cidade:</label>
                <input type="text" id="Cidade" name="Cidade" placeholder="Digite sua cidade aqui"> <br>

                <button type="submit">Cadastrar</button>
            </form>

            <img src="cinema.jpg.png" alt="cinema">

            <nav>
              <ul class= "navbar-nav">
                <li class="nav-item">
                  <button onclick="location.href= 'entrar.php'" class="botao-sair" type="button"> LOGIN </button> 
                </li> 
              </ul>
              </nav>
              </a>

        </div>

        <center>
            
        </center>
    </main>


</body>

</html>