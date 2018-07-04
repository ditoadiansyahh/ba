<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controllername extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_ba');
		$this->load->library('form_validation');
			
	}

	public function index()
	{
		
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */