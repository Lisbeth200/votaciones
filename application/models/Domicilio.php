<?php

class Domicilio extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function obtenerTodosPresidente(){
    $this->db->where('dignidad_ins','Presidente');
    $listadoInscripciones=$this->db->get("inscripcion");

    if($listadoInscripciones->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoInscripciones->result();
    }else {
      return false;
    }
  }

  function obtenerTodosNacional(){
    $this->db->where('dignidad_ins','Asambleista Nacional');
    $listadoInscripciones=$this->db->get("inscripcion");

    if($listadoInscripciones->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoInscripciones->result();
    }else {
      return false;
    }
  }

  function obtenerTodosProvincial(){
    $this->db->where('dignidad_ins','Asambleista Provincial');
    $listadoInscripciones=$this->db->get("inscripcion");

    if($listadoInscripciones->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoInscripciones->result();
    }else {
      return false;
    }
  }

  function obtenerTodosIzquierda(){
    $this->db->where('tipo_ins','Izquierda');
    $listadoInscripciones=$this->db->get("inscripcion");

    if($listadoInscripciones->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoInscripciones->result();
    }else {
      return false;
    }
  }
  function obtenerTodosDerecha(){
    $this->db->where('tipo_ins','Derecha');
    $listadoInscripciones=$this->db->get("inscripcion");

    if($listadoInscripciones->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoInscripciones->result();
    }else {
      return false;
    }
  }
}
?>
