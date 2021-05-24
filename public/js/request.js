
// Eu começo com $(document) pra dizer que eu to usando um elemento do DOM ('.card h1') no momento do "click" pra disparar uma function()
// Dessa maneira eu garanto que não importa se eu adicionar dinamcamente depois um elemento ao DOM, eu ainda vou poder manipula-lo

$(document).on('click', '.cardapio h1', function(){

    // To dizendo que eu quero o elemento PAI (parent) e depois o seu elemtno FILHO (children) chamado 'conteudo, tudo isso referenciado ao H1 que eu to clicando com $(this)
    let conteudo = $(this).parent().children('.conteudo')

    // Depois eu subo todos os itens para criar o efeito de hamburguer menu, onde voce clica em um e sobe os outros...
    $('.cardapio .conteudo').slideUp('fast')

    // Aqui eu troco o arrow que ta do lado do H1 para apontar para baixo
    $('.cardapio h1 span').html('expand_more')

    // Isso aqui serve pra evitar uma ação repetida, só desço do item se ele estiver escondido, em seguida, aponto o arrow para cima
    if ( conteudo.css('display') == 'none' )
    {
        conteudo.slideToggle('fast')
        $(this).children('span').html('expand_less')
    } 

})

$(document).on('click', '.abrir_menu', function(){
    
    let botao = $(this).children('span')
    let menu = $('.nav_mobile')

    if ( menu.css('display') == 'none' )
    {
        menu.css({'display': 'flex'})
        botao.html('close')
    }
    else{
        menu.css({'display': 'none'})
        botao.html('menu')
    }
})

$(document).on('click', '.nav_mobile a', function(){
    $('.abrir_menu span').html('menu')
    $('.nav_mobile').fadeOut('fast')    
})

