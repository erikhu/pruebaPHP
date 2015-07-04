<html>
	<head>
		<style type="text/css">
			p {
				background:blue;
			}
			
			#resultado{
				background:white;
			}
			
			.ciclo{
				padding: 5px;
				background: black;
			}
			
			.nombre{
				background: pink;
				padding: 10px;
			}
			h4{
				background: #fafafa;
			}
		</style>
		<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
		<script type="text/javascript">
			$("document").ready(function(){
					$("#formulario").submit(function(e){
						
						var inc = $("#formulario").serialize();
						$.get("solicitudes.php", inc).done(function(data){
						$("#resultado").html(data);		
						}).fail(function(){
								alert("no funciono")});
						 return false;
						 e.preventDefault();
						
					});
				});
		</script>
	</head>
	<body>
	<form id="formulario">
		<input name="nombre"/>
		<input type="submit" value="grabar">	
	</form>
	<label>Resultado peticion ajax:</label><p id="resultado"> </p>
	<?php
		class Carro{
				var $nombre = "nombre_defualt";
				var $marca = "marca_default";
				var $kilometraje = 0;
				public function setNombre($nombre){
						$this->nombre = $nombre; 
				}
				public function getNombre(){
						return $this->nombre;
				}
				public function setMarca($marca){
						$this->marca = $marca;
				}
				public function getMarca(){
						return $this->marca;
				}
				public function avanzar($numero){
					$this->kilometraje+=$numero;
				}
				public function getKilometraje(){
					return $this->kilometraje;
				}
				public function resetearKilometraje(){
					return $this->kilometraje = 0 ;
				}
		}
		
		$carrito = new Carro;
		$carrito->setNombre("Erik");
		$carrito->setMarca("Chevrolet");
		echo "<p>". $carrito->getNombre() . "  marca : " . $carrito->getMarca() . " kilometraje: ". $carrito->getKilometraje()."</p>";
		$carrito->avanzar(51);
		$carrito->avanzar(51);
		echo "<p>". $carrito->getNombre() . "  marca : " . $carrito->getMarca() . " kilometraje: ". $carrito->getKilometraje()."</p>";
		
		$arreglo = array("Carro","Casa","Perro","Papa","Mama","Sol","Luna");
	?>
	<div class="ciclo">
		<?php for($i = 0 ; $i < 10 ; $i++): ?>
			<p>	<?php  echo " No lo puedo creer"?>			</p>
		<?php endfor;?>		
	</div>	
	
	<div class="nombre">
		<?php foreach ($arreglo as $a):?>
			<h4> <?php echo $a ?></h4>
		<?php endforeach;?>	
	</div>
	
	

	
</body>
</html>