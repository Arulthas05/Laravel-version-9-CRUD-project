@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Edit Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Id</label>
				<div class="col-sm-10">
					<input type="text" name="student_id" class="form-control" value="{{ $student->student_id }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Name</label>
				<div class="col-sm-10">
					<input type="text" name="student_name" class="form-control" value="{{ $student->student_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Age</label>
				<div class="col-sm-10">
					<input type="text" name="student_age" class="form-control" value="{{ $student->student_age }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Status</label>
				<div class="col-sm-10">
					<input type="text" name="student_status" class="form-control" value="{{ $student->student_age }}" />
				</div>
			</div>
			
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Image</label>
				<div class="col-sm-10">
					<input type="file" name="student_image" />
					<br />
					<img src="{{ asset('images/' . $student->student_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_student_image" value="{{ $student->student_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $student->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')