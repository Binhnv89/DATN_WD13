@extends('layouts.home')

@section('content')
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">My Account</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> My Account </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n10 justify-content-center">

                <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                    <!-- Register Wrapper Start -->
                    <div class="register-wrapper ">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5 ">
                            <h2 class="title mb-2">Tạo tài khoản</h2>
                            <p class="desc-content">Nếu bạn chưa có tài khoản, Vui lòng đăng ký chi tiết tài khoản dưới đây</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="" method="post">
                            @csrf

                            <!-- Input First Name Start -->
                            <div class="single-input-item mb-3">
                                <input type="text" name="name" placeholder="Họ và tên">
                            </div>
                            <!-- Input First Name End -->

                            <!-- Input Last Name Start -->
                            <div class="single-input-item mb-3">
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <!-- Input Last Name End -->

                            <!-- Input Email Or Username Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" name="password" placeholder="Mật khẩu">
                            </div>
                            <!-- Input Email Or Username End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" name="password" placeholder="Nhập lại mật khẩu">
                            </div>
                            <!-- Input Password End -->

                            <!-- Checkbox & Subscribe Label Start -->
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe-2">
                                            <label class="custom-control-label" for="rememberMe-2">Đồng ý với điều khoản chúng tôi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox & Subscribe Label End -->

                            <!-- Register Button Start -->
                            <div class="single-input-item mb-3">
                                <button class="btn btn btn-dark btn-hover-primary rounded-0">Đăng kí tài khoản</button>
                            </div>
                            <div class="text">
                                <a href="{{ route('login') }}">Đã có tài khoản</a>
                            </div>


                            <!-- Register Button End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Register Wrapper End -->
                </div>
            </div>

        </div>
    </div>
@endsection
