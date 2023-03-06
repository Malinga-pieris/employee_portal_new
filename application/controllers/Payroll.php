<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller {

	public function emp_salary()
	{
		$this->load->view('header');
		$this->load->view('emp_salary');
	}
    public function payslip()
	{
		$this->load->view('header');
		$this->load->view('payslip');
	}
	public function payroll_items()
	{
		$this->load->view('header');
		$this->load->view('payroll_items');
	}
}