<?php include "admin_header.php"; 

$acct_type = _get_accttype_from_id($_SESSION['id']);
if ($acct_type=="2"){
	header("Location: no_access.php");
}



?>

<h1 class="page-header"><b>SCHOOL YEAR</b></h1>

<!-- main content -->
<ul class="nav nav-tabs">
						

						
						<li><a href="<?= base_url() ?>section_manage.php"><span class="hidden-tablet">Section</span></a></li>
						<li  ><a href="<?= base_url() ?>strand_manage.php"><span class="hidden-tablet">Strand</span></a></li>
						
						<li class="active"><a href="<?= base_url() ?>school_yr_manage.php"><span class="hidden-tablet">School Year</span></a></li>
						
					</ul>
<ul class="nav nav-tabs">


    		<div class="box-content">
    			<a href="<?= base_url() ?>add_shs_yr.php">
    				<input class="btn btn-success" type="submit" name="school_yr" value="Add School Year">
    			</a>
    		</div>
			<div class="box-content">
		
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
						  <th>School Year</th>
						  <th class="span4">Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  <?php 
				  		$table_name = "school_yr";
				  		// $id = $_SESSION['id'];

				  		//get all records from users table
						$user_data = get($table_name);

						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
				  		$id = $row['id'];
				  		$year_id = $row['year_id'];
				  		$year = $row['year'];
				  
						//$studid = get_studid_from_id(id)
				  		$edit_user_url = base_url().'student_edit.php?id='.$studid;
				  		$student_url = base_url().'student_profile_proc.php?id='.$studid;


				  ?>
					<tr>
						
						<td class="center"><?= $year?></td>
					
					
						
						
						
						<td class="center">
							<!-- <a class="btn btn-primary" href="<?= $student_url ?>"> -->
							<a class="btn btn-primary" href="student_profile_proc.php?id=<?= $studid ?>">View Profile </a>
								
							</a>
							
						</td>
					</tr>
					<?php } ?>
				  </tbody>
				</table> 
			</div>
	

<!-- close main content -->

<?php include "admin_footer.php"; ?>