<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aba global</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('radiance/img/favicon.png')}}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('radiance/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('radiance/css/responsive.css')}}">
        <script src="{{asset('radiance/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        @include('partials.radiance.header')
        <!-- header end -->
		<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('radiance/img/bg/breadcrumb.jpg')}})">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>product details</h2>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li> product details </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details ptb-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 col-12">
                        <div class="product-details-img-content">
                            <div class="product-details-tab mr-70">
                                <div class="product-details-large tab-content">
                                    <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{asset('radiance/img/product-details/bl1.jpg')}}">
                                                <img src="{{asset('radiance/img/product-details/l1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{asset('radiance/img/product-details/bl2.jpg')}}">
                                                <img src="{{asset('radiance/img/product-details/l2.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{asset('radiance/img/product-details/bl3.jpg')}}">
                                                <img src="{{asset('radiance/img/product-details/l3.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{asset('radiance/img/product-details/bl4.jpg')}}">
                                                <img src="{{asset('radiance/img/product-details/l4.jpg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-small nav mt-12" role=tablist>
                                    <a class="active mr-12" href="#pro-details1" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{asset('radiance/img/product-details/s1.jpg')}}" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details2" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{asset('radiance/img/product-details/s2.jpg')}}" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details3" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{asset('radiance/img/product-details/s3.jpg')}}" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details4" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{asset('radiance/img/product-details/s4.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 col-12">
                        <div class="product-details-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <div class="details-price">
                                <span>$120.00</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmol tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">xl</option>
                                        <option value="">ml</option>
                                        <option value="">m</option>
                                        <option value="">sl</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black abgbc" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                            <div class="product-details-cati-tag mt-35">
                                <ul>
                                    <li class="categories-title">Categories :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div>
                            <div class="product-details-cati-tag mtb-10">
                                <ul>
                                    <li class="categories-title">Tags :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div>
                            <div class="product-share">
                                <ul>
                                    <li class="categories-title">Share :</li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-flikr"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-description-review-area pb-90">
            <div class="container">
                <div class="product-description-review text-center">
                    <div class="description-review-title nav" role=tablist>
                        <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                            Description
                        </a>
                        <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                            Reviews (0)
                        </a>
                    </div>
                    <div class="description-review-text tab-content">
                        <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                        </div>
                        <div class="tab-pane fade" id="pro-review" role="tabpanel">
                            <a href="#">Be the first to write your review!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product area start -->
        <div class="product-area pb-95">
            <div class="container">
                <div class="section-title-3 text-center mb-50">
                    <h2>Related products</h2>
                </div>
                <div class="product-style">
                    <div class="related-product-active owl-carousel">
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
                                <h4><a href="#">Arifo Stylas Dress</a></h4>
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
                                <h4><a href="#">Arifo Stylas Dress</a></h4>
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
                                <h4><a href="#">Arifo Stylas Dress</a></h4>
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
                                <h4><a href="#">Arifo Stylas Dress</a></h4>
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
                                <h4><a href="#">Arifo Stylas Dress</a></h4>
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
                                <h4><a href="#">Arifo Stylas Dress</a></h4>
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
                                <h4><a href="#">Arifo Stylas Dress</a></h4>
                                <span>$115.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product area end -->
		<footer class="footer-area">
            <div class="footer-top-area bg-img pt-105 pb-65" style="background-image: url({{asset('radiance/img/bg/1.jpg')}})" data-overlay="9">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Custom Service</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="register.html">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Track</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Categories</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="shop.html">Dress</a></li>
                                        <li><a href="shop.html">Shoes</a></li>
                                        <li><a href="shop.html">Shirt</a></li>
                                        <li><a href="shop.html">Baby Product</a></li>
                                        <li><a href="shop.html">Mans Product</a></li>
                                        <li><a href="shop.html">Leather</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Contact</h3>
                                <div class="footer-newsletter">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is dummy.</p>
                                    <div id="mc_embed_signup" class="subscribe-form pr-40">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                                </div>
                                                <div class="clear">
                                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="footer-contact">
                                        <p><span><i class="ti-location-pin"></i></span> 77 Seventh avenue USA 12555. </p>
                                        <p><span><i class=" ti-headphone-alt "></i></span> +88 (015) 609735 or +88 (012) 112266</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright">
                                <p>
                                    Copyright ©
                                    <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-quickview-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="{{asset('radiance/img/quick-view/l1.jpg')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="{{asset('radiance/img/quick-view/l2.jpg')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="{{asset('radiance/img/quick-view/l3.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="{{asset('radiance/img/quick-view/s1.jpg')}}" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="{{asset('radiance/img/quick-view/s2.jpg')}}" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="{{asset('radiance/img/quick-view/s3.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Handcrafted Supper Mug</h3>
                                <div class="price">
                                    <span class="new">$90.00</span>
                                    <span class="old">$120.00  </span>
                                </div>
                                <div class="rating-number">
                                    <div class="quick-view-rating">
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">900</option>
                                            <option value="">700</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- modal -->
        @include('partials.radiance.modal')
		
		
		
		<!-- all js here -->
        <script src="{{asset('radiance/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('radiance/js/popper.js')}}"></script>
        <script src="{{asset('radiance/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('radiance/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('radiance/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('radiance/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('radiance/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('radiance/js/waypoints.min.js')}}"></script>
        <script src="{{asset('radiance/js/ajax-mail.js')}}"></script>
        <script src="{{asset('radiance/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('radiance/js/plugins.js')}}"></script>
        <script src="{{asset('radiance/js/main.js')}}"></script>
    </body>
</html>
