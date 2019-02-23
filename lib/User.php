<?php
include 'Database.php';
class User{
		public $database;
		function __construct(){
			$this->database = new Databse();
		}
		public function sendmessage($name, $email, $website, $comment){
			$name = $name;
			$email = $email;
			$website = $website;
			$comment = $comment;
			$query = "INSERT INTO  contact_form(name, email, website, msg) VALUES('$name', '$email', '$website','$comment')";
			$insert_query = $this->database->insert($query);
			if ($insert_query) {
				echo "<p style='color:green'>Message received successfully</p>";
				exit();
			}else{
				echo "<p style='color:red'>Message didn't received</p>";;
				exit();
			}
			
		}
	}

?>