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
                    <li class="active">My Account</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Login | Register Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row mb-n10 justify-content-center">
            <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                <!-- Login Wrapper Start -->
                <div class="login-wrapper">

                    <!-- Login Title & Content Start -->
                    <div class="section-content text-center mb-5">
                        <h2 class="title mb-2">Đăng kí</h2>
                        <p class="desc-content">Vui lòng đăng kí thông tin tài khoản của bạn bên dưới.
                        </p>
                    </div>
                    <!-- Login Title & Content End -->

                    <!-- Form Action Start -->
                    <form action="#" method="post">
                        @csrf
                        <div class="single-input-item mb-3">
                            <input type="text"  name="name" placeholder="Họ tên">
                        </div>

                        <!-- Input Email Start -->
                        <div class="single-input-item mb-3">
                            <input type="email" name="email" placeholder="Email">
                        </div>

                        <div class="single-input-item mb-3">
                            <input type="password" name="password" placeholder="Mật khẩu">
                        </div>

                        <div class="single-input-item mb-3">
                            <input type="password" name="password" placeholder="Xác nhận mật khẩu">
                        </div>
                        <!-- Login Button Start -->
                        <div class="single-input-item mb-3">
                            <button class="btn btn btn-dark btn-hover-primary rounded-0">Đăng kí</button>
                        </div>

                    </form>
                    <div class="lost-password">
                        <a href="{{route('login')}}">Tôi đã có tài khoản</a>
                    </div>
                    <!-- Form Action End -->

                </div>
                <!-- Login Wrapper End -->
            </div>

        </div>

    </div>
</div>

@endsection
