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
                    <h2>register</h2>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li> register </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- register-area start -->
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Username">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <input name="user-email" placeholder="Email" type="email">
                                        <div class="button-box">
                                            <button type="submit" class="default-btn floatright">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- register-area end -->
		@include('partials.radiance.footer')
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
