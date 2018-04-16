<!doctype html>
<html lang="en">

<head>
    <title>Portfólio | Edson Lucas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='1992992630981900' property='fb:app_id'>
    <meta property="og:title" content="Portfólio | Edson Lucas">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://portfolio.edsonlucas.com.br/">
    <meta property="og:description" content="Desenvolvedor de web sites criativos, simples e responsivos com a melhor tecnologia de gerenciamento de conteúdo, aliado ao design moderno.">
    <meta name="description" content="Desenvolvedor de web sites criativos, simples e responsivos com a melhor tecnologia de gerenciamento de conteúdo, aliado ao design moderno.">
    <meta name="keywords" content="websites, portfolio, criação de sites, programador, desenvolvedor, web designer">
    <meta name="robots" content="index,follow">

    <!-- Icon -->
    <link rel="icon" href="assets/images/favicon.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/reset.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/pure.css" />

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Font Icons -->
    <link rel="stylesheet" href="assets/icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/icon-fonts/essential-regular-fonts/essential-icons.css" />

    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1992992630981900',
                xfbml: true,
                version: 'v2.10'
            });
            FB.AppEvents.logPageView();
        };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk')); 
    </script>
</head>

<body class="diag">

    <!-- LOADER -->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!--HOME-->
    <section class="home" id="home">
        <div class="home-content">
            <div class="container -mt60">
                <img src="assets/images/logo.png" class="img-center img-responsive" alt="Edson Lucas Desenvolvedor Web" />
                <p class="color-light pt10">Web sites criativos, simples e responsivos com a melhor tecnologia
                    <br /> de gerenciamento de conteúdo, aliado ao design moderno.</p>
            </div>
        </div>
        <svg class="diagonal home-left hidden-sm hidden-xs" width="21%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="diagonal home-right hidden-sm hidden-xs" width="80%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
    </section>

    <!--ABOUT-->
    <section class="about dgray-bg" id="about">
        <div class="about type-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb200">
                        <!-- about image -->
                        <div class="col-md-4 col-sm-12 about-image mt30 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="row">
                                <img src="assets/images/edson.jpg" alt="Edson Lucas">
                            </div>
                        </div>
                        <!-- about text -->
                        <div class="col-md-7 col-md-offset-1 col-sm-12 about-text wow fadeInUp" data-wow-delay="0.6s">
                            <div class="section-title dleft mb30">
                                <br>
                                <h2>SOBRE MIM</h2>
                            </div>
                            <p>Escrevi meu primeiro &lt;h1&gt;Hello World&lt;/h1&gt; por volta de 2015, mas foi em 2016 que
                                comecei a trabalhar com desenvolvimento web de verdade. Focado no desenvolvimento front-end,
                                apaixonado por Javascript e PHP e pelo ecossistema das tecnologias ReactJs e React Native.</p>
                            <br>
                            <br />
                            <ul class="icons">
                                <li>
                                    <a href="https://www.linkedin.com/in/edson-lucas-annichine-b2440813b/" class="icon circle fa-linkedin">
                                        <span class="label">Linkedin</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/EdsonLucas" class="icon circle fa-github">
                                        <span class="label">Github</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:contato@edsonlucas.com.br" class="icon circle fa-envelope">
                                        <span class="label">Email</span>
                                    </a>
                                </li>
                                <br>
                                <br>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="diagonal-gray" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
                <path d="M0 0 L70 100 L100 0 Z"></path>
            </svg>
        </div>
    </section>

    <!--PORTFOLIO-->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-title dleft mt120 mb90">
                <h2>PORTFOLIO</h2>
            </div>
            <!--Portfolio Items-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <?php

                            $alt = array (
                                'Edson Celulares',
                                'Empire',
                                'Ilha Toldos',
                                'Perini Cosméticos',
                                'Pharmacia Medicinallis',
                                'Sanremo',
                            );

                            for($i = 0; $i < sizeOf($alt); $i++) {
                              echo '<!-- Item -->
                                    <div class="single_item col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                        <a data-toggle="modal" data-target="#linkname'.$i.'">
                                            <img src="assets/images/servicos/work-'.$i.'.png" alt="'.$alt[$i].'">
                                        </a>
                                    </div>

                                    <div class="modal" tabindex="-1" role="dialog" id="linkname'.$i.'">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <div class="col-md-12 link-btn col-sm-8 col-xs-8">
                                                <h2 class="mb0">'.$alt[$i].'</h2>
                                            </div>
                                            <div class="col-xs-4 link-btn hidden-lg hidden-md">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            </div>
                                            <div class="modal-body">
                                            <img class="img-responsive" src="assets/images/servicos/big/work-'.$i.'.png" alt="'.$alt[$i].'" />
                                            </div>
                                        </div>
                                        </div>
                                    </div>';
                            }
                          ?>
                    </div>
                </div>
            </div>
        </div>
        <svg class="diagonal-white bg-brown hidden-sm hidden-xs" width="100%" height="170" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 0 L30 100 L100 0 Z"></path>
        </svg>
    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">
        <div class="container-fluid bg-brown ">
            <div class="container">
                <div class="col-md-12 home-content">
                    <div class="section-title mt60">
                        <h2 class="mb30 color-white">DÚVIDAS, SUGESTÕES OU RECLAMAÇÕES</h2>
                        <p class="tcenter color-white">Utilize este canal para enviar elogios, dúvidas, sugestões ou reclamações.
                            <br />Estamos sempre buscando aprimoramento da qualidade de nossos serviços.</p>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-8 form mt30 mb50 wow fadeInUp bd-primary bg-white p50" data-wow-delay="0.6s">
                    <div class="page-title sub">
                        <h5>Entre em Contato</h5>
                    </div>
                    <form class="contact-form mt60" method="POST" action="http://webvila.com.br/contato/auto_envio.php">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-inp" type="text" name="Nome" placeholder="Nome" required />
                            </div>
                            <div class="col-md-6">
                                <input class="form-inp" type="email" name="E-mail" placeholder="E-mail" required />
                            </div>
                            <div class="col-md-6">
                                <input class="form-inp" type="text" name="Telefone" placeholder="Telefone" required />
                            </div>
                            <div class="col-md-6">
                                <input class="form-inp" type="text" name="Assunto" placeholder="Assunto" required />
                            </div>
                            <div class="col-md-12">
                                <textarea name="Mensagem" placeholder="Escreva sua mensagem aqui..." rows="8" required></textarea>
                                <button class="sitebtn pull-center radius7" type="submit">
                                    <h6 class="mb0 color-white">ENVIAR</h6>
                                </button>
                                <input type="hidden" name="site" value="http://portfolio.edsonlucas.com.br">
                                <input type="hidden" name="email" value="contato@edsonlucas.com.br">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-brown">
        <div class="container">
            <ul class="icons">
                <li>
                    <a href="https://www.facebook.com/edsonlucasweb/" class="icon circle fa-facebook">
                        <span class="label">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:contato@edsonlucas.com.br" class="icon circle fa-envelope">
                        <span class="label">Email</span>
                    </a>
                </li>
                <li>
                    <a href="tel:027998972337" class="icon circle fa-phone">
                        <span class="label">Telefone</span>
                    </a>
                </li>
                <br>
                <br>
            </ul>
            <span class="color-light">contato@edsonlucas.com.br</span>
            <br />
            <span class="color-light mb10">(27) 99897-2337</span>
            <p class="color-gray">© 2018 Edson Lucas. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Javascripts -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>