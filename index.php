<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="css/all.css" >
  
	<title></title>
	<style type="text/css">
		#container{
			margin-top:20px;
			position: relative;
			width:100%;
			height:220px;
			max-width:360px;
		}
		#cont-selecionado{
			position: absolute;
			top:3%;
			transform: translateY(-7%);
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			align-content: space-around;
			width: 100%;
			height: auto;
			margin: auto;
		}
		/* Global */

		* {
		  padding:0;
			margin:0;
			vertical-align:baseline;
			list-style:none;
			border:0;
		  box-sizing: border-box;
		}
		
		body {
		  background-color: #000;
		}
		
		/* Botão */
		
		.btn-genero{
		  position: absolute;
	      top:85%;
		  left:50%;
		  background-color: red;
		  border: none;
		  color: white;
		  padding: 10px 5px;
		  width: 60%;
		  max-width: 210px;
		  border-radius: 5px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  transform: translateX(-50%) translateY(-30%);
		}
		
		.selecionado{
			display: none;
			background-color: red;
			border: 1px solid #8b0000;
			border-radius: 2px;
			padding: 5px 5px;
			color: #ffffff;
			font-size: 12px;
			font-weight: bold;
			text-align: center;
			margin-top:5px;
		}
		
		/* Galeria */
		
		
		.gallery {
		  position: absolute;
		  top: 38%;
		  transform: translateY(-10%);
		  width: 100%;
		  height: 90%;
		  max-height: 100px;
		  overflow: hidden;
		}
		
		.gallery__stream {
		  position: relative;
		  top: 50%;
		  transform: translateY(-50%);
		  width: 100%;
		  height: 100%;
		}
		
		.gallery__item {
		  position: absolute;
		  width: 50%;
		  height: 100%;
		  transition: 1s all ease;
		  background-size: cover;
		  background-repeat: no-repeat;
		  background-position: center center;
		  border-radius: 5px;
		}
		
		/* Itens */

		.gallery__item:nth-child(1) {
		  left: 0;
		  z-index: 5;
		  transform: translateX(-100%) scale(.8);
		}
		
		.gallery__item:nth-child(2) {
		  left: 0;
		  z-index: 6;
		  transform: translateX(-50%) scale(.8);
		}
		
		.gallery__item:nth-child(3) {
		  left: 50%;
		  z-index: 8;
		  transform: translateX(-50%) scale(1);
		}
		
		.gallery__item:nth-child(4) {
		  left: 100%;
		  z-index: 6;
		  transform: translateX(-50%) scale(.8);
		}
		
		.gallery__item:nth-child(n+5) {
		  left: 100%;
		  z-index: 7;
		  transform: scale(.8);
		}
		
		/* Backgrounds */

		.bg-1 {
		  background-image: url("imagens/acao.png");
		}
		
		.bg-2 {
		  background-image: url("imagens/aventura.png");
		}
		
		.bg-3 {
		  background-image: url("imagens/animacao.png");;
		}
		
		.bg-4 {
		  background-image: url("imagens/catastrofe.png");
		}
		
		.bg-5 {
		  background-image: url("imagens/comedia-de-acao.png");
		}
		
		.bg-6 {
		  background-image: url("imagens/comedia-dramatica.png");
		}
		
		.bg-7 {
		  background-image: url("imagens/comedia-romantica.png");
		}
		
		.bg-8 {
		  background-image: url("imagens/comedia.png");
		}
		
		.bg-9 {
		  background-image: url("imagens/documentario.png");
		}
		
		.bg-10 {
		  background-image: url("imagens/drama.png");
		}
		
		.bg-11 {
		  background-image: url("imagens/erotico.png");
		}
		
		.bg-12 {
		  background-image: url("imagens/espionagem.png");
		}
		
		.bg-13 {
		  background-image: url("imagens/fantasia.png");
		}
		
		.bg-14 {
		  background-image: url("imagens/faroeste.png");
		}
		
		.bg-15 {
		  background-image: url("imagens/ficcao-cientifica.png");
		}
		
		.bg-16 {
		  background-image: url("imagens/guerra.png");
		}
		
		.bg-17 {
		  background-image: url("imagens/musical.png");
		}
		
		.bg-18 {
		  background-image: url("imagens/policial.png");
		}
		
		.bg-19 {
		  background-image: url("imagens/romance.png");
		}
		
		.bg-20 {
		  background-image: url("imagens/suspense.png");
		}
		
		.bg-21 {
		  background-image: url("imagens/terror.png");
		}

		/* Controles */

		.gallery__prev,
		.gallery__next {
		  position: absolute;
		  top: 50%;
		  z-index: 4;
		  cursor: pointer;
		  
		}
		
		.gallery__prev {
		  left: 0%;
		}
		
		.gallery__next {
		  left: 100%;
		}
		
		.gallery__prev h1{
			transform: translateX(50%) translateY(-50%);
			color: white;
		}
		.gallery__next h1{
			transform: translateX(-150%) translateY(-50%);
		  color: white;
		}
		
		/* Sombras */

		.gallery:before,
		.gallery:after {
		  display: block;
		  content: "";
		  position: absolute;
		  top: 0;
		  width: 20%;
		  height: 100%;
		  z-index: 3;
		}
		
		.gallery:before {
		  left: 0;
		  background:  linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
		}
		
		.gallery:after {
		  right: 0;
		  background:  linear-gradient(to left, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
		}

	</style>
</head>
<body>
	<h1 style="color:white; font-size:16px;">Escolha seus 3 gêneros de filme favoritos:</h1>
	<div id="container">
		<div id="cont-selecionado">
			<input type="button" id="" class="selecionado" value="undefined">
			<input type="button" id="" class="selecionado" value="undefined">
			<input type="button" id="" class="selecionado" value="undefined">
		</div>
		
		<div id="cont-gallery">
			<div class="gallery">
			  <div class="gallery__prev"><h1><i class="fas fa-arrow-circle-left"></i></h1></div>
			  <div class="gallery__next"><h1><i class="fas fa-arrow-circle-right"></i></h1></div>
			  <div class="gallery__stream">
			    <div class="gallery__item bg-1"></div>
			    <div class="gallery__item bg-2"></div>
			    <div class="gallery__item bg-3"></div>
			    <div class="gallery__item bg-4"></div>
			    <div class="gallery__item bg-5"></div>
			    <div class="gallery__item bg-6"></div>
			    <div class="gallery__item bg-7"></div>
			    <div class="gallery__item bg-8"></div>
			    <div class="gallery__item bg-9"></div>
			    <div class="gallery__item bg-10"></div>
			    <div class="gallery__item bg-11"></div>
			    <div class="gallery__item bg-12"></div>
			    <div class="gallery__item bg-13"></div>
			    <div class="gallery__item bg-14"></div>
			    <div class="gallery__item bg-15"></div>
			    <div class="gallery__item bg-16"></div>
			    <div class="gallery__item bg-17"></div>
			    <div class="gallery__item bg-18"></div>
			    <div class="gallery__item bg-19"></div>
			    <div class="gallery__item bg-20"></div>
			    <div class="gallery__item bg-21"></div>
		  	</div>
			</div>
			<button class="btn-genero" id="3">Escolher este Gênero</button>
		</div>
	</div>
	
	<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
	  var stream = document.querySelector('.gallery__stream');
	  var items = document.querySelectorAll('.gallery__item');
	  var botao = document.querySelector('.btn-genero');
	  var selecionado = document.querySelectorAll('.selecionado');
	  var prev = document.querySelector('.gallery__prev');
	  var next = document.querySelector('.gallery__next');
	  
	  var css = '.bg-';
	  var border;
	  var selecionado1;
	  var selecionado2;
	  var selecionado3;
	  var genero = ["Gêneros", "Ação x", "Aventura x", "Animação x", "Catástrofe x", "Comédia de Ação x", "Comédia Dramática x", "Comédia Romântica x", "Comédia x", "Documentário x", "Drama x", "Erótico x", "Espionagem x", "Fantasia x", "Faroeste x", "Ficção científica x", "Guerra x", "Musical x", "Policial x", "Romance x", "Suspense x", "Terror x"];
	
	  prev.addEventListener('click', function() {
	    stream.insertBefore(items[items.length - 1], items[0]);
	    items = document.querySelectorAll('.gallery__item');
	    if(parseInt(botao.id) > 1){
	    	botao.id = parseInt(botao.id)-1;
	    }else {
	    	botao.id = 21;
	    }
	  });
	
	  next.addEventListener('click', function() {
	    stream.appendChild(items[0]);
	    items = document.querySelectorAll('.gallery__item');
	    if(parseInt(botao.id) < 21){
	    	botao.id = parseInt(botao.id)+1;
	    }else {
	    	botao.id = 1;
	    }
	  });
	  
	  botao.addEventListener('click', function() {
	    if(selecionado1 == undefined){
	    	selecionado1 = botao.id;
	    	border = css+selecionado1;
	    	document.querySelector(border).style.border = "2px solid red";
	  
	    	if(selecionado[0].value == 'undefined'){
	    		selecionado[0].value = genero[botao.id];
	    		selecionado[0].id = botao.id;
	    		selecionado[0].style.display = "block";
	    	}
	    }else if(selecionado2 == undefined){
	    	if(botao.id != selecionado1){
	    		selecionado2 = botao.id;
	    		border = css+selecionado2;
	    		document.querySelector(border).style.border = "2px solid red";
	    		if(selecionado[1].value == 'undefined'){
	    			selecionado[1].value = genero[botao.id];
	    			selecionado[1].id = botao.id;
	    			selecionado[1].style.display = "block";
	    		}
	    	}
	    }else if(selecionado3 == undefined){
	    	if(botao.id != selecionado2){
	    		selecionado3 = botao.id;
	    		border = css+selecionado3;
	    		document.querySelector(border).style.border = "2px solid red";
	    		if(selecionado[2].value == 'undefined'){
	    			selecionado[2].value = genero[botao.id];
	    			selecionado[2].id = botao.id;
	    			selecionado[2].style.display = "block";
	    		}
	    	}
	    }
	  });
	  
	  selecionado[0].addEventListener('click', function() {
	    selecionado1 = selecionado[0].id;
	    border = css+selecionado1;
	    document.querySelector(border).style.border = "none";
	  
	    if(selecionado[0].value != 'undefined'){
	    	selecionado1 = undefined;
	    	selecionado[0].value = 'undefined';
	    	selecionado[0].id = "";
	    	selecionado[0].style.display = "none";
	    }
	  });
	  
	  selecionado[1].addEventListener('click', function() {
	    selecionado2 = selecionado[1].id;
	    border = css+selecionado2;
	    document.querySelector(border).style.border = "none";
	  
	    if(selecionado[1].value != 'undefined'){
	    	selecionado2 = undefined;
	    	selecionado[1].value = 'undefined';
	    	selecionado[1].id = "";
	    	selecionado[1].style.display = "none";
	    }
	  });
	  
	  selecionado[2].addEventListener('click', function() {
	    selecionado3 = selecionado[2].id;
	    border = css+selecionado3;
	    document.querySelector(border).style.border = "none";
	  
	    if(selecionado[2].value != 'undefined'){
	    	selecionado3 = undefined;
	    	selecionado[2].value = 'undefined';
	    	selecionado[2].id = "";
	    	selecionado[2].style.display = "none";
	    }
	  });
	});
	</script>
	
</body>
</html>