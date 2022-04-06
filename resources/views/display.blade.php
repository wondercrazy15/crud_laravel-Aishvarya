<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container">
    <h2 class="text-center">Display Employee Data</h2>

    <a href="{{ url('insert') }}" class="btn btn-primary float-end">Add Employee</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Id</th>
            <th>Emp Name</th>
            <th>Dept Name</th>
            <th>Salary</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($emps as $emp)
        <tr>
            <td>{{$emp['id']}}</td>
            <td>{{$emp['emp_name']}}</td>
            <td>{{$emp['dept_name']}}</td>
            <td>{{$emp['salary']}}</td>
            <td><button class="btn btn-success" type="button"><a href="{{ url('edit/'.$emp['id']) }}">Edit</a></button></td>
            <!-- <td><input type="button" value="Edit" class="btn btn-success"/></td> -->
            <!-- <td><input type="button" value="Delete" class="btn btn-danger"/></td> -->
            <td><button class="btn btn-danger" type="button"><a href="{{ url('delete/'.$emp['id']) }}">Delete</a></button></td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>