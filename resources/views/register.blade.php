<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Login form</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4 mt-5">
        <div class="card">
  <div class="card-body">
    <form action="{{route('register')}}" method="POST">
      @csrf
      <h4 style="text-align: center">Registration</h4>
      <div class="mb-3">
        @if(session('user'))
        <div class="alert alert-info" role="alert">
     registration successfully..
</div>
@endif
      </div>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
       <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
    @error('email')
   <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    @error('password')
   <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <br><br>
  <a href="/">sign in</a>
</form>
  </div>
</div>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


  </body>
</html>
