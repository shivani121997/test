<?php

class Apimodel extends CI_Model {

    function __construct() {
        parent::__construct();
       
    }
	public function apiget(){
		$product = $this->db->query('select * from product')->result();
		return json_encode($product);
	}
}

?>