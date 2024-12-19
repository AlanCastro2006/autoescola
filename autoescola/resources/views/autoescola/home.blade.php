{{-- Puxando o layout --}}
@extends('layouts.layout')

{{-- Mudando o título da página dinamicamente --}}
@section('view-title', 'Autoescola')

{{-- Conteúdo da página --}}
@section('content')

{{-- * Hero Section * --}}

<body class=" page-template-template-frontpage ">
    <div>
        <div id="content">
            <main id="main" class="site-main" role="main">
                <section id="hero-section" class="section-slider screenr-section swiper-slider full-screen fixed hero-section">
                    <div class="swiper-container" data-autoplay="7000">
                        <div class="swiper-wrapper">
                            <div id="" class="swiper-slide slide-align-left slide_content slide_content_layout_1"
                                style="background-image: url('https://www.autoescolacaleffi.com.br/wp-content/uploads/2024/05/2023-12-11-1.jpg')">
                                <div class="swiper-slide-intro txt-img-home">
                                    <div class="swiper-intro-inner">
                                        <p>
                                            <img decoding="async" class="logo1" src="https://www.autoescolacaleffi.com.br/wp-content/uploads/2024/05/logo1-4.svg">
                                        </p>
                                        <h1>
                                            <b>
                                                <span>
                                                    PIONEIRISMO
                                            </b>
                                            <span>
                                                <br />
                                                E
                                            </span>
                                            <b>
                                                <span class="intro2">
                                                    INCLUSÃO
                                                </span>
                                        </h1>
                                        <p><span class="txt-inicial">FORMANDO CONDUTORES <b>DESDE 1989</b></span></p>
                                        <p><a class="btn btn-lg btn-secondary-outline btn-servicos"
                                                href="index.html#servicos">Serviços</a> <a
                                                class="btn btn-lg btn-secondary-outline"
                                                href="index.html#contact">Contato</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
        <div class="container-fluid">
            <div class="row">

                {{-- Conteúdo do Hero --}}
                <div class="hero-content col-md-12 about-small">
                    <div class="hero-text">
                        <h1 class="tnr-bold tnr-title-size tnr-title-size--lg">SOBRE A CALEFFI<br></h1>
                        <p class="roboto-regular cores">Desde 1989, a <span class="about-content-text-highlight">Autoescola Caleffi</span> é sinônimo de <span class="about-content-text-highlight">excelência</span> na formação de condutores. Com uma história marcada por <span class="about-content-text-highlight">pioneirismo</span>, <span class="about-content-text-highlight">inovação</span> e <span class="about-content-text-highlight">dedicação</span>, já capacitamos mais de <span class="about-content-text-highlight">20.000 motoristas</span>, sempre colocando a segurança e a individualidade de cada aluno em primeiro lugar.
                            Aqui, você encontrará <span class="about-content-text-highlight">instrutores experientes</span>, <span class="about-content-text-highlight">tecnologias modernas</span> e um método de <span class="about-content-text-highlight">ensino personalizado</span> que garante confiança ao volante e um aprendizado tranquilo. Tudo isso com a qualidade e o compromisso de quem é <span class="about-content-text-highlight">referência na região</span>.
                            Na Caleffi, sua jornada para conquistar a habilitação começa com <span class="about-content-text-highlight">suporte completo</span> e um <span class="about-content-text-highlight">ambiente acolhedor</span>. Matricule-se agora e descubra o prazer de dirigir com quem entende do assunto!</p>
                    </div>

                    {{-- Botão de Matricula --}}
                    <a class="main-btn main-btn--hero txt-btn-small" href="#contactForm">
                        <span class="">MATRICULE-SE</span>
                        <span class="ri--arrow-down-s-line"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- * About Us Section * --}}
    <div id="about-us-section" class="hidden-element">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">

                {{-- Imagem da Fachada da Autoescola --}}
                <img src="{{ Vite::asset('resources/img/tela-home/img-autoescola.jpeg') }}" class="col-lg-6 col-sm-12 img-fluid" alt="">

                {{-- Conteúdo do Sobre Nós --}}
                <div class="col-lg-6 col-sm-12 d-flex justify-content-center align-items-center">
                    <div id="about-us-content">
                        <h2 class="tnr-bold tnr-title-size">SEJA BEM VINDO</h2>
                        <p class="roboto-light">Dê uma olhada em toda a estrutura de nosso local e fique a par de como as coisas funcionam por aqui!</p>
                        <a class="main-btn main-btn--about roboto-light" href="/sobre-nos">
                            <span class="txt-btn-small">SAIBA MAIS SOBRE A CALEFFI</span>
                            <span class="material-symbols-light--keyboard-double-arrow-right"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- * Services Section * --}}
    <section id="servicos" class="section-services section-padding-lg section-meta screen-section">
        <div class="container">
            <div class="section-title-area cores">
                <div class="section-subtitle">mais do que uma autoescola</div>
                <h2 class="section-title">Nossos Serviços</h2>
            </div>
            <div class="section-content services-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card cartao card-block service__media-icon">

                            <div class="service-card-icon">
                                <i class="fa-regular fa-id-card fa-3x" aria-hidden="true"></i>
                            </div>
                            <a href="https://www.autoescolacaleffi.com.br/servicos/" class="cartao-conteudo">
                                <h3 class="cartao-titulo">PRIMEIRA HABILITAÇÃO</h3>
                                <span class="cartao-texto">
                                    Conte conosco para obter sua permissão para dirigir!
                                    Concedida para as categorias “A” e “B”, ela tem validade de um ano.
                                    Realize seus exames teórico e práticos conosco e garanta sua licença.
                                </span>
                                <a class="cartao-botao" href="https://www.autoescolacaleffi.com.br/servicos">
                                    <small>
                                        <b>
                                            VER TODOS SERVIÇOS
                                        </b>
                                    </small>
                                </a>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card cartao card-block service__media-icon cartao">
                            <div class="service-card-icon">
                                <i class="fa-regular fa-address-card fa-3x" aria-hidden="true"></i>
                            </div>
                            <a href="https://www.autoescolacaleffi.com.br/servicos/" class="cartao-conteudo">
                                <h3 class="cartao-titulo">CNH DEFINITIVA</h3>
                                <span class="cartao-texto">
                                    Já está há mais de um ano com sua licença para dirigir e não
                                    cometeu nenhuma infração gravíssima? Nós ajudamos você a conquistar sua
                                    habilitação definitiva.
                                </span>
                                <a class="cartao-botao" href="https://www.autoescolacaleffi.com.br/servicos">
                                    <small>
                                        <b>
                                            VER TODOS SERVIÇOS
                                        </b>
                                    </small>
                                </a>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row  -->

            </div><!-- /.section-content -->
        </div>
    </section>

    <section id="counter" class="screenr-section section-counter section-padding section-padding-lg section-meta numb">
        <div class="container">
            <div class="section-title-area">
                <div class="numbo cores">NOSSOS NÚMEROS IMPRESSIONAM!</div>
            </div>
            <div class="counter-contents" data-layout="4">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="counter-item counter-item-" style="background-color: #004c6b">
                                <span class="counter-title">ALUNOS FORMADOS</span>

                                <div class="counter__number">
                                    <span class="n counter">20000</span>
                                </div>
                                <i class="fa-solid fa-people-line fa-3x"></i>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="counter-item counter-item-" style="background-color: #e86240">
                                <span class="counter-title">APROVAÇÃO DETRAN</span>

                                <div class="counter__number">
                                    <span class="n counter">99</span>
                                    <span class="after-number">%</span>
                                </div>
                                <i class="fa-solid fa-car-rear fa-3x"></i>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="counter-item counter-item-" style="background-color: #e6b800">
                                <span class="counter-title">ALUNOS ESPECIAIS</span>

                                <div class="counter__number">
                                    <span class="n counter">2000</span>
                                </div>
                                <i class="fa-solid fa-wheelchair fa-3x"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @endsection