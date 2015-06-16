<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		date_default_timezone_set('America/Los_Angeles');
		$transfer_data['timer'] = array('monthdayyear' => date('M d, Y'), 'time' => date('g: i A') );
		$this->load->view('index.php', $transfer_data);
	}
	
}

//end of main controller
