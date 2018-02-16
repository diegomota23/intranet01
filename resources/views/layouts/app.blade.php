<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Intranet</title>



        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
            <script>
      $(function() {
            $( "#datepicker-2" ).datepicker({
               appendText:"(yy-mm-dd)",
               dateFormat:"yy-mm-dd",
               altField: "#datepicker-4",
               altFormat: "DD, d MM, yy"
            });
         });
        </script>
        @yield('links')

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collaps            e">
            <span class="sr-only">Alternar de navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">Intranet
            <!--                        {{ config('app.name', 'Laravel') }}-->

        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Entrar </a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</div>
</nav>

</div>
@yield('content')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
