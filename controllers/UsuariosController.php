<?php 

 class UsuariosController extends Usuario{
   /*
    * @author  andrescortes
    * @view
    * @return all entity records <usuario>
    */
      public function index(){
          require_once('views/layouts/header.php');
          require_once('views/usuario/index.php');
          require_once('views/layouts/footer.php');
      }
   /*
    * @author  andrescortes
    * @view
    * @return ""
    */
      public function retos(){
        require_once('views/layouts/header.php');
        require_once('views/usuario/retos.php');
        require_once('views/layouts/footer.php');
    }
     /*
    * @author  andrescortes
    * @view
    * @return ""
    */
    public function entregable(){
        require_once('views/layouts/header.php');
        require_once('views/usuario/entregable.php');
        require_once('views/layouts/footer.php');
    }

    public function search(){
      require_once('views/layouts/header.php');
      require_once('views/usuario/search.php');
      require_once('views/layouts/footer.php');
  }

    public function searchAjax(){
      $nombre ='%'.$_POST['nombre'].'%';
      ?>
      <table class="table">
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Direccion</th>
          </tr>
      <?php
      
      foreach(parent::searchM($nombre) as $r){

        ?>
        
          <tr>
            <td><?php echo $r->nombres ?></td>
            <td><?php echo $r->apellidos ?></td>
            <td><?php echo $r->correo ?></td>
            <td><?php echo $r->direccion ?></td>
          </tr>
      <?php } ?>
        </table>
        <?php
      
    }
      
    public function destroyed(){
      $id = $_REQUEST['id'];

      parent::destroy($id);

      header('location:?c=usuarios&m=index');
    }

 }

?>