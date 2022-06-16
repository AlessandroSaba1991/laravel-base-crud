<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <img class="rounded-circle" width="150" src="https://image.shutterstock.com/z/stock-vector-pop-art-comics-icon-stay-home-speech-bubble-coronavirus-sign-vector-illustration-1684456465.jpg" alt="">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto me-auto mt-2 mt-lg-0 gap-4">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'active' : ''}}" href="{{route('comics.index')}}">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'comics.create' ? 'active' : ''}}" href="{{route('comics.create')}}">Create Comics</a>
                    </li>
                </ul>
            </div>
            <img class="rounded-circle" width="150" src="https://cdn4.vectorstock.com/i/1000x1000/50/23/comics-icon-vector-12185023.jpg" alt="">
        </div>
    </nav>
</header>
