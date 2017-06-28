<?php

$db = new mysqli('localhost','root','','vilkri') or die("awtsss");

if(isset($_POST['message'])){

	$msg = $_POST['message'];

	$q = $db->query("insert into message (msg) values('$msg') ");

	if($q){
		header("location: ../ ");
	}else{
		header("location: ../ ");
	}
}

?>