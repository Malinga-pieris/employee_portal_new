<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function project_hours()
	{
		$this->load->view('header');
		$this->load->view('project_hours');
	}
}