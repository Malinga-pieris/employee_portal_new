<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

	public function all_emp()
	{
		$this->load->view('header');
		$this->load->view('all_emp');
	}
    public function documents()
	{
		$this->load->view('header');
		$this->load->view('documents');
	}
}