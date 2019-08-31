<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link @if(Route::current()->getName() === 'default')active @endif"
           href="{{ route('default') }}">Home</a>
        <a class="nav-item nav-link @if(Route::current()->getName() === 'blog')active @endif"
           href="{{ route('blog') }}">Blog</a>
        <a class="nav-item nav-link @if(Route::current()->getName() === 'about-us')active @endif"
           href="{{ route('about-us') }}">About us</a>
        <a class="nav-item nav-link @if(Route::current()->getName() === 'news')active @endif"
           href="{{ route('news') }}">News</a>
        <a class="nav-item nav-link @if(Route::current()->getName() === 'contacts')active @endif"
           href="{{ route('contacts') }}">Contacts</a>
        <a class="nav-item nav-link @if(Route::current()->getName() === 'user')active @endif"
           href="{{ route('user') }}">User</a>
        <a class="nav-item nav-link @if(Route::current()->getName() === 'login')active @endif"
           href="{{ route('login') }}">Login</a>
    </div>
  </div>
</nav>