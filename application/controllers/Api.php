<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index()
	{
		$this->load->model('Apimodel');
		$data=$this->Apimodel->apiget();
		print_r($data);
	}
}
