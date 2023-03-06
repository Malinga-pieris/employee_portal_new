<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Controller {

	public function assets_details()
	{
		$this->load->view('header');
		$this->load->view('assets_details');
	}
    public function ad_cost()
	{
		$this->load->view('header');
		$this->load->view('ad_cost');
	}
}