<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller {

	public function admin_leaves()
	{
		$this->load->view('header');
		$this->load->view('admin_leaves');
	}
    public function emp_leaves()
	{
		$this->load->view('header');
		$this->load->view('emp_leaves');
	}
	public function leave_settings()
	{
		$this->load->view('header');
		$this->load->view('leave_settings');
	}
}