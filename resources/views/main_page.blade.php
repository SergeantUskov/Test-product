<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <div>{{ $message }}</div>
    <p>
      <a href="{{ route('second_page') }}">На вторую страницу</a>
  </p>
</body>
</html>