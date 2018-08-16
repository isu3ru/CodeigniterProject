<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$data = [
			'page_view' => 'backend/students',
			'page_data' => []
		];

		$this->load->view('backend/layout/master', $data);
	}

	public function about()
	{
		$data = [
			'page_view' => 'backend/about',
			'page_data' => []
		];

		$this->load->view('backend/layout/master', $data);
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */