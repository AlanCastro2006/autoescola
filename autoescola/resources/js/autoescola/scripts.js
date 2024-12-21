// * ---------------------------------------------------------BOOTSTRAP---------------------------------------------------------------

// * Ativando os tooltips do Bootstrap

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

// * ---------------------------------------------------------------------------------------------------------------------------------

// * -------------------------------------------------------THEME CHANGER-------------------------------------------------------------

// * Script para a alteração de temas (claro e escuro)

// Aguarda até que o conteúdo da página esteja totalmente carregado
document.addEventListener('DOMContentLoaded', () => {

    // Selecionando os ícones do footer de contato
    const whatsappIcon = document.querySelector('.whatsapp-icon');
    const instagramIcon = document.querySelector('.instagram-icon');

    // Selecionando o ícone do menu lateral da OffCanvas NavBar
    const menuIcon = document.querySelector('.navbar-menu-icon');

    // Seleciona o elemento de checkbox com o ID 'chk'
    const checkbox = document.getElementById('chk');

    // Obtém o tema atual do localStorage, ou define como 'light' se não houver tema salvo
    const currentTheme = localStorage.getItem('theme') || 'light';
    
    // Aplica o tema salvo e ajusta a checkbox e os ícones adequadamente
    if (currentTheme === 'dark') {
        document.documentElement.setAttribute('data-theme', 'dark');
        checkbox.checked = true;

        // Muda a classe do ícone do WhatsApp para a versão branca
        whatsappIcon.classList.remove('ic--baseline-whatsapp');
        whatsappIcon.classList.add('ic--baseline-whatsapp-white');

        // Muda a classe do ícone do Instagram para a versão branca
        instagramIcon.classList.remove('mdi--instagram');
        instagramIcon.classList.add('mdi--instagram-white');

        // Adiciona a classe dark-theme ao ícone do Menu
        menuIcon.classList.add('dark-theme');

    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        checkbox.checked = false;

        // Muda a classe do ícone do WhatsApp para a versão padrão
        whatsappIcon.classList.remove('ic--baseline-whatsapp-white');
        whatsappIcon.classList.add('ic--baseline-whatsapp');

        // Muda a classe do ícone do Instagram para a versão padrão
        instagramIcon.classList.remove('mdi--instagram-white');
        instagramIcon.classList.add('mdi--instagram');

        // Remove a classe dark-theme do ícone do Menu
        menuIcon.classList.remove('dark-theme');
    }
    
    // Adiciona um ouvinte de eventos para o evento 'change' no checkbox
    checkbox.addEventListener('change', () => {
            
        // Se o checkbox estiver marcado, aplica o tema escuro
        if (checkbox.checked) {
            // Aplicando o tema escuro
            document.documentElement.setAttribute('data-theme', 'dark');

            // Salva a preferência de tema como 'dark' no localStorage
            localStorage.setItem('theme', 'dark');

            // Muda a classe do ícone do WhatsApp para a versão branca
            whatsappIcon.classList.remove('ic--baseline-whatsapp');
            whatsappIcon.classList.add('ic--baseline-whatsapp-white');

            // Muda a classe do ícone do Instagram para a versão branca
            instagramIcon.classList.remove('mdi--instagram');
            instagramIcon.classList.add('mdi--instagram-white');

            // Adiciona a classe dark-theme ao ícone do Menu
            menuIcon.classList.add('dark-theme');

        } else {
            // Aplicando o tema claro
            document.documentElement.setAttribute('data-theme', 'light');

            // Salva a preferência de tema como 'light' no localStorage
            localStorage.setItem('theme', 'light');

            // Muda a classe do ícone do WhatsApp para a versão padrão
            whatsappIcon.classList.remove('ic--baseline-whatsapp-white');
            whatsappIcon.classList.add('ic--baseline-whatsapp');

            // Muda a classe do ícone do Instagram para a versão padrão
            instagramIcon.classList.remove('mdi--instagram-white');
            instagramIcon.classList.add('mdi--instagram');

            // Remove a classe dark-theme do ícone do Menu
            menuIcon.classList.remove('dark-theme');
        }

    });

});

// * Script para alterar o texto da tooltip baseado no tema (claro ou escuro)

// Executa o código quando o conteúdo da página é carregado
document.addEventListener("DOMContentLoaded", function() {

    // Obter o elemento do checkbox
    var checkbox = document.getElementById('chk');
    
    // Obter o elemento do contêiner do tema (label)
    var themeContainer = document.querySelector('.theme-container');
    
    // Função que atualiza o texto da tooltip baseado no estado do checkbox
    function updateTooltip() {
        if (checkbox.checked) {
            // Se o checkbox estiver marcado, definir o texto da tooltip como "Aparência: Tema Escuro"
            themeContainer.setAttribute('data-bs-title', 'Aparência: Tema Escuro');
        } 
        
        else {
            // Se o checkbox não estiver marcado, definir o texto da tooltip como "Aparência: Tema Claro"
            themeContainer.setAttribute('data-bs-title', 'Aparência: Tema Claro');
        }
        
        // Atualizar manualmente a tooltip para refletir o novo título
        var tooltip = bootstrap.Tooltip.getInstance(themeContainer);
        if (tooltip) {
            tooltip.setContent({ '.tooltip-inner': themeContainer.getAttribute('data-bs-title') });
        }
    }

    // Adicionar o evento de mudança ao checkbox para atualizar a tooltip quando o tema for alterado
    checkbox.addEventListener('change', updateTooltip);

    // Inicializa a tooltip com o Bootstrap
    new bootstrap.Tooltip(themeContainer);
    
    // Atualiza a tooltip na inicialização
    updateTooltip();
});

// * ---------------------------------------------------------------------------------------------------------------------------------

// * -------------------------------------------------------LINK CONTATOS-------------------------------------------------------------

// * Script para fechar a OffCanvas NavBar ao interagir com o link de 'CONTATOS'

// Este evento garante que o código JavaScript só será executado após todo o conteúdo da página ter sido completamente carregado.
document.addEventListener("DOMContentLoaded", function() {

    // Obter o elemento do link de 'CONTATOS' usando seu ID.
    var contatosLink = document.getElementById('contatos-link');
    
    // Obter o elemento da OffCanvas Navbar usando seu ID.
    var offcanvasElement = document.getElementById('navbarOffcanvasLg');

    // Verificar se o elemento contatosLink realmente existe para evitar erros.
    if (contatosLink) {
        // Adicionar um ouvinte de evento de clique ao link de 'CONTATOS'.
        contatosLink.addEventListener('click', function() {
            // Usar o método getInstance do Bootstrap para obter a instância atual da OffCanvas Navbar.
            var bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
            // Usar o método hide para fechar a OffCanvas Navbar.
            bsOffcanvas.hide();
        });
    }

});

// * Script para corrigir erro de "pulo" no link de contatos em telas menores que 768px

document.addEventListener('DOMContentLoaded', function () {
    const footerLink = document.querySelector('a[href="#contatos"]');
    const footer = document.querySelector('#contatos');
    const navbar = document.querySelector('.navbar');

    if (footerLink && footer && navbar) {
        footerLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Scroll inicial para revelar elementos ocultos
            footer.scrollIntoView({ behavior: 'smooth' });
            
            // Recalcula e ajusta a posição após um breve atraso
            setTimeout(() => {
                const navbarHeight = navbar.offsetHeight;
                const footerPosition = footer.getBoundingClientRect().top + window.scrollY;
                window.scrollTo({
                    top: footerPosition - navbarHeight,
                    behavior: 'smooth'
                });
            }, 500); // Ajuste este valor conforme necessário
        });
    }
});

// * ---------------------------------------------------------------------------------------------------------------------------------
// Função que é executada quando o usuário rola a página
window.onscroll = function() {
    scrollFunction();
};
// * ---------------------------------------------------------------------------------------------------------------------------------

// * ------------------------------------------------ANIMAÇÃO DOS ELEMENTOS-----------------------------------------------------------

// * Script para a animação de visualização dos elementos com a API Intersection Observer

// Função que usa IntersectionObserver para animar os elementos quando entram na viewport
document.addEventListener("DOMContentLoaded", function () {
    // Seleciona todos os elementos que serão animados
    const hiddenElements = document.querySelectorAll('.hidden-element');
    
    // Configuração do IntersectionObserver
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // Se o elemento estiver visível, adiciona a classe 'show'
            if (entry.isIntersecting) {
                entry.target.classList.add('show-section');
                observer.unobserve(entry.target);  // Para de observar após animar
            }
        });
    }, {
        threshold: 0.1  // Inicia a animação quando 10% do elemento estiver visível
    });
    
    // Observa cada elemento oculto
    hiddenElements.forEach(element => {
        observer.observe(element);
    });
});

// * ---------------------------------------------------------------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    const heroSection = document.querySelector("#hero-section , #services-banner-section, #about-banner-section, #politics-banner-section");

    function updateNavbarBackground() {
        const heroBottom = heroSection.getBoundingClientRect().bottom; // Fim da imagem
        const navbarHeight = navbar.offsetHeight; // Altura da navbar

        // Verifica se a parte inferior da imagem chegou à parte inferior da navbar
        if (heroBottom <= navbarHeight) {
            navbar.classList.remove("scrolled"); // Torna opaco
        } else {
            navbar.classList.add("scrolled"); // Mantém transparente
        }
    }

    // Adicionar evento de scroll para atualizar a navbar
    window.addEventListener("scroll", updateNavbarBackground);

    // Chamar a função inicialmente para definir o estado correto
    updateNavbarBackground();
});
    
    jQuery( document ).ready(function() {
    setInterval(function(){ 
    
    jQuery(".cc-compliance").click(function(){
        jQuery(".cc-window").fadeOut(250);
    });
    }, 1000);
    
    });
    
    
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/www.autoescolacaleffi.com.br\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                case "emoji":
                    return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                n.DOMReady = !0
            }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);

    