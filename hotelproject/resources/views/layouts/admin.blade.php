  <!DOCTYPE html>
  <html lang="ja">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>管理者ページ</title>

      <!-- Styles -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body>

      @include('layouts.admin_header')

      <div id="app">
          @yield('content')
      </div>

      @include('layouts.footer')

      <!-- Scripts -->
      @vite(['resources/js/app.js'])
  </body>

  </html>