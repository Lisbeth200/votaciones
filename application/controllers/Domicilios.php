<?php
/**
 *
 */
class Domicilios extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Domicilio');

  }

  public function presidentes(){
    $data["inscripcion1"]=$this->Domicilio->obtenerTodosPresidente();
    $this->load->view('header');
    $this->load->view('domicilios/presidentes',$data);
    $this->load->view('footer');
  }

  public function nacionales(){
    $data["inscripcion2"]=$this->Domicilio->obtenerTodosNacional();
    $this->load->view('header');
    $this->load->view('domicilios/nacionales',$data);
    $this->load->view('footer');
  }
  public function provinciales(){
    $data["inscripcion3"]=$this->Domicilio->obtenerTodosProvincial();
    $this->load->view('header');
    $this->load->view('domicilios/provinciales',$data);
    $this->load->view('footer');
  }
  public function general(){
    $data["inscripcion1"]=$this->Domicilio->obtenerTodosPresidente();
    $data["inscripcion2"]=$this->Domicilio->obtenerTodosNacional();
    $data["inscripcion3"]=$this->Domicilio->obtenerTodosProvincial();
    $this->load->view('header');
    $this->load->view('domicilios/general',$data);
    $this->load->view('footer');
  }

  public function tipos(){
    $data["tipo1"]=$this->Domicilio->obtenerTodosIzquierda();
    $data["tipo2"]=$this->Domicilio->obtenerTodosDerecha();
    $this->load->view('header');
    $this->load->view('domicilios/tipos',$data);
    $this->load->view('footer');
  }
}//ciere de la clase


 ?>
