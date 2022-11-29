<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasientes extends CI_Controller {

	public function index()
	{
		$this->load->view('encabezado');
		$this->load->view('pasientes/index');
		$this->load->view('pie');
	}
  public function nuevo()
  {
    $this->load->view('encabezado');
    $this->load->view('pasientes/nuevo');
    $this->load->view('pie');
  }
}
