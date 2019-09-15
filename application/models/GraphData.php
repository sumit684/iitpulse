<?php

class GraphData extends CI_Model{
	public function GetAllStudentData()
	{	
		$this->load->database();
		$q = $this->db->select("*")
						->get('test');
		return $q;
	}	
	public function OtherData()
	{
		$this->load->database();
		$q = $this->db->select("*")
						->where('sno',2)
						->get('test');
		return $q;
	}
}
?>