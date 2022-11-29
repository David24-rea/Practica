<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ingresosp extends CI_Controller {

	public function index()
	{
		$this->load->view('encabezado');
		$this->load->view('Ingresosp/index');
		$this->load->view('pie');
	}
  public function nuevo()
  {
    $this->load->view('encabezado');
    $this->load->view('Ingresosp/nuevo');
    $this->load->view('pie');
  }
}
