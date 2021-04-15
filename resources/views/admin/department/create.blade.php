<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
</head>
<body>

<form action="/departments" method="POST">
    @csrf
    <input type="text" name="dpt_name" placeholder="department name">
    <input type="text" name="dpt_code" placeholder="department code">
    <input type="submit" value="Submit">

</form>
<br><br>

<table border="1">
    <tr>
        <th>SL</th>
        <th>Department</th>
        <th>Code</th>
        <th>Action</th>
    </tr>

    @foreach($dpt as $key=>$data)
    <tr>
        <th>{{ ++$key }}</th>
        <th>{{ $data->dpt_name}}</th>
        <th>{{ $data->dpt_code }}</th>
        <th> 
            <a onclick="return confirm('are you sure edit this data')" href="/departments/{{$data->id}}/edit">Edit </a>| 
            <a onclick="return confirm('are you sure delete this data')" href="/department/delete/{{$data->id}}">Delete</a>
        </th>
    </tr>
    @endforeach

</table>

</body>
</html>