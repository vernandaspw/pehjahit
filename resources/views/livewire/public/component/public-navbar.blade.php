<div>

    <style scoped>
        .dropdown-menu li {
            position: relative;
        }

        .dropdown-menu .dropdown-submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .dropdown-menu .dropdown-submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover>.dropdown-submenu {
            display: block;
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: rgb(255, 255, 255)">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="{{ url('/', []) }}">
                <img width="42" height="42" src="{{ asset('images/logo-app.png') }}" alt="">
                <span style="{{ env('TEXT_COLOR_300') }}" class="ms-1"><b>PehJahit.com</b></span>
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('/')) active @endif" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('tentang')) active @endif" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('marketpleace')) active @endif"
                            href="{{ url('in-comming') }}">Marketplace</a>
                    </li>
                    <li class="nav-item dropdown  ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            For Talent
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div>
                                        <b>Kelas online</b>
                                    </div>
                                    <div class="">
                                        <div class="text-muted">
                                            Belajar tanpa batasan waktu
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div>
                                        <b>Pelatihan</b>
                                    </div>
                                    <div class="">
                                        <div class="text-muted">
                                            Menambah hardskill
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown  ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            For Corporate
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div>
                                        <b>Corporate Training</b>
                                    </div>
                                    <div class="">
                                        <div class="text-muted">
                                            Perkuat tim dengan kami
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div>
                                        <b>Hiring Talent</b>
                                    </div>
                                    <div class="">
                                        <div class="text-muted">
                                            Dapatkan talent terbaik dari kami
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div>
                                        <b>Open Job</b>
                                    </div>
                                    <div class="">
                                        <div class="text-muted">
                                            Posting loker pada website kami
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('blog')) active @endif" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('kontak')) active @endif" href="#">Contact</a>
                    </li>
                    {{-- <li class="nav-item">
                        <div class="dropdown">
                            <a class=" nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Produk
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Submenu &raquo;
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="#">Submenu item 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Submenu item 2</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                            <ul class="dropdown-menu dropdown-submenu">
                                                <li>
                                                    <a class="dropdown-item" href="#">Multi level 1</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Multi level 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Submenu item 4</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Submenu item 5</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li> --}}

                </ul>
                <!-- Left links -->

                <div class="d-flex align-items-center">
                    <a style="{{ env('BG_COLOR_400') }}" class="btn rounded-pill py-2 btn-get-started btn-get-started-blue text-white"
                        href="#">Mulai Belanja</a>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</div>
