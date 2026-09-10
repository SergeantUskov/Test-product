<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Second Page</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <div>{{ $message }}</div>
    <p>
      <a href="{{ route('first_page') }}">На главную страницу</a>
  </p>
</body>
</html>