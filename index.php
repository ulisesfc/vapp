<!DOCTYPE html>
<html>
<head>
	<title>VozApp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<style type="text/css">
		
	body, html {
		width: 100%;
		height: 100%;
		display: block;
		margin: 0;
		padding: 0;
	}
	.container_bg {
		width: 100%;
		height: 100%;
		display: table;
		background-image: url(img/back.jpg);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
	}
	.container_bg div {
		display: table-cell;
		width: 50%;
	}
	.container_bg div img {
		width: 100%;
		height: auto;		
	}
	div.chica {
		vertical-align: bottom;
    	width: 60%;
	}
	div.texto {
		vertical-align: middle;
    	width: 40%;
	}
	div.texto img {
		transform: translateX(20%);
	}
	
	.container_mobile {
		display: none;
	}
	.modal {
		display: none;
	}

	@media only screen and (max-width: 767px) {
		
	 	.container_mobile {
			display: block;
		}
		.container_desktop {
			display: none;
		}
		.container_mobile .botones {
			width: 80%;
			margin-left: auto;
			margin-right: auto;
			display: block;
			text-align: center;
			padding-top: 30%;
		}
		.container_mobile .botones img {
			max-width: 246px;
			width: 100%;
			display: block;
			margin-right: auto;
			margin-left: auto;
			padding-top: 10px;
			padding-bottom: 10px,
		}
		.modal {
			display: table;
			position: absolute;
			top: 0;
			left: 0;
			background-color: rgba(0,0,0,0.9);
			width: 100%;
			height: 100%;
		}
		.modal .contenido {
			display: table-cell;
			height: 100%;
			vertical-align: middle;
			padding-left: 15%;
			padding-right: 15%;
		}
		.modal .contenido .bg_blanco {
			background-color: #ffffff;
			float: right;
    		clear: both;
    		width: 100%;
    		text-align: center;
    		padding-bottom: 20px;
		}
		.modal .contenido .cerrar-modal {
			float: right;
    		display: block;
    		clear: both;
    		margin-bottom: 10px;	
		}
		.modal .contenido .bg_blanco h3 {
			font-family: sans-serif;
    		font-weight: bold;
    		font-size: 28px;
    		padding-left: 20px;
    		padding-right: 20px;
		}
		.modal .contenido .bg_blanco img {
			width: 90%;
		}
	}
	</style>
</head>
<body>

	<div class="container_desktop container_bg">
		<div class="texto">
			<img src="img/texto.png">
		</div>
		<div class="chica">
			<img src="img/chica.png">
		</div>
	</div>

	<div class="container_mobile container_bg">
		<div class="botones">
			<img src="img/txt-mobile.png">
			<a href="https://play.google.com/store/apps/details?id=com.altanredes.altanvoip&hl=en" target="_blank"><img src="img/btn-googleplay.png"></a>
			<a href="descargables/VozApp_1.5.2_.apk" target="_blank"><img src="img/descarga.png"></a>
			<a href="descargables/VozApp_2.pdf" target="_blank"><img src="img/manual.png"></a>
		</div>
	</div>

	<div class="modal">
		<div class="contenido">
			<img src="img/cerrar.png" class="cerrar-modal">
			<div class="bg_blanco">
				<h3>Descarga aquí</h3>
				<a href="descargables/VozApp_1.5.2_.apk" target="_blank"><img src="img/aceptar.png"></a>
			</div>
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('.modal .cerrar-modal').on('click', function(){
			$('.modal').css({'display':'none'});
		});
	});
</script>