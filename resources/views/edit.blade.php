<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css')}}/app.css">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>Laravel crud</title>
  </head>
  <body>
    <div class="pt-5"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="card">
            <div class="card-header">
              Update Student Informations  
            </div>

            @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong> {{session('success')}} </strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>  
            @endif
            

            <div class="card-body">
              
              <form action="{{url('student/update/'.$student->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" value="{{$student->name}}" class="form-control" id="name">
                </div>
                <div class="mb-3">
                  <label for="roll" class="form-label">Roll</label>
                  <input type="text" name="roll" value="{{$student->roll}}" class="form-control" id="roll"> 
                </div>
                <div class="mb-3">
                  <label for="class" class="form-label">Year</label>
                  <input type="text" name="class" value="{{$student->class}}" class="form-control" id="class" >  
                </div>
                <button type="submit" class="btn btn-primary">Update </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

   

    <!-- Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>