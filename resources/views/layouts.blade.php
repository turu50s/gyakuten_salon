<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link 
    rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous"
  >
  <title>人生逆転サロン</title>
</head>
<body>
  <header class="navbar navbar-dark bg-danger">
    <a class="navbar-brand" href="{{ url('') }}">
        Gyakuten
      </a>
    </header>
    @yield('content');
</body>
</html>