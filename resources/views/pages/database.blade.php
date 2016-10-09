<!DOCTYPE HTML>
<html>
<head>
<title>database</title>
</head>
<body>
<h1>database</h1>
@foreach ($cats as $cat) 
   <p> {{ $cat->cat_url }} </p>
@endforeach
</body>
</html>
