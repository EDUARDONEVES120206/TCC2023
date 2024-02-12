<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="/img/mini_logo.png" href="../img/logobranco.png">
    <link rel="stylesheet" href="../css/styleloja.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Loja</title>
</head>
<body>
<nav class="menu-lateral">

<div class="btn-expandir">
    <i class="bi bi-list" id="btn-exp"></i>
</div>

<ul>
    <li class="item-menu">
        <a href="../usuario/home.php">
            <span class="icon"><i class="bi bi-house-door-fill"></i></span>
            <span class="txt-link">Inicio</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="../usuario/academias.php">
            <span class="icon"><i class="bi bi-geo-alt"></i></span>
            <span class="txt-link">Academias</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="../usuario/conta_usuario.php">
            <span class="icon"><i class="bi bi-person-circle"></i></span>
            <span class="txt-link">Conta</span>
        </a>
    </li>
    <li class="item-menu ativo">
        <a href="loja.php">
            <span class="icon"><i class="bi bi-bag"></i></span>
            <span class="txt-link">Loja</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="#">
            <span class="icon"><i class="bi bi-gear"></i></span>
            <span class="txt-link">Suporte</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="../fechar_sessao.php">
            <span class="icon"><i class="bi bi-door-open"></i></span>
            <span class="txt-link">Sair</span>
        </a>
    </li>

</ul>
</nav>

<header>
        <div class="interface" style="margin-left: 150px;">
            <div class="logo">
            <a href="../loja/loja.php">
                    <img src="../img/logo.png" alt="Logo Alpha MT">
                </a>
            </div><!--logo-->

            <div class="navbar">
                <div class="header-inner-content">
                    <ul>
                        <a href="whey.php"><li>Whey Protein</li></a>
                        <a href="creatina.php"><li>Creatina</li>
                        <a href="pretreino.php"><li>Pre-Treino</li>
                        <a href="roupas.php"><li>Roupas</li>
                        <a href="acessorios.php"><li>Acessorios</li>
                    </ul>
                </div>
            </div>
            <div class="nav-icon-container">
            <a href="carrinho.php"> <i class="bi bi-cart"></i></a>
            <i class="bi bi-list" id="btn-exp"></i>
            </div>
        </div><!--inteface-->
    </header>
    <script src="../js/menu.js"></script>

    <main>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>

        <div class="produtos">

            <div class="thumb-bar">
                <img src="../img/imgprod/blusa2.png" alt="Image 3" class="thumb" />
                <div class="imgtab"><img src="../img/imgprod/tamanhotab.png" alt="Image 4" class="thumb" /></div>

                <!-- Add more thumbnail images as needed -->
            </div>
            <div class="full-img">
                <img class="displayed-img" src="../img/imgprod/blusa2.png" alt="Image 3" />

                <div class="overlay"></div>
            </div>


            <section class="especialidades">
                <div class="interface">
                    <div class="flex">
                        <div class="produtos-box">
                            <label for="tamanho">Escolha um tamanho:</label>
                            <br>
                            <select id="tamanho" name="tamanho">
                                <option value="p">P</option>
                                <option value="m">M</option>
                                <option value="g">G</option>
                                <option value="gg">GG</option>
                            </select>
                        </div><!--produtos-box-->
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--especialidades-->

            <section class="especialidades">
                <div class="interface">
                    <div class="flex">
                        <div class="produtos-box">
                        <h2>BLUSA DE FRIO <span>ALPHA PLUS</span></h2>
                        <p>R$200,55</p>
                        <p><del>R$220,99</del></p>
                            <center><a href="../loja/carrinho.php"><button class="btn btn-third"> ADICIONAR AO CARRINHO</button></a></center>
                        </div><!--produtos-box-->
                    </div><!--flex-->
                </div><!--interface-->
            </section><!--especialidades-->
        </div>
        </div>

        <div class="texto-produto">
            <h1>SOBRE:</h1>
            <h3>A blusa da marca fictícia Alpha MT é a escolha perfeita para quem valoriza um equilíbrio entre elegância e conforto em seu vestuário diário. Projetada para atender às necessidades de homens e mulheres modernos, esta blusa oferece estilo versátil e conforto inigualável.</h3>
            <br><br>
            <h3>Características Principais:</h3>
            <ol>
                <li>
                    <bold>Estilo Sofisticado:</bold> A blusa Alpha MT possui um design elegante e sofisticado, adequado para diversas ocasiões, seja em eventos formais ou encontros casuais.
                </li>
                <li>
                    <bold>Conforto Premium:</bold> Fabricada com tecidos de alta qualidade, esta blusa oferece um ajuste confortável que permite movimentos naturais e sem restrições.
                </li>
                <li>
                    <bold>Versatilidade:</bold> Seu design versátil permite que você a use em diferentes cenários, desde um dia de trabalho até um jantar especial.
                </li>
                <li>
                    <bold>Durabilidade e Qualidade:</bold> A Alpha MT se compromete com a durabilidade, assegurando que a blusa mantenha sua elegância mesmo após muitas lavagens.
                <li>
                    <bold>Variedade de Cores e Modelos:</bold> Disponível em uma ampla gama de cores e modelos, a blusa Alpha MT permite que você escolha a que melhor se adequa ao seu gosto pessoal.
                </li>
            </ol>
            <br><br>
            <h3>Seja você um profissional ocupado, um socializador nato ou alguém que simplesmente valoriza a combinação de estilo e conforto, a blusa Alpha MT é uma peça de vestuário que proporciona uma experiência única. Ela não apenas ajuda a expressar seu estilo pessoal, mas também oferece o conforto necessário para enfrentar todas as situações do seu dia a dia.</h3>
        </div>

        <div class="img-qualidade">
            <center>
                <img src="../img/imgprod/selos.png" alt="">
            </center>
        </div>

    </main>
    <br><br><br><br><br><br>
    <script src="../js/galery.js"></script>


   

    

    

    <div class="interface">
        <footer>
            <div class="interface">
                <div class="copyright">
                    &copy; 2023 I.T.S.A.S. Todos os direitos reservados.
                </div>
            </div>
        </footer>


</body>
</html>