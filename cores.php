<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formatação</title>
		
		
		<?php
			$texto = $_GET["texto"];
			$tamanho = $_GET["tamanho"];
			$cor = $_GET["cor"];
			$corfundo = $_GET["corfundo"];
		?>
		
		<style>
			body {
				background-color: <?php echo $corfundo; ?>;}
			span.texto {
				font-size: <?php echo $tamanho;?>;
				color: <?php echo $cor;?>;
				
			}
		</style>


</head>


<body>
	<h1> Formatação CSS e PHP</h1>

			<?php
			echo "<span class = 'texto'>$texto <span>";
			?>

			<p><a href="cores.html"> Voltar </a></p>


	
</body>
</html>