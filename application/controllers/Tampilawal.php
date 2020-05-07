<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilawal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data');
	}
	
	public function index(){
		// $data['content'] = 'tampilan_utama';
		//$data["produk"]=$this->model_data->getBarang();
		//$this->load->view('tampilan_utama',$data);
		$this->load->view('tampilan_utama');
	}

}

