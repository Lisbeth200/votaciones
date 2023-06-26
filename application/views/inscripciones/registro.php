<body style="background-color:lightblue">


<div class="row">
  <div class="col-md-8" >
    <h1 align="center"> <img src="https://images.vexels.com/media/users/3/157512/isolated/preview/d737a872708b488d89d0341ac9b8bc5a-personas-contacto-icono-personas.png" alt="..." width="100" height="100"><b>LISTADO DE CANDIDATOS</b></h1>


  </div>
  <br>
  <br>

  <div class="col-md-4">
    <a href="<?php echo site_url('inscripciones/nuevo'); ?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-plus"></i>
    Agregar Candidatos</a>
  </div>
</div>
<br>
<?php if ($inscripciones): ?>
  <table class="table table-striped table-bordered" style="background-color: white;">
    <thead>
      <tr>
        <th>ID</th>
        <th>DIGNIDAD</th>
        <th>APELLIDO</th>
        <th>NOMBRE</th>
        <th>UNIVERSIDAD</th>
        <th>MOVIMIENTO</th>
        <th>CIUDAD</th>
        <th>LATITUD</th>
        <th>LONGITUD</th>
        <th>TIPO</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($inscripciones as $filaTemporal): ?>
        <tr>
          <td>
           <?php echo $filaTemporal->id_ins ?>
          </td>

          <td>
           <?php echo $filaTemporal->dignidad_ins ?>
          </td>
          <td>
           <?php echo $filaTemporal->apellido_ins ?>
          </td>
          <td>
           <?php echo $filaTemporal->nombre_ins ?>
          </td>
          <td>
           <?php echo $filaTemporal->universidad_ins ?>
          </td>
          <td>
           <?php echo $filaTemporal->movimiento_ins ?>
          </td>
          <td>
           <?php echo $filaTemporal->ciudad_ins ?>
          </td>
          <td>
           <?php echo $filaTemporal->latitud_ins ?>
          </td>
          <td>
           <?php echo $filaTemporal->longitud_ins ?>
          </td>
          <td>
           <?php echo $filaTemporal->tipo_ins ?>
          </td>



          <td class="text-center">
            <a href="<?php echo site_url('/inscripciones/editar/'); ?><?php echo $filaTemporal->id_ins;?>" title="Editar Candidato" onclick="return confirm('¿Estas Seguro de editar el candidato?');">
              <i class="glyphicon glyphicon-pencil"></i>
                </a>
            &nbsp; &nbsp; &nbsp;
            <a href="<?php echo site_url(); ?>/inscripciones/eliminar/<?php echo $filaTemporal->id_ins;?>" title="Eliminar Candidato" onclick="return confirm('¿Estas Seguro de eliminar el registro candidatos?');"style="color:red">
            <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>

        </tr>

      <?php endforeach; ?>
    </tbody>
  </table>

<?php else: ?>
  <h1>No hay Datos</h1>
<?php endif; ?>
</body>
