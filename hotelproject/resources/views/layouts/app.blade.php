  <!DOCTYPE html>
  <html lang="ja">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>ホテル予約管理アプリ</title>

      <!-- Styles -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body>

      @include('layouts.header')

      <div id="app">
          @yield('content')
      </div>

      @include('layouts.footer')

      <!-- Scripts -->
      @vite(['resources/js/app.js'])
  </body>

  </html>