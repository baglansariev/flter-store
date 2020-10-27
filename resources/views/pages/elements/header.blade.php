<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/">
                        <img class="main-logo" src="{{ asset('assets/filter/images/logo.png') }}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Главная</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link navigate" href="#filters" id="navbarDropdown_1"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Фильтры
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link navigate" href="#discount" id="navbarDropdown_3"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Акция
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link navigate" href="#contacts">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>