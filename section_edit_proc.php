<?php
	include "perfect_function.php";

	$table_name = 'section';

	//get user ID from URL
	$id = $_GET['section_id'];
	$section_name = $_POST['section_name'];
	
	

	$user_editedvalues = array (
			"section_name" => $section_name
			
	);

	update($user_editedvalues, $id, $table_name);
	header("Location: section_manage.php");
	$text = "$whoami has successfully updated a section.";
		save_logs($text);
?>