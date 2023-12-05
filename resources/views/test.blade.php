<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
  <div class="container flex justify-center items-center flex-col">

    <h1 class="text-3xl font-bold underline">
      Hello world world!
    </h1>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      <a href="{{ route('welcome') }}"> Test </a></button>
  </div>
</body>

</html>