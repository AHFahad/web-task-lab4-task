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





if(empty($_POST["name"])){
	echo "name is empty";
	}

else if(empty($_POST["gender"])){
	echo "select a gender";
	}


else {


		$us= new person();

		if(isset($_POST["submit"])){
		$us->set_name($_POST["name"]);
		$us->set_email($_POST["email"]);
		$us->set_gender($_POST["gender"]);

		$ditails=$us->get_name()." ".$us->get_email()." ".$us->get_gender()."\n";

		$myfile = fopen("userditails.txt", "w") or die("Unable to open file!");
		//echo $ditails;
	
		fwrite($myfile,$ditails);
		echo "success fully save.. <br>";

	}

}









	$dom = new DOMDocument();

		$dom->encoding = 'utf-8';

		$dom->xmlVersion = '1.0';

		$dom->formatOutput = true;

		$xml_file_name = 'userditails2.xml';






		$root = $dom->createElement('Users');

		$user_node = $dom->createElement('User');

		

		$child_node_name = $dom->createElement('Name',$us->get_name());

		$user_node->appendChild($child_node_name);

		$child_node_email = $dom->createElement('Email',$us->get_email());

		$user_node->appendChild($child_node_email);
		
		$child_node_gender = $dom->createElement('Gender',$us->get_gender());

		$user_node->appendChild($child_node_gender);

		$root->appendChild($user_node);

		$dom->appendChild($root);

	$dom->save($xml_file_name);

	echo "successfully created xml file";
?>
