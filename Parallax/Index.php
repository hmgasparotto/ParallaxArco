<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Parallax</title>
	
	<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css' />
	<link href="Content/Clear.css" rel="stylesheet" type="text/css" />
	<link href="Content/BaseParallax.css" rel="stylesheet" type="text/css" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
		$(document).ready(function(){
            $('section[data-type="background"]').each(function(){
                var $bgobj = $(this);
				$(window).scroll(function() {
					var yPos = -($window.scrollTop() / $bgobj.data('speed'));
					var coords = '50% '+ yPos + 'px';
					$bgobj.css({ backgroundPosition: coords });
                });
            });     
        });
	</script>
	<style>
#foto1 {
	background: url("Content/Photos/foto1.jpg") 50% 0 repeat fixed;
	background-size: 100% 100%;
	/*min-height: 810px;*/
	height: 100%;
	margin: 0 auto; 
	width: 100%; 
	max-width: 1920px; 
	position: relative;
}

#foto1 img {
	height: inherit;
	width: inherit;
}

#foto2{
	background: url("Content/Photos/foto2.jpg") 50% 0 repeat fixed;
	background-size: 100% 100%;
	/*min-height: 810px;*/
	height: 100%;
	margin: 0 auto; 
	width: 100%; 
	max-width: 1920px;
	position: relative; 
	-webkit-box-shadow: 0 0 50px rgba(0,0,0,0.8);
	box-shadow: 0 0 50px rgba(0,0,0,0.8);
}

#foto3{
	background: url("Content/Photos/foto3.jpg") 50% 0 repeat fixed;
	background-size: 100% 100%;
	/*min-height: 810px;*/
	height: 100%;
	margin: 0 auto; 
	width: 100%; 
	max-width: 1920px;
	position: relative; 
	-webkit-box-shadow: 0 0 50px rgba(0,0,0,0.8);
	box-shadow: 0 0 50px rgba(0,0,0,0.8);
}

#foto4{
	background: url("Content/Photos/foto4.jpg") 50% 0 repeat fixed;
	background-size: 100% 100%;
	/*min-height: 810px;*/
	height: 100%; 
	margin: 0 auto; 
	width: 100%; 
	max-width: 1920px;
	position: relative; 
	-webkit-box-shadow: 0 0 50px rgba(0,0,0,0.8);
	box-shadow: 0 0 50px rgba(0,0,0,0.8);
}

#foto5{
	background: url("Content/Photos/foto5.jpg") 50% 0 repeat fixed;
	background-size: 100% 100%;
	/*min-height: 810px;*/
	height: 100%;
	margin: 0 auto; 
	width: 100%; 
	max-width: 1920px;
	position: relative; 
	-webkit-box-shadow: 0 0 50px rgba(0,0,0,0.8);
	box-shadow: 0 0 50px rgba(0,0,0,0.8);
}

#foto6{
	background: url("Content/Photos/foto6.jpg") 50% 0 repeat fixed;
	background-size: 100% 100%;
	/*min-height: 810px;*/
	height: 100%;
	margin: 0 auto; 
	width: 100%; 
	max-width: 1920px;
	position: relative; 
	-webkit-box-shadow: 0 0 50px rgba(0,0,0,0.8);
	box-shadow: 0 0 50px rgba(0,0,0,0.8);
}
	</style>
</head>
<body>
	<div class="fixed-top-bar">
		<img src="Content/Logo/arco.png" />
		<a href="#">Memórias de uma Época</a>
	</div>
	
    <section id="foto1" data-type="background" data-speed="10">
	</section>
	<section class="text" data-type="background" data-speed="10">
		<article>De voz calma e conversa longa. Seu rosto possui leves rugas que nos permite compreender a experiência de uma vida e sua trajetória. Eli Tomazin, aos seus 68 anos tem tanta história para contar quanto os artefatos que enchem de vida seu antiquário, o Época. </article>
	</section>  
	<section id="foto2" data-type="background" data-speed="10">
	</section>
	<section class="text" data-type="background" data-speed="10">
		<article>Bancos do antigo Cine Independência, jogos de porcelanas japonesas e móveis de madeira do século passado. Dona Eli, pode ser encontrada quase todas as tardes como se estivesse habitando outra época, ou bem dizer, no Época, seu antiquário. Localizado na rua Visconde de Pelotas, centro da cidade de Santa Maria, o lugar remete à uma máquina do tempo em plena cidade. Construído e conservado por Dona Eli e seu marido Miguel, o Época existe há mais de 15 anos em Santa Maria. Para ela, cuidar do antiquário é uma forma de lazer, um hobbie. Professora aposentada há mais de 10 anos, conhece cada canto, cada detalhe de uma peça de décadas passadas, tudo sobre os artefatos do Época, de onde vieram e a história de cada um. Parte integrante da história do antiquário, Dona Eli, cuida daquele espaço com muito carinho e atenção, trata cada peça como uma amiga que conta suas histórias num fim de tarde. </article>
	</section>  
	<section id="foto3" data-type="background" data-speed="10">
	</section>
	<section class="text" data-type="background" data-speed="10">
		<article>O Época antiguidades hospeda objetos que com um simples olhar curioso, nos faz despertar uma consciência de criança, conseguimos imaginar quem utilizou cada xícara, se foi em uma tarde fria de inverno, ou em uma manhã de primavera. Através de simples objetos, é possível voltarmos em poucos minutos a tempos anteriores ao século XXI. Como fotografias, que em poucos instantes nos revelam algo para a eternidade. E a cada foto registrada de Dona Eli, uma história era contada sobre outras tantas que estão presentes em cada objeto que cruzam os olhares de quem visita o antiquário. </article>
	</section>  
	<section id="foto4" data-type="background" data-speed="10">
	</section>
	<section class="text" data-type="background" data-speed="10">
		<article>Ocupar a mente, o coração, ter um espaço para que pessoas apaixonadas pelo pretérito possam trocar uma conversa enquanto procuram algum objeto, ou passem por ali apenas para conhecer e observar as prateleiras bordadas de antigas peças. Hobbie, trabalho, dedicação, devoção, terapia, difícil fazer meras comparações entre o antiquário e a vida de Dona Eli. Em meio a sutilezas muitas vezes relegadas ao passado, podem servir de inspiração para muitas pessoas.
			"Meu marido sempre fala que enquanto nós não estivermos tomando remédios assim como muitos de nossa idade o antiquário estará cumprindo seu papel", conta Dona Eli satisfeita.
		</article>
	</section>  
	<section id="foto5" data-type="background" data-speed="10">
	</section>   
	<section class="text" data-type="background" data-speed="10">
		<article>O cabelo escovado, unhas pintadas, roupas impecavelmente ajustadas. A elegância de Dona Eli, tem referência em muitos objetos usados por mulheres em épocas atrás. Nas paredes, retratos antigos, quadros, louças, que nada tem de velhos, por que trazem memórias de outros tempos.  </article>
	</section>  
	<section id="foto6" data-type="background" data-speed="10">
	</section>
	<section class="text" data-type="background" data-speed="10">
		<article>Mais do que apresentar a história em forma de objetos, o antiquário Época traz também a história em forma de vida através de Eli Tomazin. Dona Eli é só um exemplo das várias pessoas da terceira idade que decidiram não parar suas atividades, apesar da influência do tempo e suas consequências. Essas pessoas compõem importante parcela da população que, independente da faixa etária, fizeram e ainda fazem sua contribuição para sociedade. Milhares de Donas Eli estão espalhadas pelo país servindo de exemplo para os mais jovens através dos exemplos de suas histórias de vida.</article>
	</section>
	<div class="fixed-bottom-bar">
		<h2>Autores: Francys Albrecht, Jéssica Ribeiro, Kelem Duarte, Paola Cervo Spencer e Paula Bisio Mattos</h2>
	</div>
</body>
</html>