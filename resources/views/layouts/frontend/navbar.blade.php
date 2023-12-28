<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-light fw-bold fs-3" href="{{ route('home') }}">UNPEvent</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-light">Disabled</a>
                </li> --}}
            </ul>
            @if (Auth::guest())
                <a class="nav-link active text-light mx-3" aria-current="page" href="{{ route('home') }}">Home</a>
            @else
                <a class="nav-link active text-light mx-3" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link active text-light mx-3 p-2" aria-current="page"
                    href="{{ route('admin/dashboard') }}">Dashboard</a>
            @endif
            <form action="/event" class="d-flex" role="search">
                <input class="form-control rounded-start-pill" name="search" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-light rounded-end-pill" type="submit"><i class="bi bi-search"></i></button>
            </form>
            @if (Auth::guest())
                <a href="{{ route('login') }}" class="btn btn-light rounded-4 mx-3">Login</a>
            @else
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-warning rounded-4 mx-3">Logout</button>
                </form>
            @endif
        </div>
    </div>
</nav>
