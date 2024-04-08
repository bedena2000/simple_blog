<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login in your account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">
</head>
<body>

  @include('shared.header')

  <div class="flex justify-center items-center min-h-screen bg-slate-950">

    <!-- Login Box -->
    <div class="login-box w-[420px] bg-slate-200 p-4 text-black rounded">
      <h2 class="font-redditMono">Login</h2>
      <form action="{{ route('loginPage') }}" method="post" class="mt-4">
        @csrf

        <div class="flex gap-2 flex-col">
          <label for="userName" class="font-redditMono">username</label>
          <input name="username" id="userName" type="text" placeholder="enter your name..." class="outline-none px-4 py-2 rounded">
        </div>

        <div class="flex gap-2 flex-col mt-4">
          <label for="userPassword" class="font-redditMono">password</label>
          <input name="password" id="userPassword" type="password" placeholder="enter your name..." class="outline-none px-4 py-2 rounded">
        </div>

        <button class="mt-4 text-black inline-block px-4 py-1 bg-slate-100 font-redditMono rounded-full">
          enter
        </button>

        <a href="{{ route('register') }}">
          Don't have an account? <strong>register</strong>
        </a>

        @if(session('success'))
           <li class="text-slate-400 bg-slate-800 px-4 py-1 font-redditMono mt-4">{{ session('success') }}</li>
        @endif

      </form>
    </div>
    <!-- Login Box -->

  </div>


  <script>
    tailwind.config = {
      theme: {
        fontFamily: {
          redditMono: ['Reddit Mono']
        }
      }
    }
  </script>

</body>
</html>