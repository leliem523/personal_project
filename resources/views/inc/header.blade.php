    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="{{ route('user.home') }}"><img src="/assets/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('user.home') }}"><img src="/assets/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ route('user.home') }}">Home</a></li>
                            <li><a href="#">Women’s</a></li>
                            <li><a href="#">Men’s</a></li>
                            <li><a href="{{ route('user.shop') }}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('user.productDetail') }}">Product Details</a></li>
                                    <li><a href="{{ route('user.shoppingCart') }}">Shop Cart</a></li>
                                    <li><a href="{{ route('user.checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('user.blogDetail') }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('user.blog') }}">Blog</a></li>
                            <li><a href="{{ route('user.contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        @if (!Auth::check())
                            <div class="header__right__auth">
                                <a href="{{ route('user.login') }}">Login</a>
                                <a href="{{ route('user.register') }}">Register</a>
                            </div>
                        @else
                        <ul>
                            <li><a href="#">{{ Auth::user()->name }}</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('user.logout') }}">Logout</a></li>
                                </ul>
                            </li>
                          </ul>
                        @endif
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                        @if (Auth::check())
                        {{-- <div class="header__right__auth">
                            <a href="#">Login</a>
                            <a href="#">Register</a>
                        </div> --}}

                    @endif
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
