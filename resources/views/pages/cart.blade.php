@extends('partials.master')
@section('content')
@include('partials.header')
        <!-- header end -->
		<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('radiance/img/bg/breadcrumb.jpg')}})">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>cart page</h2>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li> cart page</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- shopping-cart-area start -->
        <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="cart-heading">Cart</h1>
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>remove</th>
                                            <th>images</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-remove"><a href="#"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{asset('radiance/img/cart/1.jpg')}}" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Wooden Furniture </a></td>
                                            <td class="product-price-cart"><span class="amount">$165.00</span></td>
                                            <td class="product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">$165.00</td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove"><a href="#"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{asset('radiance/img/cart/2.jpg')}}" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Vestibulum dictum</a></td>
                                            <td class="product-price-cart"><span class="amount">$150.00</span></td>
                                            <td class="product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">$150.00</td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove"><a href="#"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{asset('radiance/img/cart/3.jpg')}}" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Vestibulum dictum</a></td>
                                            <td class="product-price-cart"><span class="amount">$150.00</span></td>
                                            <td class="product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">$150.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
<input class="button abgbc abghov" name="apply_coupon" value="Apply coupon" type="submit">
                                        </div>
                                        <div class="coupon2">
                                            <input class="button abgbc abghov" name="update_cart" value="Update cart" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal<span>100.00</span></li>
                                            <li>Total<span>100.00</span></li>
                                        </ul>
                                        <a href="#" class='abghov abgbc'>Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- shopping-cart-area end -->
		@endsection