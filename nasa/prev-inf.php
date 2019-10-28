<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Poseidon</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4pW679wj8XongBAJOk1YsnFwCtamwix0&callback=myMap"></script>

</head>
<body>
    
<?php include "header.html";?>

 <div>
 	<?php 
// &rad=900
 	if($_GET){
 		echo '<iframe src="https://image.maps.api.here.com/mia/1.6/mapview?app_id=zFSLlGFsvk0qLsopj631&w=1300&app_code=TCUgEN7m6swKDxr8eCnMDQ&ml=por&c=po
&lat='.$_GET['latitude'].'&lon='.$_GET['longitude'].'" width="1200" height="320" style="width: 100%;" > ';

 		echo "</iframe>";
 	}else{
	?>
<div class="container-fluid my-5">
	<div class="row align-items-center justify-content-center " >
		<div class="col-10 col-md-8">
			<h1>
				Características do Mar de acordo com o local escolhido.
			</h1>
			<h5 >
				Verifique as coordenadas de latitude e longitude sucessivamente no globo. Reescreva elas no formulário.
			</h5><br><br>
			<form action="index-controller.php" method="post">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Latitude</label>
			      <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Defina a Latitude">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputAddress">Longitude</label>
			      <input type="text" name="longitude" class="form-control"  placeholder="Defina a Longitude" id="longitude">
			    </div>
			  </div>
			 <br>
			 <div class="row">
			 	
			 <div class="col-12 col-md-5 mb-3">
			 	<button type="submit" class="btn btn-primary p-3 w-100" value="pesquisar" name="botao">Pesquisar</button>
			 </div>
			  
			 </div>
			</form>
		</div>
		
	</div>
</div>

 	
 	<!-- <iframe src="https://image.maps.api.here.com/mia/1.6/mapview?app_id=zFSLlGFsvk0qLsopj631&app_code=TCUgEN7m6swKDxr8eCnMDQ&ml=por&c=po
&lat=48.8566&lon=2.3522&w=1200" width="1200" height="500" style="width: 100%;"></iframe> -->
 </div>
<?php } ?>
<?php 

if($_GET){
 ?>

<div class="containder-fluid my-5">
	<div class="row justify-content-center align-items-center my-5">
		<div class="col-5">
			<h1>Verifique a Temperatura</h1>
			<h3>O lixo acumula o calor</h3>
			<p>
				Lugares que possuem calor constante, independente das mudanças climáticas pode ser decorrente ao lixo. <strong>Confira no mapa a temperatura do local escolhido.</strong>
			</p>

		</div>

		<div class="col-5">
			<h1>Analise a Clorofila</h1>
			<h3>Pouca clorofila, pouca vida...</h3>
			<p>
				Plantas e alguns seres vivos contém clorofila. Se a região escolhida não possúi um nível significante, pode ser que haja lixo no local. <strong>Confira o nível de clorofila do local escolhido.</strong>
			</p>

		</div>
	</div>
</div>

<div class="containder-fluid my-5 bg-primary text-white">
	<div class="row justify-content-center align-items-center my-5">
		<div class="col-5">
			<h1>Confira o Oxigênio Dissolvido, Pressão & Salinidade</h1>
			<h3>Qualidade da água</h3>
			<p>
				O oxigênio dissolvido é o principal indicador de que existe ou não vida em determinada região do mar. A fluidez do O² garante a sobrevivência de espécies marítimas. Se houver pocuo O², pode haver lixo. <strong>Confira no mapa os elementos do local escolhido.</strong>
			</p>
		</div>

		<div class="col-5">
			<h1>Correntes Marítimas</h1>
			<h3>Siga a Maré...</h3>
			<p>
				Correntes marítimas são deslocamentos de massas de água oceânicas geradas pela inércia de rotação do planeta e pelos ventos. As correntes se movimentam por todos os oceanos do mundo, transportando calor e por isso apresentam influência direta na pesca, vida marinha e no clima. <strong>Confira a direção das correntes e suas características.</strong>
			</p>
		</div>
	</div>
</div>
<div class="containder-fluid">
	<div class="row justify-content-center align-items-center">
		<div class="col-12">
			<iframe width="2000" height="500" src="https://worldview.earthdata.nasa.gov/?v=-156.11332327039378,-127.3459595234457,42.331521221399726,212.21521882917875&t=2015-09-07-T00%3A00%3A00Z&l=BlueMarble_ShadedRelief_Bathymetry,MODIS_Aqua_CorrectedReflectance_TrueColor(hidden),MODIS_Terra_CorrectedReflectance_TrueColor,MODIS_Aqua_Chlorophyll_A,MODIS_Terra_Chlorophyll_A,Reference_Labels(hidden),Reference_Features(hidden),Coastlines"></iframe>
		</div>
	</div>
</div>
<?php }?>


</body>
</html>