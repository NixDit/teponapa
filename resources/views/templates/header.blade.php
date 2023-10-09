<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Logo Teponapa Principal" xwidth="82" height="40" src="img/logo/logo-blanco-teponapa.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="/">
                                                Inicio
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a class="nav-link" href="">
                                                Acerca de
                                            </a>
                                        </li> --}}
                                        {{-- <li>
                                            <a class="nav-link" href="">
                                                Servicios
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a class="nav-link" href="{{ route('galeria') }}">
                                                Galería
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('contact') }}">
                                                Contacto
                                            </a>
                                        </li>
                                        {{-- Inicio Cambio de idioma --}}
                                        {{-- <li class="nav-item nav-item-borders py-2 pr-0 dropdown text-center">
                                            <span class="text-uppercase">{{ app()->getLocale() }}</span>
                                            @if(app()->getLocale() == 'es')
                                                <a class="nav-link" href="javascript:void(0)" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('images/blank.gif') }}" class="flag flag-mx" alt="English" /> Español
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                            @else
                                                <a class="nav-link" href="javascript:void(0)" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('images/blank.gif') }}" class="flag flag-us" alt="English" /> English
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                            @endif
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                                <a class="dropdown-item" href="{{ route('setLanguaje','es') }}"><img src="{{ asset('images/blank.gif') }}" class="flag flag-mx" alt="Spanish" /> Español</a>
                                                <a class="dropdown-item" href="{{ route('setLanguaje','en') }}"><img src="{{ asset('images/blank.gif') }}" class="flag flag-us" alt="English" /> English</a>
                                            </div>
                                        </li> --}}
                                        {{-- Fin Cambio de idioma --}}
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="ms-2 order-1 order-lg-2">
                            <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ms-0">
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/TeponapaOficial/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="https://twitter.com/TeponapaOficial" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="https://www.instagram.com/teponapaoficial/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li class="social-icons-youtube"><a href="https://www.youtube.com/c/TeponapaOficial" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
