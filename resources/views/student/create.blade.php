@extends ('layout')

@section ('content')

<h3>Registration Form</h3><br>
<form method="POST" action="/">
@csrf

  <div class="form-group">
    <label for="firstName">First Name</label>
    <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
  </div>

  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input name="lastName" type="text" class="form-control" placeholder="Enter Last Name">
  </div>

  <div class="form-group">
    <label for="age">Age</label>
    <input name="age" type="text" class="form-control" placeholder="Enter age">
  </div>

  <div class="form-group">
    <label for="department">Department</label>
    <input name="department" type="text" class="form-control" placeholder="Enter department">
  </div>

  <input type="submit" class="btn btn-info" value="Save">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>

@endsection
