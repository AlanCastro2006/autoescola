{{-- Puxando o layout --}}
@extends('layouts.layout')

{{-- Mudando o título da página dinamicamente --}}
@section('view-title', 'Sobre Nós - Autoescola')

{{-- Conteúdo da página --}}
@section('content')

{{-- * About Banner Section * --}}
<div class="d-flex justify-content-center align-items-center" id="about-banner-section">
    <h1 class="tnr-bold tnr-title-size tnr-title-size--lg">SOBRE NÓS</h1>
</div>

{{-- * About Content Section * --}}
<div id="about-content-section">
    <div class="container d-flex flex-column">

        {{-- Imagem da Autoescola e Texto --}}
        <div class="row justify-content-between">

            {{-- Imagem Autoescola Antigo --}}
            <div class="col-lg-5 col-sm-12 text-center about-content-margin-bottom">
                <img src="{{ Vite::asset('resources/img/tela-about-us/img-carro.png') }}" class="img-fluid" alt="">
            </div>

            {{-- Texto Autoescola --}}
            <div class="col-lg-5 col-sm-12">
                <h2 class="roboto-bold cores">Nossa história</h2>

                <p class="roboto-regular">Fundada em abril de 1989, a <span class="about-content-text-highlight">Autoescola Caleffi</span>Fundada em abril de 1989,

                    <span class="about-content-text-highlight">a Autoescola Caleffi </span>já formou mais de <span class="about-content-text-highlight">20.000 condutores</span>, e isso é motivo de muito orgulho.

                    A atuação do Grupo Caleffi tem crescido ao longo dos anos por meio de referências à sua
                    <span class="about-content-text-highlight">excelente reputação </span>de fornecer <span class="about-content-text-highlight">treinamento de alta qualidade </span>para motoristas.

                    O Grupo entende que cada aluno tem seu tempo e método de aprendizado e seus instrutores <span class="about-content-text-highlight">(profissionais experientes) </span>são <span class="about-content-text-highlight">licenciados </span> e <span class="about-content-text-highlight">certificados</span>, trabalhando com cada aluno de forma individualizada para atender às suas necessidades.

                    O time de instrutores tem em média <span class="about-content-text-highlight">15 anos de experiência </span>em ensino e participam de seminários de educação continuada para manter seus conhecimentos sobre mudanças de regulamentos, segurança do motorista e regras de trânsito.

                    Um dos grandes diferenciais da Autoescola Caleffi é oferecer <span class="about-content-text-highlight">horários de aula flexíveis </span>para permitir que os alunos frequentem a autoescola conforme sua disponibilidade
                </p>

                <p class="roboto-regular"><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span></p>
            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="col-lg-5 col-sm-12 about-content-margin-bottom">

                <h2 class="roboto-bold cores">Gestão</h2>

                <p class="roboto-regular">Após 18 anos como instrutor de trânsito, o <span class="about-content-text-highlight">Sr. Hélvio Caleffi</span>, contando com o apoio de seus irmãos <span class="about-content-text-highlight">Antônio </span>e <span class="about-content-text-highlight">Valdir</span>, decidem se unir para fundar a <span class="about-content-text-highlight">Autoescola Caleffi</span>.

                    Um automóvel e uma motocicleta usada,<span class="about-content-text-highlight"> muita força de vontade</span> e <span class="about-content-text-highlight">determinação </span>marcaram o início do empreendimento.

                    Fomos <span class="about-content-text-highlight">pioneiros </span>na cidade de Amparo – SP em oferecer aulas para Habilitação nas <span class="about-content-text-highlight">Categorias “C, D e E”</span>.

                    Para tanto, foi adquirido um ônibus (usado para ministrar as aulas) e mais tarde, foi realizada a aquisição de uma Carreta para a Habilitação na <span class="about-content-text-highlight">Categoria “E”</span>.

                    Ao longo do tempo, os veículos foram substituídos para formarem uma <span class="about-content-text-highlight">nova frota Caleffi</span>.</p>

                <p class="roboto-regular"><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span></p>
            </div>

            {{-- Imagem Autoescola Atual --}}
            <div class="col-lg-5 col-sm-12 text-center">
                <img src="{{ Vite::asset('resources/img/tela-about-us/img-caleffi.png') }}" class="img-fluid" alt="">
            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Cronologia</h2>

                <div class="col-lg-6 col-sm-12 d-flex flex-column align-items-center cores">
                    <ul>
                        <li class="roboto-regular"><span class="about-content-text-highlight">1989:</span> Fundação da Autoescola Caleffi, um sonho dos irmãos Caleffi em Amparo.</li>
                        <li class="roboto-regular"><span class="about-content-text-highlight">2012:</span> Gestão assumida integralmente por Helvio Caleffi.</li>
                        <li class="roboto-regular"><span class="about-content-text-highlight">2013:</span> Mudança para sede maior, com instalações modernas e simulador de direção.</li>
                        <li class="roboto-regular"><span class="about-content-text-highlight">2016:</span> Certificação ISO 9001:2008 e inauguração de unidade no Jardim São Dimas.</li>
                    </ul>
                </div>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">O que Oferecemos</h2>

                <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center cores">
                    <ul>
                        <li class="roboto-regular">Habilitação (Categorias A, B, C, D e E)</li>
                        <li class="roboto-regular">Primeira habilitação, mudança ou adição de categoria</li>
                        <li class="roboto-regular">Reabilitação de CNH cassada e Permissão Internacional para Dirigir</li>
                        <li class="roboto-regular">Treinamento personalizado para motoristas habilitados</li>
                    </ul>
                </div>
                



            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Nossos diferenciais</h2>

                <div class="col-lg-6 col-sm-12 d-flex flex-column align-items-center cores">
                    <ul>
                        <li class="roboto-regular"><span class="about-content-text-highlight">Instrutores Certificados:</span> Equipe qualificada com foco no aprendizado e suporte técnico.</li>
                        <li class="roboto-regular"><span class="about-content-text-highlight">Tecnologia Avançada:</span> Apps e relatórios digitais que acompanham o aluno em toda a jornada.</li>
                        <li class="roboto-regular"><span class="about-content-text-highlight">Aulas Personalizadas:</span> Adaptadas às necessidades de cada aluno, com abordagem clara e prática.</li>
                        <li class="roboto-regular"><span class="about-content-text-highlight">Material Exclusivo:</span> Conteúdo didático que reduz reprovação e facilita o aprendizado.</li>
                    </ul>
                </div>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Missão</h2>

                <p class="roboto-regular">
                    Formar condutores conscientes, promovendo segurança e harmonia no trânsito, com educação de qualidade e responsabilidade social.
                </p>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Visão</h2>

                <p class="roboto-regular">
                    Ser referência regional em educação de condutores, destacando-se pela excelência no ensino e compromisso com um trânsito seguro.
                </p>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Valores</h2>

                <p class="roboto-regular">
                    Ética, transparência, pioneirismo, inovação, respeito ao próximo e responsabilidade social.
                </p>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Metodologia de ensino</h2>

                <p class="roboto-regular">
                    A Autoescola Caleffi prioriza o aprendizado individualizado, oferecendo suporte psicológico e técnico, infraestrutura moderna e horários adaptados à rotina dos alunos.
                </p>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Matricule-se Agora mesmo</h2>

                <p class="roboto-regular">
                    Aqui você aprende a dirigir de forma relaxada, com confiança e qualidade.
                </p>
            </div>

        </div>

    </div>
</div>

{{-- * Technical Characteristics Section * --}}
<div id="technical-characteristics-section" class="hidden-element">
    <div class="container">
        <div class="row">

            {{-- Title: Características Técnicas --}}
            <div class="technical-characteristics-title-div col-md-12 d-flex justify-content-center text-center">
                <h1 class="tnr-bold tnr-title-size tnr-title-size--lg">Características Da Autoescola</h1>
            </div>

            {{-- Menu de Navegação com Conteúdo Dinâmico --}}
            <ul class="nav nav-tabs d-flex justify-content-center align-items-center col-md-12" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="nosso-espaco-tab" data-bs-toggle="tab" data-bs-target="#nosso-espaco-tab-pane" type="button" role="tab" aria-controls="nosso-espaco-tab-pane" aria-selected="true">Nosso Espaço</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="salas-de-aula-tab" data-bs-toggle="tab" data-bs-target="#salas-de-aula-tab-pane" type="button" role="tab" aria-controls="salas-de-aula-tab-pane" aria-selected="false">Salas de Aula</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="area-de-lazer-tab" data-bs-toggle="tab" data-bs-target="#area-de-lazer-tab-pane" type="button" role="tab" aria-controls="area-de-lazer-tab-pane" aria-selected="false">Área de lazer</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pista-interna-tab" data-bs-toggle="tab" data-bs-target="#pista-interna-tab-pane" type="button" role="tab" aria-controls="pista-interna-tab-pane" aria-selected="false">Pista Interna</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="frota-tab" data-bs-toggle="tab" data-bs-target="#frota-tab-pane" type="button" role="tab" aria-controls="frota-tab-pane" aria-selected="false">Frota</button>
                </li>
            </ul>

            {{-- Conteúdo do Menu de Navegação Dinâmico --}}
            <div class="tab-content" id="myTabContent">

                {{-- Nosso Espaço Conteúdo --}}
                <div class="tab-pane fade show active" id="nosso-espaco-tab-pane" role="tabpanel" aria-labelledby="nosso-espaco-tab" tabindex="0">
                    <div class="row d-flex justify-content-center align-items-center row-gap-5">
                        <div class="col-lg-5 col-sm-12 text-center">
                            <img src="{{ Vite::asset('resources/img/tela-about-us/img-recepcao-sofa.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                            <ul class="technical-characteristics-ul d-flex flex-column">
                                <li class="roboto-regular">Ambiente confortável e totalmente <span class="technical-characteristics-text-highlight">climatizado</span></li>
                                <li class="roboto-regular"><span class="technical-characteristics-text-highlight">Sofás de couro</span> espaçosos e confortáveis</li>
                                <li class="roboto-regular">Excelente para eperar ou <span class="technical-characteristics-text-highlight">relaxar</span> durante os intervalos</li>
                                <li class="roboto-regular">Espaço dedicado aos visitantes e estudantes <span class="technical-characteristics-text-highlight"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Salas De Aula Conteúdo --}}
                <div class="tab-pane fade" id="salas-de-aula-tab-pane" role="tabpanel" aria-labelledby="salas-de-aula-tab" tabindex="0">
                    <div class="row d-flex justify-content-center align-items-center row-gap-5">
                        <div class="col-lg-5 col-sm-12 text-center">
                            <img src="{{ Vite::asset('resources/img/tela-about-us/img-sala-aula.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                            <ul class="technical-characteristics-ul d-flex flex-column">
                                <li class="roboto-regular">Excelente lugar para <span class="technical-characteristics-text-highlight">estudos</span></li>
                                <li class="roboto-regular">Aconchegante, acolhedor, climatizado e <span class="technical-characteristics-text-highlight">dedicado</span></li>
                                <li class="roboto-regular">Aulas com profissionais experientes e <span class="technical-characteristics-text-highlight">capacitados</span> em pé</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Pista Interna Conteúdo --}}
                <div class="tab-pane fade" id="pista-interna-tab-pane" role="tabpanel" aria-labelledby="pista-interna-tab" tabindex="0">
                    <div id="image-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primeira Imagem -->
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-pista-interna.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Pista coberta para aulas em qualquer clima<span class="technical-characteristics-text-highlight"></span></li>
                                            <li class="roboto-regular">Totalmente climatizada <span class="technical-characteristics-text-highlight"></span><span class="technical-characteristics-text-highlight"></span></li>
                                            <li class="roboto-regular">Pista exatamente igual a do Detran <span class="technical-characteristics-text-highlight"></span><span class="technical-characteristics-text-highlight"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Segunda Imagem -->
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-recepcao-sofa.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Excelente estrutura para <span class="technical-characteristics-text-highlight">acolher todos</span> os espetáculos</li>
                                            <li class="roboto-regular">Dimensões do palco são de <span class="technical-characteristics-text-highlight">8,50m</span> por <span class="technical-characteristics-text-highlight">8,45m</span></li>
                                            <li class="roboto-regular">Dimensões do pró-cenio são de <span class="technical-characteristics-text-highlight">2,17m</span> por <span class="technical-characteristics-text-highlight">8,45m</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles do Slider -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#image-slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#image-slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>


                {{-- Área de Lazer Conteúdo --}}
                <div class="tab-pane fade" id="area-de-lazer-tab-pane" role="tabpanel" aria-labelledby="area-de-lazer-tab" tabindex="0">
                    <div class="row d-flex justify-content-center align-items-center row-gap-5">
                        <div class="col-lg-5 col-sm-12 text-center">
                            <img src="{{ Vite::asset('resources/img/tela-about-us/img-area-de-lazer.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                            <ul class="technical-characteristics-ul d-flex flex-column">
                                <li class="roboto-regular">Área goumet<span class="technical-characteristics-text-highlight"></span></li>
                                <li class="roboto-regular">Espaço para interação e socialização dos alunos</li>
                                <li class="roboto-regular">Área de Luz natural<span class="technical-characteristics-text-highlight"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Frota Conteúdo --}}
                <div class="tab-pane fade" id="frota-tab-pane" role="tabpanel" aria-labelledby="frota-tab" tabindex="0">
                    <div id="light-equipment-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primeira Imagem -->
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-recepcao-sofa.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">x motos exclusivas para aulas <span class="technical-characteristics-text-highlight"></span></li>
                                            <li class="roboto-regular">Motos adaptadas a todos os tamanhos</li>
                                            <li class="roboto-regular"><span class="technical-characteristics-text-highlight"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Segunda Imagem -->
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-outra-imagem.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">x carros exclusivos<span class="technical-characteristics-text-highlight">frta</span></li>
                                            <li class="roboto-regular">Carro adaptado para alunos PCD</li>
                                            <li class="roboto-regular"><span class="technical-characteristics-text-highlight"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles do Slider -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#light-equipment-slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#light-equipment-slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection