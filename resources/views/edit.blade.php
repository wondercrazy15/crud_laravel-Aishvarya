<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Edit Employee</h2>
  <br>
  <form action = "/edit" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="insert">
  @csrf
<input type="hidden" name="id" value="{{$empdata['id']}}">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">Employee Name:</label>
    <input type="text" class="form-control" placeholder="First Name" name="emp_name" value="{{$empdata['emp_name']}}">
    <label>Dept Name:</label>
    <input type="text" class="form-control" placeholder="Dept Name" name="dept_name" value="{{$empdata['dept_name']}}">
  <label>Salary</label>
 
  <input type="text" class="form-control" placeholder="Enter Salary" name="salary" value="{{$empdata['salary']}}"><br>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>