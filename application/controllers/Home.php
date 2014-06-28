<?php
if(!defined("BASEPATH")) exit('No direct script access allowed');

/**
 *Home Controller
 *
 *@author Jhonatas C. Faria
 *
 */

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library("template");
		$this->template->set_template("template");
	}

	public function index(){
		$this->template->load_view("home");
	}
}
