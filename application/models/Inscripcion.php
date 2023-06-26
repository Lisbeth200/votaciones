<?php
class Inscripcion extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor un instructor en mysql
  function insertar($datos){

  return $this->db->insert("inscripcion",$datos);
  }
  //FUNCION PARA CONSULTAR Instructores

  function obtenerTodos(){
    $listadoIncripciones=$this->db->get("inscripcion");

    if($listadoIncripciones->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoIncripciones->result();
    }else {
      return false;
    }
  }
  //BORRAR Instructores
  function borrar($id_ins){
    //DELTE FROM INSTRUCTOR WHERE id_ins
    $this->db->where("id_ins",$id_ins);
    if ($this->db->delete("inscripcion")) {
      return true;
    } else {
      return false;
    }

  }
  function obtenerPorId($id_ins) {
      $this->db->where("id_ins", $id_ins);
      $inscripcion = $this->db->get("inscripcion");
      if ($inscripcion->num_rows() > 0) {
          return $inscripcion->row();
      } else { // no hay datos
          return false;
      }
      }

      // función para actualizar un instructor
      function actualizar($id_ins, $datos) {
          $this->db->where("id_ins", $id_ins);
          return $this->db->update('inscripcion', $datos);
      }

}
 ?>

 
