<?php
include "perfect_function.php";

$submit = $_POST['submit'];
if ($submit=='cancel') {
	header("Location: section_manage.php");
}

$table_name = "section";

//get user ID from URL
$id = $_GET['section_id'];

delete($id, $table_name);

header("Location: section_manage.php");
$text = "User has successfully deleted a section";
		save_logs($text);

?>