<body style="background-color:#BC71E1;">


<h1 align="center"> <img src="<?php echo base_url('assets/images/nuev.png') ?>" alt="..." width="100" height="100"><b>NUEVOS CANDIDATOS</b></h1>
<br>
<form class=""
id="frm_nuevo_inscripcion"
action="<?php echo site_url(); ?>/inscripciones/guardar"
method="post">
<div class="container">
    <div class="row">
      <div class="col-md-4">
                <label for="">Dignidad:</label>
               <select class="form-control" arial-label"Defaul select example" class="form-control" name="dignidad_ins" value="" id="dignidad_ins">
                 <option selected>Seleccione</option>
                  <option value="Presidente">Presidente</option>
                  <option value="Asambleista Nacional">Asambleista Nacional</option>
                  <option value="Asambleista Provincial">Asambleista Provincial</option>
                </select>
             </div>
             <div class="col-md-4">
                 <label for="">Apellidos:</label>
                 <br>
                 <input type="text"
                 placeholder="Ingrese el apellido"
                 class="form-control"
                 name="apellido_ins" value=""
                 id="apellido_ins">
             </div>
             <div class="col-md-4">
               <label for="">Nombres:</label>
               <br>
               <input type="text"
               placeholder="Ingrese el nombre"
               class="form-control"
               name="nombre_ins" value=""
               id="nombre_ins">
             </div>
      </div>


  </div>
    <br>
    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <label for="">Universidad:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su Universidad"
        class="form-control"
        name="universidad_ins" value=""
        id="universidad_ins">

    </div>
    <div class="col-md-4">
        <label for="">Ciudad:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su ciudad"
        class="form-control"
        name="ciudad_ins" value=""
        id="ciudad_ins">
    </div>

      <div class="col-md-4">
        <label for="">Movimiento:</label>
       <select class="form-control" arial-label"Defaul select example" class="form-control" name="movimiento_ins" value="" id="movimiento_ins">
         <option selected>Seleccione</option>
          <option value="Unidad Popular">Unidad Popular</option>
          <option value=" Pachakutik"> Pachakutik</option>
          <option value="Partido Sociedad Patriótica">Partido Sociedad Patriótica</option>
          <option value="Partido Avanza">Partido Avanza</option>
          <option value="Partido Izquierda Democrática">Partido Izquierda Democrática</option>
          <option value="Movimiento Democracia Sí">Movimiento Democracia Sí</option>
        </select>

      </div>

        </div>
        </div>
        <br>

        <div class="container">
      <div class="row">
        <div class="col-md-4">
            <label for="">Latitud:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la latitud"
            class="form-control" readonly
            name="latitud_ins" value=""
            id="latitud_ins">

        </div>
        <div class="col-md-4">
            <label for="">Longitud:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la longitud"
            class="form-control" readonly
            name="longitud_ins" value=""
            id="longitud_ins">

        </div>
        <div class="col-md-4">
          <label for="">Tipo:</label>
         <select class="form-control" arial-label"Defaul select example" class="form-control" name="tipo_ins" value="" id="tipo_ins">
           <option selected>Seleccione</option>
            <option value="Izquierda">Izquierda</option>
            <option value="Derecha">Derecha</option>
          </select>

        </div>
        </div>
<br>
<div class="row">
  <div class="col-md-12">
    <div id="mapaUbicacion" style="height:500px;width:100%;border:2px solid black;">

    </div>

  </div>

</div>
    </div>

  <script type="text/javascript">
     function initMap(){
       var centro=new google.maps.LatLng(-0.9103118368246511,-78.6288056178432);

       var mapa1=new google.maps.Map(
          document.getElementById('mapaUbicacion'),
          {
            center:centro,
            zoom:7,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          }
       );
       var marcador=new google.maps.Marker({
         position:centro,
         map:mapa1,
         title:"Seleccione su direccion",
         icon:"<?php echo base_url('assets/images/iconom.png');?>",
         draggable:true
       });
       google.maps.event.addListener(marcador,'dragend',function(event){
         //alert("Se termino el Drag");
         document.getElementById('latitud_ins').value=
         this.getPosition().lat();
         document.getElementById('longitud_ins').value=
         this.getPosition().lng();
       });

     }//cierre de la funcion
  </script>



    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url();?>/inscripciones/registro"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</div>
</form>
</body>
