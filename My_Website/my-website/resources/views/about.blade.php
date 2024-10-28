<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline text-yellow-400 p-10 bg-blue-950 text-center">
    Halo gais
  </h1>
  <p class="text-2xl p-4">
    Halo nama saya {{ $name }}!
  </p>
  <p class="text-2xl p-4">
    saya sekolah di {{ $address }},dan alamat email saya adalah {{ $email }}
  </p>
</body>
</html>
