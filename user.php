<?php
class person{
	public $name;
	public $email;
	public $gender;

	function set_name($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
	}
	function set_email($email){
		$this->email=$email;
	}
	function get_email(){
		return $this->email;
	}
function set_gender($gender){
		$this->gender=$gender;
	}
	function get_gender(){
		return $this->gender;
	}

} 
 ?>