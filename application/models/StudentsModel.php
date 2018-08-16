<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentsModel extends CI_Model {

	public function save($name, $address)
	{
		$insert_data = [
			'student_name' => $name,
			'student_address' => $address
		];
		return $this->db->insert('students', $insert_data);
	}

}

/* End of file StudentsModel.php */
/* Location: ./application/models/StudentsModel.php */