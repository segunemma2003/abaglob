@extends('partials.master')
@section('content')
        @include('partials.header')
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
                                            <button type="submit" class="default-btn floatright abgbc abghov" style='color:white;'>Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  @endsection
		