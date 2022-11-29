<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctores extends CI_Controller {

	public function index()
	{
		$this->load->view('encabezado');
		$this->load->view('doctores/index');
		$this->load->view('pie');
	}
  public function nuevo()
  {
    $this->load->view('encabezado');
    $this->load->view('doctores/nuevo');
    $this->load->view('pie');
  }

}
