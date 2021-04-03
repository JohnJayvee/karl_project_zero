
<?php
session_start();
include "perfect_function.php";

$table_name = "strand";

$strand = $_POST['strand'];
$strand_initials = $_POST['strand_initials'];
$strand_id = $_POST['strand_id'];

$strand_data = array(
	//columname from table => value from post
			"strand" => $strand,
			"strand_id" => $strand_id,
			"strand_initials" => $strand_initials
			
);
insert($strand_data, $table_name);
header("Location: strand_manage.php");
$text = "User $username has successfully added a strand.";
		save_logs($text);
?>