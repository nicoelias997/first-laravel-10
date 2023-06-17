<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
<body>
    <header class="bg-dark text-white p-3">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <ul >
                <li class="nav-item">
                    <a href="/">
                        Articulos
                        </a>
                </li>

                <li class="nav-item">
                
                    <a href="/contacto">
                        contacto
                        </a>
                </li>
                <li class="nav-item">
                
                    <a href="/acercanos">
                        acerca de nos
                        </a>
                </li>   
                <li class="nav-item">
                
                    <a href="/notifications">
                        notificaciones
                        </a>
                </li     
                   @if (Auth::user())
        <div class="navbar">
            <form action="/logout" method="POST">
                @csrf
                <li>

                <button type="submit">
                    logout
                </button>
            </li>
            </form>
        </div>
        @else
        <a href="/login">
            Login
        </a>

                   @endif
                    </ul>
                </div>
            </nav>
    </header>
    <main class="d-flex align-items-center justify-content-center mt-5 mb-5">
        @yield('content')
    </main>
    <footer class="d-flex justify-content-center bg-dark text-white p-3">
        <p>Copyright \@nicolas Elias</p>
    </footer>
</body>
</html>