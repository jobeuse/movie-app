<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Welcome to {{ config('app.name') }}</title>
</head>
<body>
    <div class="container mx-auto py-4">
    
    @if(session('error'))
    <div class="bg-red-500">
      {{ session('error') }}
    </div>
    @endif 
    <h1><a href="{{ route('movie') }}">Refresh Again</a>
    </h1>
    

</body>
</html>