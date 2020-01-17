<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('string');
	    $this->load->helper('text');
	    $this->load->helper('url');
	    $this->load->helper('language');
	    $this->load->library('session');
		$this->lang->load('en_admin', 'english');	
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
	}
}