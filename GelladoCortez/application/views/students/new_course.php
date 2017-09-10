<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1>Hello Bootstrap!</h1>
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
			<p class="lead">ADD COURSE</p>
			<form role="form" class="" method="post">
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="cid">COURSE ID:</label>
					<input type="text" class="form-control" id="idno" name="idno" />
				</div>
				<div class="form-group">
					<label for="cname">COURSE NAME:</label>
					<input type="text" class="form-control" id="lname" name="lname" />
				</div>	
				<div class="form-group">
					<label for="cdes">COURSE DESCRIPTION: </label>
					<input type="text" class="form-control" id="mname" name="mname" />
				</div>
				<div class="">
					<button type="submit" class="btn btn-primary"> Save <span class="glyphicon glyphicon-save"></span> </br>
					<button class="btn btn-primary  text-center" onclick="goBack()">BACK</button>
			</div>
					</button>
				</div>
			</form>
			<hr />
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
			Copyright &copy; 2017.Student Management System.
		</div>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("Course Added");
	location.href = '<?php echo base_url('boots'); ?>';
</script>
<?php
}

?>




