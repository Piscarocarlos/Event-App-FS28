<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{ config("app.name") }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nos évènements</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Créer un compte</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
