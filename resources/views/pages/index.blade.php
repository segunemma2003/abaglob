@extends('partials.master')
@section('content')

    <!-- header start -->
    <header>
        <div class="header-area">
            <div class="header-left-sidebar ">
                <div class="logo logo_header ml-5">
                    <a href="{{URL('/')}}" class='logo_header'><img src="{{asset('radiance/img/logo/logo.png')}}" class='w-100' alt=""></a>
                </div>
                <div class="main-menu menu-hover">
                    <nav>
                        <ul>
                            <li><a href="{{URL('/')}}">Home</a>
                               
                            </li>
                            <li><a >shop</a>
                            <ul class="single-dropdown">
                                            <li><a href="{{URL('/#')}}">Fashion</a></li>
                                            <li><a href="{{URL('/#')}}">Fashion style 2</a></li>
                                            <li><a href="{{URL('/#')}}">fruits</a></li>
                                            <li><a href="{{URL('/#')}}">book</a></li>
                                            <li><a href="{{URL('/#')}}">electronics</a></li>
                                            <li><a href="{{URL('/#')}}">electronics style 2</a></li>
                                            <li><a href="{{URL('/#')}}">food & drink</a></li>
                                            <li><a href="{{URL('/#')}}">furniture</a></li>
                                            <li><a href="{{URL('/#')}}">handicraft</a></li>
                                            <li><a target="_blank" href="{{URL('/#')}}">smart watch</a></li>
                                            <li><a href="{{URL('/#')}}">sports</a></li>
                                        </ul>
                            </li>
                            <li><a >Latest</a>
                            <ul class="single-dropdown">
                                            <li><a href="{{URL('/#')}}">Fashion</a></li>
                                            <li><a href="{{URL('/#')}}">Fashion style 2</a></li>
                                            <li><a href="{{URL('/#')}}">fruits</a></li>
                                            <li><a href="{{URL('/#')}}">book</a></li>
                                            <li><a href="{{URL('/#')}}">electronics</a></li>
                                            <li><a href="{{URL('/#')}}">electronics style 2</a></li>
                                            <li><a href="{{URL('/#')}}">food & drink</a></li>
                                            <li><a href="{{URL('/#')}}">furniture</a></li>
                                            <li><a href="{{URL('/#')}}">handicraft</a></li>
                                            <li><a target="_blank" href="{{URL('/#')}}">smart watch</a></li>
                                            <li><a href="{{URL('/#')}}">sports</a></li>
                                        </ul>
                            </li>
                            
                            
                            <li><a href="{{URL('/contact')}}">contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="currency">
                    <ul>
                        <li><a href="#">EN</a></li>
                        <li><a href="#">RN</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right-sidebar">
                <div class="header-search-cart-login">
                    <div class="logo">
                        <a href="{{URL('/#')}}">
                            <img src="{{asset('radiance/img/logo/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="header-search">
                        <form action="#">
                            <input class='white ' placeholder="Search What you want" type="text">
                            <button>
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-login">
                        <ul>
                            <li><a href="{{URL('/login')}}" class='white'>Login</a></li>
                            <li><a href="{{URL('/register')}}" class='white'>Reg</a></li>
                        </ul>
                    </div>
                    <div class="header-cart cart-res">
                        <a class="icon-cart" href="#">
                            <i class="ti-shopping-cart"></i>
                            <span class="shop-count pink">02</span>
                        </a>
                        <ul class="cart-dropdown">
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="{{URL('/#')}}"><img src="{{asset('radiance/img/cart/1.jpg')}}" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="{{URL('/#')}}"> Bits Headphone</a></h5>
                                    <h6><a href="{{URL('/#')}}">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="{{URL('/#')}}"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="{{URL('/#')}}"><img src="{{asset('radiance/img/cart/2.jpg')}}" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="{{URL('/#')}}"> Bits Headphone</a></h5>
                                    <h6><a href="{{URL('/#')}}">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="{{URL('/#')}}"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="{{URL('/#')}}"><img src="{{asset('radiance/img/cart/3.jpg')}}" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="{{URL('/#')}}"> Bits Headphone</a></h5>
                                    <h6><a href="{{URL('/#')}}">Black</a></h6>
                                    <span>$80.00 x 1</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="{{URL('/#')}}"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            <li class="cart-space">
                                <div class="cart-sub">
                                    <h4>Subtotal</h4>
                                </div>
                                <div class="cart-price">
                                    <h4>$240.00</h4>
                                </div>
                            </li>
                            <li class="cart-btn-wrapper">
                                <a class="cart-btn btn-hover" href="{{URL('/cart')}}">view cart</a>
                                <a class="cart-btn btn-hover" href="{{URL('/checkout')}}">checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu-area clearfix d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{URL('/')}}">HOME</a>
                                </li>
                                
                                <li><a>shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="{{URL('/contact')}}"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="slider-area ">
                    <div class="slider-active owl-carousel">
                        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-color:#d7df23;">
                            <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                                <h1 class="animated">Fashion</h1>
                                <p class="animated">Create you own style for better looks. </p>
                            </div>
                            <!-- <div class="position-slider-img">
                                <div class="slider-img-1">
                                    <img src="{{asset('radiance/img/SliderGraphics/Abaglobal_slider1.png')}}" alt="">
                                </div>
                                <div class="slider-img-2">
                                    <img class="tilter" src="assets/img/slider/7.png" alt="">
                                </div>
                                <div class="slider-img-3">
                                    <img src="assets/img/slider/8.png" alt="">
                                </div>
                            </div> -->
                        </div>
                        <div class="single-slider single-slider-hm1 bg-img height-100vh" style="background-color:#1d9c9b;">
                            <div class="slider-content slider-animation slider-content-style-1 slider-animated-2">
                                <h1 class="animated">Custom Order</h1>
                                <p class="animated">What would you like? </p>
                            </div>
                            <!-- <div class="position-slider-img">
                                <div class="slider-img-1">
                                    <img src="assets/img/slider/9.png" alt="">
                                </div>
                                <div class="slider-img-4 slider-mrg">
                                    <img class="tilter" src="assets/img/slider/10.png" alt="">
                                </div>
                                <div class="slider-img-3">
                                    <img src="assets/img/slider/8.png" alt="">
                                </div>
                            </div> -->
                        <!-- </div>y -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- banner area start -->
    <div class="banner-area">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="single-banner">
            <a href="#"><img src="{{asset('radiance/img/banner/1.jpg')}}" alt=""></a>
                    <div class="banner-content banner-content-style1">
                        <h2>BLUE <br> <span>Glasses</span></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
            <a href="#"><img src="{{asset('radiance/img/banner/2.jpg')}}" alt=""></a>
                    <div class="banner-content banner-content-style2">
                        <span>-  Up to  -</span>
                        <h2>30% off</h2>
                        <p>Black Friday Discount</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
            <a href="#"><img src="{{asset('radiance/img/banner/3.jpg')}}" alt=""></a>
                    <div class="banner-content banner-content-style3">
                        <h2>Trand <br>2018.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- product area start -->
    <div class="product-area pt-115 pb-120">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>New Arrivals</h2>
                </div>
                <div class="product-style">
                    <div class="arrival-active owl-carousel">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html"> Dagger Smart Trousers </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{URL('/product-details')}}">Homme Tapered Smart </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{URL('/product-details')}}">Navy Bird Print </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{URL('/product-details')}}">Jacket Stonewash </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{URL('/product-details')}}">Skinny Jeans Terry </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{URL('/#')}}">Black Faux Suede </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="{{URL('/product-details')}}">Black Faux Suede </a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->
    <!-- banner area two start -->
    
    <!-- banner area two end -->
    <!-- all products area start -->
    <div class="all-products-area pt-115 pb-50">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title text-center mb-60">
                    <h2>All Products</h2>
                </div>
                <div class="product-style">
                    <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                            <h4>all </h4>
                        </a>
                        <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                            <h4>woman </h4>
                        </a>
                        <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                            <h4>man</h4>
                        </a>
                        <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                            <h4>ACCESSORIES</h4>
                        </a>
                        <a href="#home5" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home5">
                            <h4>kids</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home1" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{URL('/product-details')}}">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{URL('/product-details')}}">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{URL('/product-details')}}">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{URL('/product-details')}}">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Arifo Stylas Dress </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home2" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home3" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home4" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home5" role="tabpanel">
                            <div class="custom-row">
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/5.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Black Faux Suede</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Leg Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Skinny Jeans Terry</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Jacket Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Homme Tapered Smart</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                        <img src="{{asset('radiance/img/product/fashion-colorful/4.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Dagger Smart Trousers</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/3.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Mini Waffle 5 Pack </a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/2.jpg')}}" alt="">
                                            </a>
                                            <span>hot</span>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Denim Stonewash</a></h4>
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5 custom-col-style mb-65">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{asset('radiance/img/product/fashion-colorful/1.jpg')}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.html">Navy Bird Print</a></h4>
                                            <span>$115.00</span>
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
    <!-- all products area end -->
    <!-- brand logo area start -->
    <div class="brand-logo-area pl-100 pr-100">
        <div class="ptb-135 pb-5 pt-2 gray-bg">
            <div class="d-flex align-items-center justify-content-center">
            <div class='text-center'>
                <img src="{{asset('radiance/img/abaglobal-icon.png')}}" style='width:85%;' alt="">
            </div>
                <!-- <div class="single-brand">
                    <img src="{{asset('radiance/img/brand-logo/1.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('radiance/img/brand-logo/2.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('radiance/img/brand-logo/1.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('radiance/img/brand-logo/3.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('radiance/img/brand-logo/4.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('radiance/img/brand-logo/5.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('radiance/img/brand-logo/6.png')}}" alt="">
                </div> -->
            </div>
        </div>
    </div>
    <!-- brand logo area end -->
    <!-- banner3 area start -->
    {{-- <div class="banner-area3 pt-120 pb-115">
        <div class="pl-100 pr-100">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="banner-wrapper mrgn-negative">
                            <a href="#"><img src="{{asset('radiance/img/banner/8.jpg')}}" alt=""></a>
                            <div class="banner-wrapper2-content">
                                <h3>Speatial </h3>
                                <h2>Style</h2>
                                <span>Start from $299.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-8">
                        <div class="row no-gutters banner-mrg">
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-b-5 mrgn-r-5 ">
                                    <img src="{{asset('radiance/img/banner/9.jpg')}}" alt="">
                                    <div class="banner-wrapper3-content">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-b-5">
                                    <img src="{{asset('radiance/img/banner/10.jpg')}}" alt="">
                                    <div class="banner-wrapper3-content banner-text-color">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper mrgn-r-5">
                                    <img src="{{asset('radiance/img/banner/11.jpg')}}" alt="">
                                    <div class="banner-wrapper3-content">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-wrapper">
                                    <img src="{{asset('radiance/img/banner/12.jpg')}}" alt="">
                                    <div class="banner-wrapper3-content">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- banner3 area end -->
    <!-- insta feed start -->
    <div class="insta-feed ptb-120 py-2 gray-bg">
        <div class="pl-185 pr-185">
            <div class="section-title-2 text-center mb-50">
                <h2>Insta Feed</h2>
                <h4>Follow us on intagram. <span>@Abaglobalng</span></h4>
            </div>
            {{-- <div class="instafeed-wrapper">
                <div class="instafeed-active owl-carousel">
                    <div class="instafeed-img">
                        <img src="{{asset('radiance/img/instra/1.jpg')}}" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="{{asset('radiance/img/instra/2.jpg')}}" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="{{asset('radiance/img/instra/3.jpg')}}" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="{{asset('radiance/img/instra/4.jpg')}}" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="{{asset('radiance/img/instra/5.jpg')}}" alt="">
                    </div>
                    <div class="instafeed-img">
                        <img src="{{asset('radiance/img/instra/2.jpg')}}" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- insta feed end -->
   @endsection