<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function atten_reports()
	{
		$this->load->view('header');
		$this->load->view('atten_reports');
	}
    public function emp_reports()
	{
		$this->load->view('header');
		$this->load->view('emp_reports');
	}
}