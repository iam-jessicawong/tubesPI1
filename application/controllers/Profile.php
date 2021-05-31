<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/* public function __construct() {
		parent::__construct();
		
		//fungsi pengecekan login dan akses menu pada helper
		is_logged_in();

	}		//END __construct() */

	public function index()
	{
		$data['title'] = "Profile";
		$data['subtitle'] = "Profile";

		$this->load->view('templates/header', $data);
		$this->load->view('profile');
		$this->load->view('templates/footer');
	}

}
