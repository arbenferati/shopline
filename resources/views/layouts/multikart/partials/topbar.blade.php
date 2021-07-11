<div class="mobile-fix-option"></div>
<div class="top-header top-header-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-contact">
                    <ul>
                        <li>Welcome to Our store - Shopline</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: +41 79 111 22 33</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <ul class="header-dropdown">
                    <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    @guest
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else                                
                    <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                        {{ Auth::user()->name }}
                        <ul class="onhover-show-div">
                            <li><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>
