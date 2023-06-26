<h1 class="text-center">DOMICILIOS DE LOS ASAMBLEISTAS NACIONALES</h1>
<div class="row">
	<div class="col-md-12">
		<div id="mapaLugares" style="height:500px; width:100%; border:2px solid black;">
			<script type="text/javascript">
				function initMap(){
					var centro=
					new google.maps.LatLng(-0.9329654531911549, -78.61452696800743);
					var mapaLugaresTuristicos=new google.maps.Map(
						document.getElementById('mapaLugares'),
						{
							center:centro,
							zoom: 7,
							mapTypeId:google.maps.MapTypeId.HYBRID
						}
					);
					<?php if($inscripcion2): ?>
					<?php foreach($inscripcion2 as $lugarTemporal): ?>

					var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_ins; ?>,<?php echo $lugarTemporal->longitud_ins; ?>);
					var marcador=new google.maps.Marker({
						position:coordenadaTemporal,
						title:"<?php echo $lugarTemporal->dignidad_ins; ?> <?php echo $lugarTemporal->nombre_ins; ?> <?php echo $lugarTemporal->universidad_ins; ?>",
            icon:"<?php echo base_url('assets/images/icona.png');?>",
            map:mapaLugaresTuristicos
					});
					<?php endforeach; ?>
					<?php endif; ?>
				}//CIERRE DE LA CLASE
			</script>

		</div>

	</div>

</div>
