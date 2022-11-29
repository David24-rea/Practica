<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {


  public function __construct(){
    parent::__construct();
      error_reporting(0);


  }

	public function index()
	{
    $this->load->view('encabezado');
    //$this->load->view('Paises/index');
    $this->load->view('noticias/index');
    // echo "<h1> Vistas de empresas</h1>";
    $this->load->view('Pie');
	}
}
