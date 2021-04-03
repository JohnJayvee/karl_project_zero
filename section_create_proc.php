
<?php

include "perfect_function.php";

$table_name = "section";

$strand_id = $_POST['strand_id'];
$year_level = $_POST['year_level'];
$year = $_POST['year'];
$section_name = $_POST['section_name'];

$data = array(
	//columname from table => value from post
			
			
			"strand_id" => $strand_id,
			"year_level" => $year_level,
			"year" => $year,
			"section_name" => $section_name
			
			
);
$sql = insert($data, $table_name);
header("Location: section_manage.php");
$text = "User". $_SESSION['id'] ."has successfully added a Section.";
		save_logs($text);
?>