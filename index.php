<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dom Helio</title>	

	<link rel="stylesheet" href="./public/css/style.css">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>
<body>

	<header>

		<article class="flex-row space w-70 auto">
			<figure> <img src="./public/img/logo.png" alt=""> </figure>

			<nav class="flex-row space">			
				<a href="#domhelio">O Dom Helio</a>
				<a href="./cardapio">Cardápio</a>
				<a href="#unidades">Unidades</a>
			</nav>

			<div class="social flex-row-i space">
				<a href="#"><img src="./public/img/facebook.png" alt=""></a>
				<a href="#"><img src="./public/img/instagram.png" alt=""></a>
			</div>
		</article>
		
	</header>

	<nav class="nav_mobile fixed flex-col align-center">
		<figure class="logo">
			<img src="./public/img/logo.png" alt="">
		</figure>		

        <a href="#domhelio">O Dom Helio</a>
		<a href="./cardapio">Cardápio</a>
		<a href="#unidades">Unidades</a>

		<div class="social flex-row-i space">
			<a href="#"><img src="./public/img/facebook.png" alt=""></a>
			<a href="#"><img src="./public/img/instagram.png" alt=""></a>
		</div>
    </nav>

	<section class="banner fullscreen">
		<article class="flex-row space w-70 auto">

			<div class="w-50 texto">
				<h2>DOM HELIO</h2>
				<h1>Cozinhar não é um serviço, é uma forma de <cite>amor</cite> </h1>

				<a href="./cardapio"><button class="flex-row-i space">Ver Cardápio <span class="material-icons">east</span></button></a>
			</div>

			<figure class="w-50"><img src="./public/img/pizza2.png" alt=""></figure>

		</article>
	</section>

	<section>
		<article class="w-70 auto flex-row space cards">
			<div class="card">
				<figure>
					<img src="./public/img/bebida_leve.jpg" alt="">
				</figure>
				<h2>Bebidas</h2>
				<p>
					Conheça nossa vasta seleção de bebidas, os mais variados drinks e vinhos a sua disposição.
				</p>

				<a href="./cardapio"><button class="flex-row-i space">Ver Cardápio <span class="material-icons">east</span></button></a>
			</div>

			<div class="card">
				<figure>
					<img src="./public/img/carne_leve.jpg" alt="">
				</figure>
				<h2>Carnes</h2>
				<p>
					Os melhores cortes de carne na sua mesa. Veja nossos pratos e saiba o que lhe espera.
				</p>

				<a href="./cardapio"><button class="flex-row-i space">Ver Cardápio <span class="material-icons">east</span></button></a>
			</div>

			<div class="card">
				<figure>
					<img src="./public/img/massa_leve.jpg" alt="">
				</figure>
				<h2>Massas</h2>
				<p>
					Veja nossa lista de massas em uma seleção incrível e saborosa de pizzas só para você.
				</p>

				<a href="./cardapio"><button class="flex-row-i space">Ver Cardápio <span class="material-icons">east</span></button></a>
			</div>

			<div class="card">
				<figure>
					<img src="./public/img/especiais_leve.jpg" alt="">
				</figure>
				<h2>Especiais</h2>
				<p>
					Conheça nosso menu especial. O prazer da alta gastronomia e qualidade no seu prato.
				</p>

				<a href="./cardapio"><button class="flex-row-i space">Ver Cardápio <span class="material-icons">east</span></button></a>
			</div>
		</article>
	</section>

	<section id="domhelio" class="sobre">
		<article class="w-70 auto flex-row space">
			<div class="texto w-50">
				<h2>O DOM HELIO</h2>
				<h1>Tradição e qualidade de primeira </h1>

				<p>
					O restaurante Dom Hélio existe há mais de 10 anos especializados em massas e carnes nobres. Com o passar dos anos, a rede expandiu para 3 unidades sendo elas: Barra da Tijuca, Laranjeiras e ParkShopping. 
				</p>

				<a href="./cardapio"><button class="flex-row-i space">Ver Cardápio <span class="material-icons">east</span></button></a>
			</div>
		
		</article>
	</section>

	<section class="promocoes">
        <article class="w-70 auto flex-row space">
            <figure class="relative"><img src="./public/img/promo1.jpg" alt=""><h1 class="absolute">Promo Churrasco na brasa!</h1></figure>
            <figure class="relative"><img src="./public/img/promo2.jpg" alt=""><h1 class="absolute">Pizza só se for agora!</h1></figure>
            <figure class="relative"><img src="./public/img/promo3.jpg" alt=""><h1 class="absolute">Promo vem que ta massa!</h1></figure>   
        </article>
    </section>

	<section class="app">
		<article class="w-70 auto flex-row align-center">

			<figure class="w-50">
				<img src="./public/img/app_3.png" alt="">
			</figure>
			<div class="texto w-50">
				<h2>NOSSO APP</h2>
				<h1>A melhor maneira de pedir a sua <cite>comida</cite> </h1>

				<div class="flex-row-i space w-50">
					<figure> <a href=""><img src="./public/img/gplay.png" alt=""></a></figure>
					<figure> <a href=""><img src="./public/img/astore.png" alt=""></a></figure>
				</div>
			</div>
		
		</article>
	</section>

	<section class="avaliacoes">
		<article class="w-70 auto flex-row">
			<div class="texto w-50">
				<h2>AVALIAÇÕES</h2>
				<h1>Olha só o que nossos <cite>clientes</cite> dizem! </h1>
				<button class="flex-row-i space">Enviar Comentário <span class="material-icons">east</span></button>
			</div>
			<div class="clientes w-50 relative">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reprehenderit iste. Dolor voluptatibus a eum dolorum optio aliquam, ratione laboriosam iste. Exercitationem aliquid error sit, aut ullam in assumenda distinctio.
				</p>
				<h4>André Pereira</h4>

				<div class="flex-row-i space absolute">
					<span class="material-icons">chevron_left</span>
					<span class="material-icons">navigate_next</span>
				</div>				
			</div>
		</article>
	</section>

	<section id="unidades">
		<article class="w-70 auto flex-row space cards">
			<div class="card">
				<figure>
					<img src="./public/img/barra.jpg" alt="">
				</figure>
				<h2>Unidade Barra</h2>
				<p>
					Conheça nossa vasta seleção de bebidas, os mais variados drinks e vinhos a sua disposição.
				</p>

				<button class="flex-row-i space">Como chegar <span class="material-icons">east</span></button>
			</div>

			<div class="card">
				<figure>
					<img src="./public/img/laranjeiras.jpg" alt="">
				</figure>
				<h2>Unidade Laranjeiras</h2>
				<p>
					Os melhores cortes de carne na sua mesa. Veja nossos pratos e saiba o que lhe espera.
				</p>

				<button class="flex-row-i space">Como chegar <span class="material-icons">east</span></button>
			</div>

			<div class="card">
				<figure>
					<img src="./public/img/campogrande.jpg" alt="">
				</figure>
				<h2>Unidade Campo Grande</h2>
				<p>
					Veja nossa lista de massas em uma seleção incrível e saborosa de pizzas só para você.
				</p>

				<button class="flex-row-i space">Como chegar <span class="material-icons">east</span></button>
			</div>
		</article>
	</section>

	<footer>
		<article class="w-70 auto flex-row">

			<div class=" pagamento">
				<figure><img src="./public/img/bandeira-dos-cartoes-de-credito.png" alt=""></figure>

				<article class="flex-row-i space w-50">
					<figure> <a href=""><img src="./public/img/gplay.png" alt=""></a></figure>
					<figure> <a href=""><img src="./public/img/astore.png" alt=""></a></figure>
				</article>
			</div>
			
			<div class=" unidades">	
				<h3>Unidade Barra</h3>
				<p>Av. das Américas, 11.391 - Barra da Tijuca</p>

				<h3>Unidade Laranjeiras</h3>
				<p>Av. Álvaro Chaves, 41  - Laranjeiras</p>

				<h3>Unidade Campo Grande</h3>
				<p>Estrada do monteiro 1200 - Parkshopping Campo Grande</p>
			</div>			

			<div class=" contato">
				
				<h3>Contato</h3>
				<ul>
					<li class="flex-row-i align-center"> <span class="material-icons">phone</span> 21 0000 0000</li>
					<li class="flex-row-i align-center"> <span class="material-icons">phone</span> 21 0000 0000</li>
					<li class="flex-row-i align-center"> <span class="material-icons">phone</span> 21 0000 0000</li>
					<li class="flex-row-i align-center"> <span class="material-icons">mail</span> contato@domhelio.com.br</li>
				</ul>
				
			</div>	

			<figure class=" logo">
				<img src="./public/img/logo.png" alt="">
			</figure>

		</article>
	</footer>

	<div class="mobile">
		<li class="flex-col center abrir_menu"><span class="material-icons">menu</span></li>
	</div>

	<a href="https://api.whatsapp.com/send?phone=552100000000&amp;text=Ola! Gostaria de realizar um orçamento." class='animate__animated animate__pulse animate__infinite' target="_blank" style="position:fixed;bottom:20px;right:30px;z-index: 99999;">
        <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"></path><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"></path></svg>
    </a>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="./public/js/request.js"></script>
</body>
</html>