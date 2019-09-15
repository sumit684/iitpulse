<?php

class Data extends CI_Model{
	public function getData()
	{	
		$this->load->database();
		$q = $this->db->query('SELECT * FROM studentdata WHERE class=10');
		return $q;
	}	
}
?>