<html>
  <head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
  @auth
    <ul class="navbar-nav">
    <li class="nav-item">
    <form action="/logout" method="POST">
    @csrf
    <a href="/logout"
    class="lav-link"
    onclick="event.preventDefault();
    this.closest('form').submit();">
    Sair
    </a>
    </form>
    </li>
    </ul>
  @endauth  
    </nav>

    <main>
    <div class="container-fluid">
    <div class="row">
    @if(session('msg'))
    <p class="msg">{{session('msg')}}</p>
    @endif
    @yield('content')
    </div>
    </div>
 
    </main>




    </body>
</html>