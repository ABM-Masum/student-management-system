@extends ('layout')

@section ('content')
	
<div class="container-fluid">
	<div class="row">
		<section class="col">
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">Name</th>
			      <th scope="col">Age</th>
			      <th scope="col">Department</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($students as $student)
				    <tr>
				      <td>{{$student->firstName}} {{$student->lastName}}</td>
				      <td>{{$student->age}}</td>
				      <td>{{$student->department}}</td>
				    </tr>
			    @endforeach
			  </tbody>
			</table>
		</section>
	</div>
</div>

@endsection
