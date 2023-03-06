<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function jobs()
	{
		$this->load->view('header');
		$this->load->view('jobs');
	}
    public function signin()
	{
		$this->load->view('header');
		$this->load->view('signin');
	}
	public function candidates()
	{
		$this->load->view('header');
		$this->load->view('candidates');
	}
	public function onboarding()
	{
		$this->load->view('header');
		$this->load->view('onboarding');
	}
	public function email_templates()
	{
		$this->load->view('header');
		$this->load->view('email_templates');
	}
	public function time_off()
	{
		$this->load->view('header');
		$this->load->view('time_off');
	}
	public function job_settings()
	{
		$this->load->view('header');
		$this->load->view('job_settings');
	}
}