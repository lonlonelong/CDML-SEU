<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Works/index');
	}
	
	public function post_works()
	{
		$this->load->helper('url');
		$this->load->view('Works/post_works');
	}

}
