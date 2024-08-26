<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    {{-- link external css with vite --}}
    @vite(["resources/css/app.css", "resources/js/app.js"])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="font-sans antialiased">
    <div class="flex flex-col h-screen items-center justify-center">
      <div class="text-3xl mb-3 text-gray-500">Welcome to Mosphere</div>
      <div class="flex space-x-3">
        <a href="https://www.instagram.com/istamosh">Instagram</a>
        <a href="https://www.github.com/istamosh">Github</a>
        <a href="https://www.linkedin.com/in/istamosh">LinkedIn</a>
        <a href="https://www.twitter.com/istamosh">Twitter</a>
        <a href="https://www.facebook.com/istamosh">Facebook</a>
        <a href="https://www.youtube.com/istamosh">Youtube</a>
      </div>
    </div>
  </body>
</html>
