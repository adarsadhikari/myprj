
<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Myproject') }}
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav mr-auto">

            </ul> --}}
            <ul class="navbar-nav mr-auto">
              {{-- <ul class="nav navbar-nav"> --}}
                <li class="nav-item" ><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/post">Post your experience</a></li>
              </ul>

            
            </ul>
        </div>
    </div>
</nav>
{{-- <ul class="navbar-nav navbar-right">
<li class="nav-item"><a class="nav-link" href="/posts/create">Create post</a></li>
</ul> --}}