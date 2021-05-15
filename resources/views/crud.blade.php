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
              All Students
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover">
                <thead class="table-secondary">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Year</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $i=1;
                  @endphp

                  @foreach ($students as $student)

                  <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->roll}}</td>
                    <td>{{$student->class}}</td>
                    
                    <td>
                      <a href="" class="btn btn-sm btn-primary">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr> 
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-header">
              Add New Student
            </div>

            @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong> {{session('success')}} </strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>  
            @endif
            

            <div class="card-body">
              
              <form action="{{url('student/store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="name">
                  @error('name')
                  <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="roll" class="form-label">Roll</label>
                  <input type="text" name="roll" class="form-control" id="roll">
                  @error('roll')
                  <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="class" class="form-label">Year</label>
                  <input type="text" name="class" class="form-control" id="class">
                  @error('class')
                  <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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