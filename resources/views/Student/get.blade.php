@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student info</h1>
    <h3>Name: {{$student->name}} </h3>
    <h3>Id: {{$student->id}} </h3>
    <h3>DOB: {{$student->dob}} </h3>
</body>
</html>
@endsection