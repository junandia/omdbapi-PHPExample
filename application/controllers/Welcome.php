<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Omdbapi');
	}
	public function index()
	{
		if ($this->input->get('search')) {
			$t = str_replace(" ", "%20", $this->input->get('search'));
			$d = $this->Omdbapi->search('9e35cd8d',$t);
			//var_dump($data);
			//foreach ($data->Search as $moviedata) {
			//	echo $moviedata->Title;
			//}
			if ($d->Response != 'False') {
				$data = [
					'data' => $d
				];
				$this->load->view('head');
				$this->load->view('searching', $data);
			}else{
				show_404();
			}
		}else{
			$this->load->view('head');
			$this->load->view('index_search');
		}
	}
	public function searching()
	{
		if ($this->input->get('search')) {
			$t = str_replace(" ", "%20", $this->input->get('search'));
			$d = $this->Omdbapi->search('9e35cd8d',$t);
			//var_dump($data);
			//foreach ($data->Search as $moviedata) {
			//	echo $moviedata->Title;
			//}
			if ($d->Response != 'False') {
				$data = [
					'data' => $d
				];
				$this->load->view('head');
				$this->load->view('searching', $data);
			}else{
				show_404();
			}
		}else{
			$this->load->view('head');
			$this->load->view('index_search');
		}
	}
}
