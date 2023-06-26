<?php

    class Inscripciones extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            //cargar un modelp
           $this->load->model('Inscripcion');



        }

        //Funcion que renderiza la vista index
        public function registro(){
          $data['inscripciones']=$this->Inscripcion->obtenerTodos();

            $this->load->view('header');
            $this->load->view('inscripciones/registro',$data);
            $this->load->view('footer');
        }

        //Funcion que renderiza la vista nuevo
        public function nuevo(){
            $this->load->view('header');
            $this->load->view('inscripciones/nuevo');
            $this->load->view('footer');
        }

        public function instituciones(){
          $this->load->view('header');
          $this->load->view('inscripciones/instituciones');
          $this->load->view('footer');

        }

        public function normativas(){
          $this->load->view('header');
          $this->load->view('inscripciones/normativas');
          $this->load->view('footer');
        }
        public function guardar(){
          $datosNuevosIncripcion=array("dignidad_ins"=>$this->input->post('dignidad_ins'),"apellido_ins"=>$this->input->post('apellido_ins'),
          "nombre_ins"=>$this->input->post('nombre_ins'),"universidad_ins"=>$this->input->post('universidad_ins'),"movimiento_ins"=> $this->input->post('movimiento_ins'),
          "ciudad_ins"=>$this->input->post('ciudad_ins'),"latitud_ins"=>$this->input->post('latitud_ins'),"longitud_ins"=>$this->input->post('longitud_ins'),"tipo_ins"=>$this->input->post('tipo_ins')
        );
        if($this->Inscripcion->insertar($datosNuevosIncripcion)){
          redirect('inscripciones/registro');

        }else{
          echo "<h1>ERROR AL INSERTAR</h1>";
        }

     }
     public function editar($id_ins){
   $data["inscripcionEditar"]=$this->Inscripcion->obtenerPorId($id_ins);
   $this->load->view('header');
   $this->load->view('inscripciones/editar',$data);
   $this->load->view('footer');
 }
     //FUNCION PARA ELIMINAR CONSTRUCTORES
     public function eliminar($id_ins){
       if ($this->Inscripcion->borrar($id_ins)){
         redirect('inscripciones/registro');
         // code...
       } else {
         echo "ERROR AL BORRAR :/";
       }
     }
     //ACTUALIZAR
      public function procesarActualizacion() {
        $datosEditados = array(
          "dignidad_ins"=>$this->input->post('dignidad_ins'),"apellido_ins"=>$this->input->post('apellido_ins'),
          "nombre_ins"=>$this->input->post('nombre_ins'),"universidad_ins"=>$this->input->post('universidad_ins'),"movimiento_ins"=> $this->input->post('movimiento_ins'),
          "ciudad_ins"=>$this->input->post('ciudad_ins'),"latitud_ins"=>$this->input->post('latitud_ins'),"longitud_ins"=>$this->input->post('longitud_ins'),"tipo_ins"=>$this->input->post('tipo_ins')
        );
        $id_ins =$this->input->post('id_ins');
        if ($this->Inscripcion->actualizar($id_ins, $datosEditados)) {
          redirect("inscripciones/registro");
        } else {
          echo "ERROR AL ACTUALIZAR :(";
        }
      }

        }//cierre de la clases NOOOOOOOOOOO BORRRAARRRR

?>
