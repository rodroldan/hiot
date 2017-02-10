<?php
class Diagnostico extends CI_Model {	
		
	function trae_diagnosticos () {
		$query = $this->db->query("select * from cat_diagnostico ");
		if ($query->num_rows() >= 1) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	
}
?>