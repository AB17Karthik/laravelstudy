<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Study</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registeration form</h2>
  <form action="{{url('test')}}" method="post">
  @csrf
  <!-- @method('delete') -->
  <div class="form-group">
      <label for="pwd">Student ID:</label>
      <input type="text" class="form-control" id="sid" placeholder="Enter alpha numeric" name="sid">
    </div>  
  <div class="form-group">
      <label for="pwd">Student Name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Create Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
      <label for="pwd">Date Of Birth:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter dob" name="dob">
    </div>
    <div class="form-group">
      <label for="pwd">SSLC %:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter mobile no" name="sslc">
    </div>
    <div class="form-group">
      <label for="pwd">HSC %:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter mobile no" name="hsc">
    </div>
    <div class="form-group">
      <label for="pwd">contact no:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter mobile no" name="cont">
    </div>
    
    <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="addr" placeholder="your address" name="addr">
    </div>
    <div class="form-group">
      <label for="pwd">About Us:</label>
      <input type="text" class="form-control" id="abus" placeholder="Enter Your comments" name="abus">
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
