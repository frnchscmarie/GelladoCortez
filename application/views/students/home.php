<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row tb-left">
		<div class="col-md-4">
			<p class="lead">Menu</p>
				<a href="" class=""> HOME </a> </br>
				<a href="boots/view" class=""> STUDENTS </a> </br>
				<a href="boots/viewcourse" class=""> COURSES </a> 
	
		</div>
		<div class="col-sm-4 contents tbleft">
		<h1>WELCOME TO SMS!</h1>
			<table class="table table-striped table-hover table-condensed table-responsive table-bordered text-justify">
				<thead>
					<tr>
						
						<th class="text-center">NAME</th>
						<th class="text-center">COURSE</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($students as $s){
					echo '	<tr>	
								
								<td>'.$s['lastname'].' , '.$s['firstname'].' '.$s['middlename'].'</td>
								<td>'.$s['course'].'</td>
								
							</tr>
							';
				}
				?>
				</tbody>
			</table>
			 
		</div>
	</div>
	

	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Student Management System.
		</div>
	</div>
</div>





