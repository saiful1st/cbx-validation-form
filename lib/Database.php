<?php

	class Databse{
		public $db_host = "localhost";
		public $db_user = "root";
		public $db_password = "";
		public $db_name = "cbx_form_v1";
		public $connection;

		public function __construct(){
			$this->dbconnect();
		}
		public function dbconnect(){
			try {
				$this->connection = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
		public function insert($query){
			$insert_row = $this->connection->query($query);
			if ($insert_row) {
				return $insert_row;
			}else{
				return false;
			}
		}
	}
?>