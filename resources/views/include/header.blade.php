<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       

        @if(auth()->check())
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}">Registration</a>
        </li>
        @endif
        
      </ul>

      <span class="navbar-text">
     <style>
    .navbar-text {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: linear-gradient(to right, #2c3e50, #3498db);
      color: #fff;
      padding: 15px 30px;
      font-family: 'Segoe UI', sans-serif;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      z-index: 999;
    }

    .navbar-text h2, .navbar-text h3, .navbar-text p {
      margin: 0;
      padding: 3px 0;
    }

    .navbar-text a {
      color: #ffeb3b;
      font-weight: bold;
      text-decoration: none;
    }

    .navbar-text a:hover {
      text-decoration: underline;
    }

    /* Pour éviter le chevauchement avec la navbar fixe */
    body {
      padding-top: 100px;
    }

    @media (max-width: 600px) {
      .navbar-text {
        text-align: center;
        padding: 15px;
      }
      .navbar-text h2, .navbar-text h3 {
        font-size: 18px;
      }
    }
  </style>

  @if(auth()->check())
    <h2>Bienvenue {{ auth()->user()->name }}</h2>
    <h3>Email : {{ auth()->user()->email }}</h3>
  @else
    <h2>Bienvenue Étudiant</h2>
    <p>Veuillez <a href="{{ route('login') }}">vous connecter</a> pour accéder à votre profil.</p>
  @endif
</span>

    </div>
  </div>
</nav>