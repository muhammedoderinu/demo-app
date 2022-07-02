<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title>Document</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
    <div class="container mb-3">
    <nav class="navbar navbar-expand-lg mb-5 bg-white navbar-light fixed-top scrolling-navbar">
            <div class="container">
              <a class="navbar-brand" href="#">
                <strong>Posting</strong>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard')}}">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('posts')}}">Post</a>
                  </li>
                </ul>
            
              </div>

              <div class="float-end">
                <ul class=" navbar-nav mr-auto">
                  @auth

                  <li class="nav-item active">
                    <a class="nav-link" href="#">{{auth()->user()->name}}
                    </a>
                  </li>

                  <li class="nav-item">
                    <form action="{{route('logout')}}" method="post">
                      @csrf
                    <button  type="submit" class="nav-link" href="{{route('logout')}}">Logout</button>
                   </form>
                  </li>
                  @endauth

                  @guest

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                  </li>

                  @endguest
                  
                 
                </ul>
                </div>
            </div>
          </nav>
          </div>
          @yield('content')


    </body>
</html>

