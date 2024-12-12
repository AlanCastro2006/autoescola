{{-- Puxando o layout --}}
@extends('layouts.layout')

{{-- Mudando o título da página dinamicamente --}}
@section('view-title', 'Serviços - Autoescola')

{{-- Conteúdo da página --}}
@section('content')

{{-- * Services Banner Section * --}}
<div class="d-flex justify-content-center align-items-center" id="services-banner-section">
    <h1 class="tnr-bold tnr-title-size tnr-title-size--lg">SERVIÇOS</h1>
</div>

{{-- * Services Content Section * --}}
<div id="services-content-section" class="cores">
    <div class="container d-flex flex-column">

        {{-- Texto --}}
        <div class="row justify-content-between">

            {{-- Texto Autoescola --}}
            <div>

                <div>

                    <ul>

                        <li>
                            <h2 class="roboto-bold service-title">Primeira Habilitação</h2>
                        </li>

                    </ul>

                </div>

                <p class="roboto-regular service-text">
                    Conte com conosco para obter sua permissão para dirigir!
                    Concedida para as categorias “A” e “B”, ela tem validade de um ano. Realize seus exames teórico e práticos conosco e garanta sua licença.
                    <span class="services-content-text-highlight"></span>
                </p>

            </div>

        </div>

        <hr class="divider divider--services">

        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Autoescola --}}
            <div>

                <div>

                    <ul>

                        <li>
                            <h2 class="roboto-bold service-title">CNH Definitiva</h2>
                        </li>

                    </ul>

                </div>

                <p class="roboto-regular service-text">
                    Já está há mais de um ano com sua licença para dirigir e não cometeu nenhuma infração gravíssima? Nós do Autoescola Caleffi ajudamos você a conquistar sua carteira nacional de habilitação definitiva.
                    <span class="services-content-text-highlight"></span>
                </p>

            </div>
        </div>
            <hr class="divider divider--services">

            
        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">
            {{-- Texto Autoescola --}}
            <div>

                <div>

                    <ul>

                        <li>
                            <h2 class="roboto-bold service-title">Adição de Categoria – Adição de “A” e Adição de “B”</h2>
                        </li>

                    </ul>

                </div>

                <p class="roboto-regular service-text">
                    Tem interesse em adicionar outra categoria em sua habilitação? Nós do Autoescola Caleffi ajudamos com os procedimentos indicados pelo Detran, respeitando todos os prazos necessários. Entre em contato conosco e saiba realizar.
                    <span class="services-content-text-highlight"></span>
                </p>

            </div>
        </div>
            <hr class="divider divider--services">
            
        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Autoescola --}}
            <div>

                <div>

                    <ul>

                        <li>
                            <h2 class="roboto-bold service-title">Mudança de Categoria C, D e E</h2>
                        </li>

                    </ul>

                </div>

                <p class="roboto-regular service-text">
                    Você é motorista habilitado, mas tem interesse em mudar a categoria da sua habilitação para dirigir tratores, máquinas agrícolas e veículos de carga? Saiba que o Autoescola Caleffi pode lhe auxiliar com o processo de habilitação para as categorias C, D e E.
                    <span class="services-content-text-highlight"></span>
                </p>

            </div>
        </div>

            <hr class="divider divider--services">
            
        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Autoescola --}}
            <div>

                <div>

                    <ul>

                        <li>
                            <h2 class="roboto-bold service-title">PID (Permissão Internacional para Dirigir)</h2>
                        </li>

                    </ul>

                </div>

                <p class="roboto-regular service-text">
                    Tem interesse em dirigir no exterior? Então saiba que você pode solicitar a PID (Permissão Internacional para Dirigir) e ter acesso a mais de 100 países e nós do Autoescola Caleffi podemos auxiliá-lo de forma rápida e fácil.
                    <span class="services-content-text-highlight"></span>
                </p>

            </div>
        </div>

            <hr class="divider divider--services">
            
        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Autoescola --}}
            <div>

                <div>

                    <ul>

                        <li>
                            <h2 class="roboto-bold service-title">Seguro Reprova</h2>
                        </li>

                    </ul>

                </div>

                <p class="roboto-regular service-text">
                    Está tirando sua habilitação, mas fica inseguro com a reprova? Saiba que agora com o seguro reprova do Autoescola Caleffi você faz o exame prático com mais tranquilidade, pois ele garante até duas novas tentativas sem custo.
                    <span class="services-content-text-highlight"></span>
                </p>

            </div>
        </div>

            <hr class="divider divider--services">
            
        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            {{-- Texto Autoescola --}}
            <div>

                <div>

                    <ul>

                        <li>
                            <h2 class="roboto-bold service-title">Aulas para Habilitados</h2>
                        </li>

                    </ul>

                </div>

                <p class="roboto-regular service-text">
                    Tem habilitação, mas ainda sente insegurança para dirigir?
                    No Autoescola Caleffi desenvolvemos um método de ensino humanizado e com acompanhamento para que você perca o medo e se torne o motorista que sempre sonhou.
                    <span class="services-content-text-highlight"></span>
                </p>

            </div>
        </div>
        
        {{-- Continuação texto autoescola --}}
        <div class="row justify-content-between">

            <hr class="divider divider--services">

            {{-- Texto Autoescola --}}
            <div>

                <div>

                    <ul>

                        <li>
                            <h2 class="roboto-bold service-title">Reabilitação de CNH cassada</h2>
                        </li>

                    </ul>

                </div>

                <p class="roboto-regular service-text">
                    O Autoescola Caleffi com mais de 30 anos de experiencia ajuda você a regularizar sua CNH suspensa ou cassada. Saiba como regularizar sua habilitação de forma simples e prática.
                    <span class="services-content-text-highlight"></span>
                </p>

            </div>
        </div>
    </div>
    </div>
</div>


@endsection