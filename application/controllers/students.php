<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('StudentsModel');
	}

	public function index()
	{
		$data = [
			'page_view' => 'backend/students',
			'page_data' => []
		];		
		$this->load->view('backend/layout/master', $data);
	}

	public function process()
	{
		if ($this->input->post('save_student')) {
			$this->saveStudent();
		}
	}

	public function saveStudent()
	{
		$name = $this->input->post('student_name'); 
		$address = $this->input->post('student_address');

		// do form validations here...

		$this->StudentsModel->save($name, $address);
	}

	public function updateStudent()
	{
		
	}

	public function deleteStudent()
	{
		
	}

	public function getStudents()
	{
		
	}

}

/* End of file students.php */
/* Location: ./application/controllers/students.php */