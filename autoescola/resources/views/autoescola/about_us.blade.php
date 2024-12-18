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

            {{-- Texto Autoescola --}}
            <div class="col-lg-7 col-sm-12">
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

            {{-- Imagem Hélvio Caleffi --}}
            <div class="col-lg-5 col-sm-12 text-center">
                <img class="redim" src="{{ Vite::asset('resources/img/tela-about-us/img-caleffi.jpg') }}" class="img-fluid" alt="Nosso fundador sr. Hélvio Caleffi">
                <figcaption>Nosso fundador sr. Hélvio Caleffi</figcaption>
            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">
        {{-- Imagem Autoescola Atual --}}
            <div class="col-lg-5 col-sm-12 text-center about-content-margin-bottom">
                <img class="img-carro" src="{{ Vite::asset('resources/img/tela-about-us/img-carro.jpg') }}" class="img-fluid" alt="Veículo exclusivo para alunos com necessidades especiais">
                <figcaption>Veículo exclusivo para alunos com necessidades especiais</figcaption>
            </div>
            {{-- Texto Continuação --}}
            <div class="col-lg-6 col-sm-12 about-content-margin-bottom">

            

                <h2 class="roboto-bold cores">Gestão</h2>

                <p class="roboto-regular">Após 18 anos como instrutor de trânsito, o <span class="about-content-text-highlight">Sr. Hélvio Caleffi</span>, contando com o apoio de seus irmãos <span class="about-content-text-highlight">Antônio </span>e <span class="about-content-text-highlight">Valdir</span>, decidem se unir para fundar a <span class="about-content-text-highlight">Autoescola Caleffi</span>.

                    Um automóvel e uma motocicleta usada,<span class="about-content-text-highlight"> muita força de vontade</span> e <span class="about-content-text-highlight">determinação </span>marcaram o início do empreendimento.

                    Fomos <span class="about-content-text-highlight">pioneiros </span>na cidade de Amparo – SP em oferecer aulas para Habilitação nas <span class="about-content-text-highlight">Categorias “C, D e E”</span>.

                    Para tanto, foi adquirido um ônibus (usado para ministrar as aulas) e mais tarde, foi realizada a aquisição de uma Carreta para a Habilitação na <span class="about-content-text-highlight">Categoria “E”</span>.

                    Ao longo do tempo, os veículos foram substituídos para formarem uma <span class="about-content-text-highlight">nova frota Caleffi</span>.</p>

                <p class="roboto-regular"><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span><span class="about-content-text-highlight"></span></p>
            </div>
            
        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="">

                <h2 class="roboto-bold cores">Cronologia</h2>

                <div class="col-sm-12 d-flex flex-column align-items-center cores">
                    <ul>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">1989:</span> Fundação da Autoescola Caleffi, um sonho dos irmãos Caleffi em Amparo. Com o objetivo de oferecer educação de qualidade no trânsito, a Autoescola Caleffi iniciou sua jornada com foco em formação de condutores e segurança no trânsito, conquistando a confiança da comunidade local.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">2012:</span> Gestão assumida integralmente por Helvio Caleffi. Sob sua liderança, a autoescola passou a expandir seus serviços e aprimorar constantemente a qualidade do ensino, introduzindo novas metodologias e tecnologias para melhor atender aos alunos.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">2013:</span> Mudança para sede maior, com instalações modernas e simulador de direção. A nova unidade foi projetada para proporcionar mais conforto aos alunos, com um ambiente moderno e tecnológico, incluindo um simulador de direção que contribui para uma experiência de aprendizado mais eficaz e segura.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">2016:</span> Certificação ISO 9001:2008 e inauguração de unidade no Jardim São Dimas. A conquista da certificação ISO 9001:2008, que reconhece a qualidade na gestão de processos, reforçou o compromisso da Autoescola Caleffi com a excelência no ensino. A inauguração da unidade no Jardim São Dimas ampliou o alcance da autoescola, permitindo atender ainda mais alunos em uma nova região.</li>
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

                <div class="col-sm-12 d-flex flex-column align-items-center cores">
                    <ul>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">Habilitação (Categorias A, B, C, D e E):</span> Oferecemos cursos completos para todas as categorias de habilitação, de moto (A) a veículos pesados (C, D e E). Garantimos que nossos alunos estejam preparados para dirigir com segurança e confiança em qualquer situação no trânsito.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">Primeira habilitação, mudança ou adição de categoria:</span> Se você está começando a jornada como motorista ou deseja mudar sua categoria de habilitação, nossa equipe está pronta para oferecer o melhor suporte. Também realizamos adição de categorias para que você possa expandir suas habilidades conforme suas necessidades.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">Reabilitação de CNH cassada e Permissão Internacional para Dirigir:</span> Trabalhamos com cursos para reabilitação de CNH cassada, ajudando motoristas a reconquistar sua licença de forma segura e responsável. Além disso, oferecemos serviços para a obtenção da Permissão Internacional para Dirigir, permitindo que você viaje com mais liberdade e tranquilidade.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">Treinamento personalizado para motoristas habilitados:</span> Além de atender novos motoristas, também oferecemos treinamento personalizado para motoristas habilitados que desejam aprimorar suas habilidades, seja para enfrentar desafios específicos ou simplesmente para se sentir mais seguros ao dirigir.</li>
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

                <div class="col-sm-12 d-flex flex-column align-items-center cores">
                    <ul>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">Instrutores Certificados:</span> Nossa equipe é composta por profissionais altamente qualificados e certificados, com vasta experiência e comprometidos com o aprendizado de cada aluno. Eles não apenas ensinam, mas oferecem suporte contínuo, ajustando as metodologias de ensino conforme as necessidades individuais.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">Tecnologia Avançada:</span> Utilizamos aplicativos e ferramentas digitais para tornar o aprendizado mais interativo e eficiente. Os alunos têm acesso a relatórios digitais personalizados, monitorando seu progresso e ajustando os estudos de acordo com suas necessidades, tudo ao seu alcance.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">Aulas Personalizadas:</span> Cada aluno é único e, por isso, nossas aulas são moldadas de acordo com o ritmo e estilo de aprendizado de cada um. As abordagens práticas e claras garantem que o aluno se sinta confortável e confiante, não importa seu nível de experiência.</li>
                        <li class="roboto-regular espaco"><span class="about-content-text-highlight">Material Exclusivo:</span> Nosso material didático é desenvolvido para reduzir a taxa de reprovação e garantir o melhor aproveitamento. Conteúdos exclusivos e práticos são oferecidos para que o aluno aprenda de maneira dinâmica, consolidando seu conhecimento de forma eficiente e eficaz.</li>
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
                Nosso compromisso é formar condutores conscientes, capazes de promover segurança, respeito e harmonia no trânsito. Através de uma educação de qualidade, buscamos não apenas ensinar as regras, mas também cultivar a responsabilidade social e o comportamento ético, garantindo um futuro mais seguro e sustentável para todos.                </p>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Visão</h2>

                <p class="roboto-regular">
                Nosso objetivo é ser referência regional em educação de condutores, destacando-nos pela excelência no ensino, pelo compromisso com a formação de motoristas responsáveis e pelo impacto positivo em um trânsito mais seguro para todos. Acreditamos que um aprendizado sólido e consciente é fundamental para a construção de um futuro com mais segurança e qualidade de vida.                </p>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Valores</h2>

                <p class="roboto-regular">
                Nossos pilares são ética, transparência, pioneirismo, inovação, respeito ao próximo e responsabilidade social. Esses valores guiam todas as nossas ações e nos impulsionam a oferecer um serviço de excelência, sempre comprometidos com o bem-estar e o desenvolvimento de nossos alunos e da comunidade.                </p>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Metodologia de ensino</h2>

                <p class="roboto-regular">
                A Autoescola Caleffi valoriza o aprendizado individualizado, oferecendo uma combinação única de suporte psicológico e técnico para cada aluno. Com uma infraestrutura moderna e bem equipada, proporcionamos um ambiente ideal para o aprendizado. Além disso, nossos horários são flexíveis e adaptados à sua rotina, garantindo que você aprenda a dirigir com tranquilidade, confiança e no seu próprio ritmo.                </p>

            </div>

        </div>

        <hr class="divider divider--about">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Continuação --}}
            <div class="about-content-margin-bottom">

                <h2 class="roboto-bold cores">Matricule-se Agora mesmo</h2>

                <p class="roboto-regular">
                    Aqui você aprende a dirigir de forma relaxada, com confiança e qualidade, em um ambiente acolhedor e com o acompanhamento de instrutores experientes. Nosso método é pensado para oferecer segurança e tranquilidade, garantindo que você esteja preparado para enfrentar qualquer situação no trânsito com habilidade e segurança. </p>
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
                    <div id="nosso-espaco-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primeira Imagem -->
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-recepcao-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Ambiente <span class="technical-characteristics-text-highlight">acolhedor</span>, <span class="technical-characteristics-text-highlight">climatizado</span> e ideal para momentos de tranquilidade</li>
                                            <li class="roboto-regular">Sofás de couro <span class="technical-characteristics-text-highlight">amplos</span> e <span class="technical-characteristics-text-highlight">confortáveis</span>, proporcionando máximo bem-estar</li>
                                            <li class="roboto-regular">Um espaço perfeito para <span class="technical-characteristics-text-highlight">relaxar</span> ou aguardar confortavelmente durante os intervalos</li>
                                            <li class="roboto-regular">Área projetada especialmente para <span class="technical-characteristics-text-highlight">visitantes</span> e <span class="technical-characteristics-text-highlight">estudantes</span>, garantindo funcionalidade e conforto</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Segunda Imagem -->
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-recepcao-sd.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Ambiente <span class="technical-characteristics-text-highlight">moderno</span> e cuidadosamente<span class="technical-characteristics-text-highlight">climatizado</span> para o seu conforto</li>
                                            <li class="roboto-regular">Sofás <span class="technical-characteristics-text-highlight">elegantes</span> e <span class="technical-characteristics-text-highlight">ergonomicamente projetados</span>para relaxar</li>
                                            <li class="roboto-regular">Ideal para <span class="technical-characteristics-text-highlight">descontrair</span> ou aproveitar um momento de descanso</li>
                                            <li class="roboto-regular">Espaço dedicado a proporcionar bem-estar tanto para <span class="technical-characteristics-text-highlight">estudantes</span> quanto para <span class="technical-characteristics-text-highlight">visitantes</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles do Slider -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#nosso-espaco-slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#nosso-espaco-slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>

                {{-- Salas De Aula Conteúdo --}}
                <div class="tab-pane fade" id="salas-de-aula-tab-pane" role="tabpanel" aria-labelledby="salas-de-aula-tab" tabindex="0">
                    <div id="salas-de-aula-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primeira Imagem -->
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-salas-de-aula-1-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Um espaço projetado especialmente para <span class="technical-characteristics-text-highlight">foco</span> e <span class="technical-characteristics-text-highlight">aprendizado</span></li>
                                            <li class="roboto-regular">Ambiente <span class="technical-characteristics-text-highlight">aconchegante</span>, cuidadosamente <span class="technical-characteristics-text-highlight">climatizado</span> e ideal para se concentrar</li>
                                            <li class="roboto-regular">Aulas conduzidas por profissionais <span class="technical-characteristics-text-highlight">altamente qualificados</span> e comprometidos com o ensino</li>
                                            <li class="roboto-regular">Espaço pensado para proporcionar uma experiência de aprendizado <span class="technical-characteristics-text-highlight">dinâmica</span> e <span class="technical-characteristics-text-highlight">envolvente</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Segunda Imagem  -->
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-salas-de-aula-2-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Aulas disponíveis nos períodos da <span class="technical-characteristics-text-highlight">manhã</span>, <span class="technical-characteristics-text-highlight">tarde</span> e <span class="technical-characteristics-text-highlight">noite</span>, adaptando-se à sua rotina</li>
                                            <li class="roboto-regular">Intervalos planejados para tornar as aulas mais <span class="technical-characteristics-text-highlight">dinâmicas</span> e evitar a monotonia</li>
                                            <li class="roboto-regular">Material didático exclusivo e <span class="technical-characteristics-text-highlight">gratuito</span>, elaborado especialmente para atender às exigências dos alunos</li>
                                            <li class="roboto-regular">Testes <span class="technical-characteristics-text-highlight">personalizados</span> que ajudam a identificar os pontos de melhoria e garantem um aprendizado mais eficiente</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles do Slider -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#salas-de-aula-slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#salas-de-aula-slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>
                {{-- Pista Interna Conteúdo --}}
                <div class="tab-pane fade" id="pista-interna-tab-pane" role="tabpanel" aria-labelledby="pista-interna-tab" tabindex="0">
                    <div id="pista-interna-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primeira Imagem -->
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-pista-interna-1-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Pista <span class="technical-characteristics-text-highlight">coberta</span> para treinamento em qualquer condição climática, garantindo conforto e continuidade das aulas</li>
                                            <li class="roboto-regular">Ambiente totalmente <span class="technical-characteristics-text-highlight">climatizado</span>, proporcionando uma experiência agradável em todas as estações do ano</li>
                                            <li class="roboto-regular">Estrutura <span class="technical-characteristics-text-highlight">idêntica</span> à pista do Detran, oferecendo uma simulação realista para maior confiança no exame</li>
                                            <li class="roboto-regular">Equipado com sinalização e marcações que seguem os padrões <span class="technical-characteristics-text-highlight">oficiais</span>, garantindo aprendizado consistente e eficaz</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Segunda Imagem -->
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-pista-interna-2-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Instrutores dedicados a cada aluno, garantindo atenção <span class="technical-characteristics-text-highlight">exclusiva</span> durante todas as aulas</li>
                                            <li class="roboto-regular">Acompanhamento personalizado com foco em corrigir <span class="technical-characteristics-text-highlight">dificuldades</span> específicas e aprimorar habilidades</li>
                                            <li class="roboto-regular">Compromisso com a <span class="technical-characteristics-text-highlight">segurança</span> em todo o percurso, promovendo confiança e tranquilidade</li>
                                            <li class="roboto-regular">Treinamento adaptado ao ritmo de aprendizado do aluno, garantindo um progresso consistente e eficaz</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles do Slider -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#pista-interna-slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#pista-interna-slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>


                {{-- Área de Lazer Conteúdo --}}
                <div class="tab-pane fade" id="area-de-lazer-tab-pane" role="tabpanel" aria-labelledby="area-de-lazer-tab" tabindex="0">
                    <div id="area-de-lazer-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primeira Imagem -->
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-area-de-lazer-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Área gourmet equipada, ideal para momentos de descontração e convivência</li>
                                            <li class="roboto-regular">Espaço pensado para <span class="technical-characteristics-text-highlight">interação</span> e <span class="technical-characteristics-text-highlight">socialização</span> entre os alunos, fortalecendo o aprendizado em grupo</li>
                                            <li class="roboto-regular">Ambiente com luz natural, criando um espaço <span class="technical-characteristics-text-highlight">agradável</span> e <span class="technical-characteristics-text-highlight">acolhedor</span> para relaxar entre as aulas</li>
                                            <li class="roboto-regular">Área de convivência que une conforto e praticidade, contribuindo para um ambiente mais <span class="technical-characteristics-text-highlight">harmônico</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Segunda Imagem -->
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-area-gourmet-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">Espaço especialmente planejado para criar momentos <span class="technical-characteristics-text-highlight">únicos</span> e <span class="technical-characteristics-text-highlight">memoráveis</span> entre os alunos</li>
                                            <li class="roboto-regular">Ambiente descontraído e confortável, perfeito para aproveitar pausas e recarregar as energias</li>
                                            <li class="roboto-regular">Design acolhedor, pensado para proporcionar experiências <span class="technical-characteristics-text-highlight">incríveis</span> e fortalecer a convivência</li>
                                            <li class="roboto-regular">Opções de snacks e bebidas disponíveis para maior comodidade e praticidade</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles do Slider -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#area-de-lazer-slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#area-de-lazer-slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>

                {{-- Frota Conteúdo --}}
                <div class="tab-pane fade" id="frota-tab-pane" role="tabpanel" aria-labelledby="frota-tab" tabindex="0">
                    <div id="frota-slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primeira Imagem -->
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-motos-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">10 motos exclusivas, modernas e em excelente estado para aulas práticas</li>
                                            <li class="roboto-regular">Modelos adaptados para diferentes alturas e perfis, garantindo maior conforto e segurança</li>
                                            <li class="roboto-regular">Manutenção e calibração periódicas para oferecer a melhor experiência de pilotagem</li>
                                            <li class="roboto-regular">Equipamentos novos e ergonômicos, proporcionando mais confiança e tranquilidade</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Segunda Imagem -->
                            <div class="carousel-item">
                                <div class="row d-flex justify-content-center align-items-center row-gap-5">
                                    <div class="col-lg-5 col-sm-12 text-center">
                                        <img src="{{ Vite::asset('resources/img/tela-about-us/img-carros-centro.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-sm-12 d-flex flex-column align-items-center">
                                        <ul class="technical-characteristics-ul d-flex flex-column">
                                            <li class="roboto-regular">4 carros exclusivos e novos, garantindo conforto e segurança durante as aulas</li>
                                            <li class="roboto-regular">Veículo adaptado para alunos PCD, promovendo acessibilidade e inclusão</li>
                                            <li class="roboto-regular">Pontos exclusivos para baliza em locais tranquilos, proporcionando mais confiança e foco</li>
                                            <li class="roboto-regular">Aulas com acompanhamento integral de instrutores experientes e atentos a cada detalhe</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controles do Slider -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#frota-slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#frota-slider" data-bs-slide="next">
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