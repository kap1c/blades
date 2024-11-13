<header class="header_area">

    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div>
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item {!! \Route::currentRouteNamed('index')?'active':'' !!}">
                            <a class="" href="{{ route('index', request()->all()) }}">Главная</a>
                        </li>
                        <li class="nav-item {!! \Route::currentRouteNamed('contacts')?'active':'' !!}">
                            <a class="nav-link" href="{{ route('contacts', request()->all()) }}">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>