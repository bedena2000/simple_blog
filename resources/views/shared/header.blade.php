<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header class="bg-slate-100 p-6 rounded-full flex justify-between items-center h-6 fixed w-3/4 top-20 left-1/2 right-1/2 -translate-x-1/2 -translate-y-1/2  ">

  <nav class="flex gap-4">
    <a href="{{ url('/') }}">Home</a >
    <a href="{{ url('/articles') }}">Articles</a >
    <a href="{{ url('/topics') }}">Topics</a >
    <a href="{{ url('/contact') }}">Contact</a >
  </nav>

  <div class="flex gap-4">
    <p>Username: Johnn</p>
    <p>Logout</p>
  </div>

  </header>
</body>
</html>