<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
</head>
<body>
<a href="/departments">View Department</a><br><br>
<form action="/department/{{$data->id}}" method="POST">
    @csrf
    <input type="text" name="dpt_name" placeholder="department name" value="{{$data->dpt_name}}">
    <input type="text" name="dpt_code" placeholder="department code" value="{{$data->dpt_code}}">
    <input type="submit" value="Update">

</form>
</body>
</html>