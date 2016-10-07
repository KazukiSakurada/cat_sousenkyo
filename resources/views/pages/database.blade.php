<!DOCTYPE HTML>
<html>
<head>
<title>database</title>
</head>
<body>
<h1>database</h1>
@foreach ($cats as $cat) 
    {{ $cat->name }}
@endforeach
</body>
</html>
