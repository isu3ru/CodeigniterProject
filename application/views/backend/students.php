<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Students Registration</h1>

			<form action="<?php echo site_url('students/process'); ?>" method="POST">

				<div class="form-group">
					<label for="student_name">Name: </label>
					<div class="controls">
						<input type="text" class="form-control" id="student_name" name="student_name" placeholder="Enter student's full name here...">
					</div>
				</div>

				<div class="form-group">
					<label for="student_address">Address: </label>
					<div class="controls">
						<textarea name="student_address" id="student_address" cols="30" rows="3" class="form-control" placeholder="Enter your address here.."></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="controls">
						<button class="btn btn-success" name="save_student" value="save_student">Save</button>
						<button class="btn btn-primary" name="update_student" value="update_student">Update</button>
						<button class="btn btn-danger" name="delete_student" value="delete_student">Delete</button>
					</div>
				</div>

			</form>

		</div>
	</div>
</div>