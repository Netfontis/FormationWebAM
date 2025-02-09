<?php 
	include('./templates/parts/header.php'); 
	session_start();
?>

<main>

	<section id="slider">
		

<div class="slider-wrapper">
		<div class="slider">
			<img id="slide-1" src="./templates/assets/img/1.jpg" />
			<img id="slide-1" src="./templates/assets/img/2.jpeg" />
			<img id="slide-2" src="./templates/assets/img/3.jpeg" />
			<img id="slide-3" src="./templates/assets/img/4.jpeg" />
		</div>
		<div class="slider-nav">
			<a href="#slide-1"></a>
			<a href="#slide-2"></a>
			<a href="#slide-3"></a>
			<a href="#slide-4"></a>
		</div>
	</div>
	</section>


	<section id="shop">
		
		<div class="product">
			<div class="imgContainer">			
				<img src="./templates/assets/img/1.jpg">
			</div>

			<h2>Limonade Étoilée</h2>
			<h3>5.99€</h3>
			<p>Laissez-vous emporter par ce cocktail envoûtant composé de tequila, de liqueur d'orange, de jus d'ananas et de sirop de grenadine. Avec ses teintes orangées rappelant un coucher de soleil, ce mélange sucré et acidulé est un véritable hommage aux soirées d'été.</p>
			<button>En savoir +</button>
		</div>
		
		<div class="product">
			<div class="imgContainer">			
				<img src="./templates/assets/img/2.jpeg">
			</div>

			<h2>Blueberry Bliss</h2>
			<h3>5.99€</h3>
			<p>Un mélange rafraîchissant de vodka, de jus de canneberge et de purée de myrtilles, parfaitement équilibré avec une touche de sirop de menthe et de jus de citron frais. Ce cocktail d'un bleu profond est une explosion de saveurs fruitées avec une légère note de fraîcheur.</p>
			<button>En savoir +</button>
		</div>
		
		<div class="product">
			<div class="imgContainer">			
				<img src="./templates/assets/img/3.jpeg">
			</div>

			<h2>Emerald Elixir</h2>
			<h3>7.99€</h3>
			<p>Un élixir éclatant d'absinthe, de gin, de sirop de basilic frais et de jus de pomme vert, garni de feuilles de basilic. Ce cocktail vert vif offre une expérience gustative unique, mêlant des saveurs herbacées et fruitées dans une harmonie parfaite.</p>
			<button>En savoir +</button>
		</div>
		
		<div class="product">
			<div class="imgContainer">			
				<img src="./templates/assets/img/4.jpeg">
			</div>

			<h2>Crimson Crush</h2>
			<h3>9.99€</h3>
			<p>Plongez dans ce cocktail audacieux et énergique, associant vodka, liqueur de cerise, jus de cranberry et un soupçon de jus de citron vert. Sa couleur rouge intense capture l'esprit passionné de ce mélange fruité et acidulé, idéal pour égayer n'importe quelle soirée.</p>
			<button>En savoir +</button>
		</div>
		
	</section>

</main>

<?php include('./templates/parts/footer.php'); ?>