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
		<div class="col-md-8 contents">
			<table class="table table-striped table-hover table-condensed table-responsive">
				<thead>
					<tr>
						<th>COURSE ID.</th>
						<th>COURSE NAME</th>
						<th>COURSE DESCRIPTION</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($students as $s){
					echo '	<tr>	
								<td>'.$s['cid'].'</td>
								<td>'.$s['cname'].'</td>
								<td>'.$s['cdes'].'</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>
			<div class="">
				<a href="" class="btn btn-primary btn-xs"> ADD COURSE </a>
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





