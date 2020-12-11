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
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($students as $student)
				    <tr>
				      <td>{{$student->firstName}} {{$student->lastName}}</td>
				      <td>{{$student->age}}</td>
				      <td>{{$student->department}}</td>
				      <td>
				      	<form method="POST" action="/{{$student->id}}/delete">
					      	<a href="/{{$student->id}}" class="btn btn-sm btn-info">show</a>
					      	<a href="/{{$student->id}}/edit" class="btn btn-sm btn-warning">edit</a>
					      	@csrf
					      	@method('DELETE')
					      	<button class="btn btn-sm btn-danger">Delete</button>
					    </form>
				      </td>
				    </tr>
			    @endforeach
			  </tbody>
			</table>
		</section>
	</div>
</div>

@endsection
