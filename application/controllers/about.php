<?php
class About extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('front/v_tentang');
	}
}