<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		$this->load->view('pelanggan/indexpel');
	}
	public function layanan()
	{
		$this->load->view('pelanggan/layanan');
	}
	public function login()
	{
		$this->load->view('pelanggan/loginpel');
	}
}

?>
