<?php 
class Usuario extends DB{
    
  public function store($Nombres,$Apellidos,$Correo,$Direccion,$Telefono,$foto_perfil,$created_at,$updated_at){
      try{
        $q=parent::connect()->prepare("INSERT INTO usuarios (nombres,apellidos,correo,direccion,telefono,foto_perfil,created_at,updated_at)VALUES(?,?,?,?)");
        $q->bindParam(1,$Nombres,PDO::PARAM_STR);
        $q->bindParam(2,$Apellidos, PDO::PARAM_STR);
        $q->bindParam(3,$Correo,PDO::PARAM_STR);
        $q->bindParam(4,$Direccion,PDO::PARAM_STR);
        $q->bindParam(5,$Telefono,PDO::PARAM_STR);
        $q->bindParam(6,$foto_perfil,PDO::PARAM_STR);
        $q->bindParam(7,$created_at,PDO::PARAM_STR);
        $q->bindParam(8,$updated_at,PDO::PARAM_STR);
        $q->execute();
      }catch(Exception $e){
         die($e->getMessage());
      }
  }
  public function request(){
    try{
      $q=parent::connect()->prepare("SELECT * FROM usuarios");
      $q->execute();
      return $q->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
       die($e->getMessage());
    }
}
  public function update($Nombres,$Apellidos,$Correo,$Direccion,$Telefono,$foto_perfil,$created_at,$updated_at){
    try{
      $q=parent::connect()->prepare("UPDATE usuario SET nombres= ? , apellidos = ?, correo =  ? , direccion= ?, telefono =  ?, foto_perfil= ? , updated_at = ? WHERE id = ?");
        $q->bindParam(1,$Nombres,PDO::PARAM_STR);
        $q->bindParam(2,$Apellidos, PDO::PARAM_STR);
        $q->bindParam(3,$Correo,PDO::PARAM_STR);
        $q->bindParam(4,$Direccion,PDO::PARAM_STR);
        $q->bindParam(5,$Telefono,PDO::PARAM_STR);
        $q->bindParam(6,$foto_perfil,PDO::PARAM_STR);
        $q->bindParam(7,$updated_at,PDO::PARAM_STR);
        $q->bindParam(8,$UsuarioID,PDO::PARAM_INT);
      $q->execute();
    }catch(Exception $e){
       die($e->getMessage());
    }
}
  public function searchM($nombre){
    try{
      $q=parent::connect()->prepare("SELECT * FROM usuarios WHERE nombres LIKE ?");
      $q->bindParam(1,$nombre,PDO::PARAM_STR);
      $q->execute();
      return $q->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e){
       die($e->getMessage());
    }
}
public function destroy($UsuarioID){
  try{
    $q=parent::connect()->prepare("DELETE FROM usuarios WHERE id = ?");
    $q->bindParam(1,$UsuarioID,PDO::PARAM_INT);
    $q->execute();
  }catch(Exception $e){
     die($e->getMessage());
  }
}
}
?>