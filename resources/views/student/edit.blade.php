@extends ('layout')

@section ('content')

<h3>Edit Information</h3><br>
<form action="">
	<div class="form-group">
    <label for="firstName">First Name</label>
    <input 
    	name="firstName" 
    	type="text" 
    	class="form-control" 
    	placeholder="Enter First Name"
    	value="{{$student->firstName}}">
  </div>

  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input 
    	name="lastName" 
    	type="text" 
    	class="form-control" 
    	placeholder="Enter Last Name"
    	value="{{$student->lastName}}">
  </div>

  <div class="form-group">
    <label for="age">Age</label>
    <input 
    	name="age" 
    	type="text" 
    	class="form-control" 
    	placeholder="Enter age"
    	value="{{$student->age}}">
  </div>

  <div class="form-group">
    <label for="department">Department</label>
    <input 
    	name="department" 
    	type="text" 
    	class="form-control" 
    	placeholder="Enter department"
    	value="{{$student->department}}">
  </div>

  <input type="submit" class="btn btn-info" value="Update">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>

@endsection
