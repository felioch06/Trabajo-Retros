
<div class="container">
<br>

<!-- BreadCrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item active" aria-current="page">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Usuarios registrados</li>
  </ol>
</nav>

<!-- Fin BreadCrumb -->
   <br>
   <a href="?c=usuarios&m=create" class="btn btn-info"> <i class="fas fa-plus"></i> Crear usuarios</a>
   <a href="?c=usuarios&m=search" class="btn btn-info"> <i class="fas fa-search"></i> Busqueda Avanzada</a>
   <br><br>

   <!-- Tabla usuarios -->
   <table class="table table-sm table-hover table-striped table-bordered">
   <tr >
      <th colspan="7" class="text-center bg-info text-white"><?php echo count(parent::request()); ?> Usuario registrados</th>
   </tr>
       <tr class="bg-secondary text-white">
           <th>IMG</th>
           <th>NOMBRES</th>
           <th>APELLIDOS</th>
           <th>CORREO</th>
           <th>DIRECCION</th>
           <th>TELEFONO</th>
           <th>CRUD</th>
       </tr>
<?php
 $i=0;
foreach(parent::request() as $request){
 $i++;
?>
       <tr>
           <td class="text-center"><img src="<?php echo $request->foto_perfil ?>" alt="" width="40%" ></td>
           <td><?php echo $request->nombres ?></td>
           <td><?php echo $request->apellidos ?></td>
           <td><?php echo $request->correo ?></td>
           <td><?php echo $request->direccion ?></td>
           <td><?php echo $request->telefono ?></td>
           <td>

           <div class="btn-group" role="group" aria-label="Basic example">

           <button href="" data-id="<?php echo $request->id ?>" class="btn btn-warning btn-sm felipe" >Editar</button>

           <a href="" id="alumno_<?php $id = $request->id; echo $id?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Emininar</a>
           
           <!-- Capturar Id Eliminar -->
           <script>
            var id_alumno = document.getElementById('alumno_<?php print($id);?>');

            id_alumno.addEventListener('click', function(){

              document.getElementById('texto').innerHTML = "Deseas Eliminar El Usuario <?php print($request->nombres) ?>";
              document.getElementById('input').value = "<?php print($id) ?>";
            });
          </script> 

          <!-- Capturar Id Eliminar -->

           <a href="" class="btn btn-info btn-sm">Perfil</a>
           </div>
           </td>
       </tr>

       
<?php  } ?>

<!-- Modal Eliminar -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <p id="texto"></p>
        <input id="input" type="hidden" >

      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="enviar" class="btn btn-primary">Eliminar</button>
        
        <!-- Script Eliminar Usuario -->
        <script>
              document.getElementById('enviar').addEventListener('click', function(){
              var getInput = document.getElementById('input').value;
              location.href = `?c=Usuarios&m=destroyed&id=${ getInput }`;
            })
        </script>
        <!-- Fin Script Eliminar Usuario -->

      </div>
    </div>
  </div>
</div>

<!-- Fin Modal Eliminar -->


<!-- Modal Actualizar -->
<div class="modal fade" id="exampleModalE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Formulario -->
     <div id="response_result">
     </div> 
        <!-- Fin Formulario -->

      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Acutalizar -->
   </table>
</div>