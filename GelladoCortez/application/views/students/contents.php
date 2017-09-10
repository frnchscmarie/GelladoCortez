<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p class="lead">Menu</p>
				<a href="index" class=""> HOME </a> </br>
				<a href="view" class=""> STUDENTS </a> </br>
				<a href="" class=""> COURSES </a>
				
		</div>
		<div class="col-md-8 contents tbleft">
			<table class="table table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<th>ID NO.</th>
						<th>LAST NAME</th>
						<th>FIRST NAME</th>
						<th>MIDDLE NAME</th>
						<th>COURSE</th>
						<th>SEX</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($students as $s){
					echo '	<tr>	
								<td>'.$s['idno'].'</td>
								<td>'.$s['lastname'].'</td>
								<td>'.$s['firstname'].'</td>
								<td>'.$s['middlename'].'</td>
								<td>'.$s['course'].'</td>
								<td>'.$s['sex'].'</td>
								<td>
									<a href="'.base_url('students/profile/'.$s['idno']).'">View</a> |
									<a href="">Edit</a> |
									<a href="" class="delete">Delete</a>
								</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>
			<div class="">
				<a href="add_student" class="btn btn-primary btn-xs"> ADD STUDENT </a>
				<button class="btn btn-primary btn-xs text-center" onclick="goBack()">BACK</button>
			</div>
<script>
function goBack() {
    window.history.back();
}
</script>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Student Management System.
		</div>
	</div>
</div>





