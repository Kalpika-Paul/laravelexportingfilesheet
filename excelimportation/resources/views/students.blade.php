<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel export import</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div style="background-color: lightgreen;" class="pt-5 pb-5">
        <h2 class="text-dark ml-5">Laravel EX-IM</h2>
      </div>

<div style ="display: flex; justify-content: right; align-items: right;" class =" mr-5 mt-5 ">
    <a href="{{route('students.export')}}"> <button type="button" class="btn btn-info p-3">Download Excel File </button></a>
   
</div>

   <div class="container mt-5">
       
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>

        @if($student->isNotEmpty())
        @foreach ($student as $stud)
         <tr>
          <td>{{$stud->id}}</td>
          <td>{{$stud->name}}</td>
          <td>{{$stud->email}}</td>
          <td>{{$stud->address}}</td>
        </tr>
        @endforeach
        @endif
        
        
      </tbody>
    </table>
  </div>
</body>
</html>