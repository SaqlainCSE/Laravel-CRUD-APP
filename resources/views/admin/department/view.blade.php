<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <a href="/department/create">Add Department</a><br><br>
<table border="1">
    <tr>
        <th>SL</th>
        <th>Department</th>
        <th>Code</th>
    </tr>

    @foreach($dpt as $key=>$data)
    <tr>
        <th>{{ ++$key }}</th>
        <th>{{ $data->dpt_name}}</th>
        <th>{{ $data->dpt_code }}</th>
        
    </tr>
    @endforeach

</table>
</body>
</html>