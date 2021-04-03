
<?php
session_start();
include "perfect_function.php";

$table_name = "reason";

$reason = $_POST['reason'];


$reason_data = array(
	//columname from table => value from post
			"reason" => $reason 
			
);
insert($reason_data, $table_name);
header("Location: student_manage.php");
$text = "User $username has successfully added a reason.";
		save_logs($text);
?>