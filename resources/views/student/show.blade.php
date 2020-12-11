@extends ('layout')

@section ('content')
	<div>
		<h2>Name:</h2>
		{{$student->firstName}} {{$student->lastName}}
	</div>

	<div>
		<h2>Age:</h2>
		{{$student->age}}
	</div>
	<div>
		<h2>Department:</h2>
		{{$student->department}}
	</div>
@endsection
