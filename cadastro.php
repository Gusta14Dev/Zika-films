<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link rel="stylesheet" href="css/all.css" >
  
	<title></title>
	
	<style>
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
		  background-image: URL(imagens/fundo1.jpg);
		  background-size: cover;
		  background-position: center;
		}
		
		#login {
		    /* Apenas para centralizar o form na página */
		    position: absolute;
		    top:50%;
		    left:50%;
		    transform: translateX(-50%) translateY(-50%);
		    width: 95%;
		    max-width: 360px;
		    background-color: #F7F7F7;
		    /* Para ver as bordas do formulário */
		    padding: 1em;
		    border: 2px solid #CECECE;
		    border-radius: 1em;
		}
	</style>
</head>
<body>
	<form id="login" action="/pagina-processa-dados-do-form" method="post">
	    <div class="container-input">
	        <label for="nome">Nome de usuario:</label>
	        <input type="text" id="nome" />
	    </div>
	    <div>
	        <label for="email">E-mail:</label>
	        <input type="email" id="email" />
	    </div>
	    <div>
	        <label for="senha">Senha:</label>
	        <input type="password" id="senha">
	    </div>
		<div class="button">
       	 <button type="submit">Cadastrar</button>
    	</div>
	</form>
</body>
</html>