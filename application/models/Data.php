<?php

class Data extends CI_Model{
	public function getData()
	{	
		$this->load->database();
		$q = $this->db->select('*')
						->where('class',10)
						->get('studentdata');
		return $q;
	}	
}
?>