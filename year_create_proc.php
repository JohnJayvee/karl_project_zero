
<?php
session_start();
include "perfect_function.php";

$table_name = "school_yr";

$year = $_POST['year'];
$year_id = $_POST['year_id'];

$strand_data = array(
	//columname from table => value from post
			"year" => $year,
			"year_id" => $year_id 

			
);
insert($strand_data, $table_name);
header("Location: school_yr_manage.php");
$text = "User $username has successfully added a school year.";
		save_logs($text);
?>