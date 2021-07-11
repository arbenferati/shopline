<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{ asset('multikart/images/favicon/20.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('multikart/images/favicon/20.png') }}" type="image/x-icon">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/css/vendors/fontawesome.css') }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/css/vendors/slick-theme.css') }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/css/vendors/animate.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/css/vendors/themify-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/css/vendors/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('multikart/css/style.css') }}">


</head>

<body class="theme-color-28">


    <!-- header start -->
    <header class="header-style-5 border-style" id="sticky-header">
        @include('layouts.multikart.partials.topbar')
        @include('layouts.multikart.partials.menu')
    </header>
    <!-- header end -->


    <!-- section start -->
    <section class="small-section pb-0">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 collection-filter">
                        <div class="sticky-top-section">

                            <!-- Left menu -->

                            <div class="sidenav marketplace-sidebar svg-icon-menu wo-bg">
                                <nav>
                                    <div>
                                        <div class="sidebar-back text-start d-xl-none d-block">
                                            <i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back
                                        </div>
                                    </div>
                                    <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                        <li> <a href="#"> <svg>
                                                    <use xlink:href="{{ asset('multikart/svg/icons.svg#electronic') }}"></use>
                                                </svg>electronics</a>
                                            <ul class="mega-menu clothing-menu">
                                                <li>
                                                    <div class="row m-0">
                                                        <div class="col-xl-4">
                                                            <div class="link-section">
                                                                <h5>women's fashion</h5>
                                                                <ul>
                                                                    <li><a href="#">dresses</a></li>
                                                                    <li><a href="#">skirts</a></li>
                                                                    <li><a href="#">westarn wear</a></li>
                                                                    <li><a href="#">ethic wear</a></li>
                                                                    <li><a href="#">sport wear</a></li>
                                                                </ul>
                                                                <h5>men's fashion</h5>
                                                                <ul>
                                                                    <li><a href="#">sports wear</a></li>
                                                                    <li><a href="#">western wear</a></li>
                                                                    <li><a href="#">ethic wear</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="link-section">
                                                                <h5>accessories</h5>
                                                                <ul>
                                                                    <li><a href="#">fashion jewellery</a></li>
                                                                    <li><a href="#">caps and hats</a></li>
                                                                    <li><a href="#">precious jewellery</a></li>
                                                                    <li><a href="#">necklaces</a></li>
                                                                    <li><a href="#">earrings</a></li>
                                                                    <li><a href="#">wrist wear</a></li>
                                                                    <li><a href="#">ties</a></li>
                                                                    <li><a href="#">cufflinks</a></li>
                                                                    <li><a href="#">pockets squares</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <a href="#" class="mega-menu-banner"><img
                                                                    src="{{ asset('multikart/images/mega-menu/fashion.jpg') }}" alt=""
                                                                    class="img-fluid blur-up lazyload"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> 
                                            <a href="#">
                                                <svg>
                                                    <use xlink:href="{{ asset('multikart/svg/icons.svg#phone') }}"></use>
                                                </svg>
                                                mobile phones
                                            </a>
                                            <ul>
                                                <li><a href="#">fashion jewellery</a></li>
                                                <li><a href="#">caps and hats</a></li>
                                                <li><a href="#">precious jewellery</a></li>
                                                <li> <a href="#">more..</a>
                                                    <ul>
                                                        <li><a href="#">necklaces</a></li>
                                                        <li><a href="#">earrings</a></li>
                                                        <li><a href="#">wrist wear</a></li>
                                                        <li> <a href="#">accessories</a>
                                                            <ul>
                                                                <li><a href="#">ties</a></li>
                                                                <li><a href="#">cufflinks</a></li>
                                                                <li><a href="#">pockets squares</a></li>
                                                                <li><a href="#">helmets</a></li>
                                                                <li><a href="#">scarves</a></li>
                                                                <li> <a href="#">more...</a>
                                                                    <ul>
                                                                        <li><a href="#">accessory gift sets</a></li>
                                                                        <li><a href="#">travel accessories</a></li>
                                                                        <li><a href="#">phone cases</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">belts & more</a></li>
                                                        <li><a href="#">wearable</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg>
                                                    <use xlink:href="{{ asset('multikart/svg/icons.svg#decor') }}"></use>
                                                </svg>
                                                furniture
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- End left menu -->


                            <!-- New products -->

                            <div class="d-xl-block d-none">
                                <div class="theme-card demo-card">
                                    <h5 class="title-border">{{ __('New products') }}</h5>
                                    <div class="offer-slider slide-1">
                                        <div>
                                            <div class="media">
                                                <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="{{ asset('multikart/images/marketplace/pro-sm/1.jpg') }}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="{{ asset('multikart/images/marketplace/pro-sm/4.jpg') }}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="{{ asset('multikart/images/marketplace/pro-sm/5.jpg') }}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="media">
                                                <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="{{ asset('multikart/images/marketplace/pro-sm/2.jpg') }}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="{{ asset('multikart/images/marketplace/pro-sm/3.jpg') }}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="{{ asset('multikart/images/pro/1.jpg') }}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End new products -->
                        </div>
                    </div>
                    <div class="collection-content col-xl-9 p-0-xl">
                        <div class="page-main-content">
                            <!-- product deal section -->
                            <div class="ratio_115">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="marketplace-slider product-m no-arrow mb-4">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="product-page(no-sidebar).html"><img
                                                                    src="{{ asset('multikart/images/electronics/pro/19.jpg') }}"
                                                                    class="img-fluid blur-up lazyload bg-img"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap bg-color-cls sm-box">
                                                            <button onclick="openCart()" title="Add to cart">
                                                                <i class="ti-shopping-cart"></i>
                                                            </button>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ti-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View">
                                                                <i class="ti-search" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="compare.html" title="Compare">
                                                                <i class="ti-reload" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i> 
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-color1"></li>
                                                            <li class="bg-color3"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <!-- two banner -->
                            <div class="pb-0 ratio2_1 small-section">
                                <div class="container">
                                    <div class="row partition2">
                                        <div class="col-md-6">
                                            <a href="#">
                                                <div class="collection-banner p-right text-end">
                                                    <div class="img-part">
                                                        <img src="{{ asset('multikart/images/marketplace/banner/19.jpg') }}"
                                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                                    </div>
                                                    <div class="contain-banner banner-3">
                                                        <div>
                                                            <h4 class="text-muted">save 30%</h4>
                                                            <h2 class="text-dark">shoes</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab section -->
                            <div class="ratio_115 bg-title small-section pb-0 wo-bg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="theme-tab">
                                                <div class="bg-title-part mt-0">
                                                    <div class="title-basic mb-0">
                                                        <h2 class="title">{{ __('Recommendations for you') }}</h2>
                                                    </div>
                                                    <ul class="tabs tab-title w-bg">
                                                        <li class="current">
                                                            <a href="tab-4">New Products</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="tab-5">Featured Products</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content-cls">
                                                    <div id="tab-4" class="tab-content active default">
                                                        <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-5 row-cols-md-4 row-cols-2 gy-4">
                                                            <div class="product-box">
                                                                <div class="img-wrapper">
                                                                    <div class="front">
                                                                        <a href="product-page(no-sidebar).html"><img
                                                                                src="{{ asset('multikart/images/marketplace/pro/18.jpg') }}"
                                                                                class="img-fluid blur-up lazyload bg-img"
                                                                                alt=""></a>
                                                                    </div>
                                                                    <div class="cart-info cart-wrap bg-color-cls sm-box">
                                                                        <button onclick="openCart()" title="Add to cart">
                                                                            <i class="ti-shopping-cart"></i>
                                                                        </button>
                                                                        <a href="javascript:void(0)" title="Add to Wishlist">
                                                                            <i class="ti-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View">
                                                                            <i class="ti-search" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="compare.html" title="Compare">
                                                                            <i class="ti-reload" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-detail">
                                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i>
                                                                    </div>
                                                                    <a href="product-page(no-sidebar).html">
                                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                                    </a>
                                                                    <h4>$500.00</h4>
                                                                    <ul class="color-variant">
                                                                        <li class="bg-color1"></li>
                                                                        <li class="bg-color3"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="tab-5" class="tab-content">
                                                        <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-5 row-cols-md-4 row-cols-2 gy-4">
                                                            <div class="product-box">
                                                                <div class="img-wrapper">
                                                                    <div class="front">
                                                                        <a href="product-page(no-sidebar).html"><img
                                                                                src="{{ asset('multikart/images/electronics/pro/21.jpg') }}"
                                                                                class="img-fluid blur-up lazyload bg-img"
                                                                                alt=""></a>
                                                                    </div>
                                                                    <div class="cart-info cart-wrap bg-color-cls sm-box">
                                                                        <button onclick="openCart()" title="Add to cart"><i
                                                                                class="ti-shopping-cart"></i></button>
                                                                        <a href="javascript:void(0)" title="Add to Wishlist"><i
                                                                                class="ti-heart" aria-hidden="true"></i></a>
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#quick-view" title="Quick View"><i
                                                                                class="ti-search" aria-hidden="true"></i></a>
                                                                        <a href="compare.html" title="Compare"><i class="ti-reload"
                                                                                aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-detail">
                                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i>
                                                                    </div>
                                                                    <a href="product-page(no-sidebar).html">
                                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                                    </a>
                                                                    <h4>$500.00</h4>
                                                                    <ul class="color-variant">
                                                                        <li class="bg-color1"></li>
                                                                        <li class="bg-color3"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->


    <!-- blog section -->
    <section class="blog ratio2_3 gym-blog section-b-space overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-3 no-arrow slick-default-margin">
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img alt="" src="{{ asset('multikart/images/marketplace/blog/1.jpg') }}"
                                            class="img-fluid blur-up lazyload bg-img">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <h6>by: John Dio , 2 Comments</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end-->


    <!-- footer section start -->
    @include('layouts.multikart.partials.footer')
    <!-- footer section end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{ asset('multikart/js/jquery-3.3.1.min.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('multikart/js/slick.js') }}"></script>
    <script src="{{ asset('multikart/js/slick-animation.min.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('multikart/js/menu.js') }}"></script>
    <script src="{{ asset('multikart/js/sticky-menu.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('multikart/js/lazysizes.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('multikart/js/feather.min.js') }} "></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('multikart/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Timer js-->
    <script src="{{ asset('multikart/js/timer.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('multikart/js/bootstrap-notify.min.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('multikart/js/theme-setting.js') }}"></script>
    <script src="{{ asset('multikart/js/script.js') }}"></script>
    <script src="{{ asset('multikart/js/custom-slick-animated.js') }}"></script>


    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

</body>

</html>