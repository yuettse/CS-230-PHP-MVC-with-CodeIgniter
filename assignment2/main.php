<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		if ( $this->session->userdata('counter') == false ) {
			$this->session->set_userdata('counter', 0);
		}
		
		$transfer['hello'] = array( 'counter' => $this->session->userdata('counter') );
		
		
		
		$this->load->view('index', $transfer);
	}
	
	public function testing() {
		$temp = $this->session->userdata('counter') + 1;
		$this->session->set_userdata('counter', $temp);
		$transfer['hello'] = array('name' => $this->input->post('name'), 'comment' => $this->input->post('comment'), 'counter' => $temp );
		$this->load->view('submit', $transfer);
	}
	
}

//end of main controller
