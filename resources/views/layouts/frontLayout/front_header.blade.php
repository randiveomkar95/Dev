<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gyan - Education HTML Template</title>
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pb.calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" sizes="32x32" type="image/png">
</head>
<body data-spy="scroll" data-target=".main_menu" data-offset="70">

    <div class="full_manu_header " id="menu_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9  col-sm-8 col-md-9">
                    <div class="header_left">
                        <ul>
                            <li>Have any Trouble?</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> (+880) 1234 567 890</li>
                            <li class="eml"><i class="fa fa-envelope"></i>
                                gyan@gmail.com</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3  col-sm-4 col-md-3">
                    <div class="header_right ">
                        <ul>
                            <li><a class="register" href="registration_page.html">Register </a></li>
                            <li><a class="login" href="login_page.html"> / Login</a></li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <nav class="navbar main_menu navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <a class="navbar-brand" href="{{ asset ('/') }}">
                <img src="{{ asset ('frontend/images/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link    " href="{{ asset ('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset ('/about') }}">About Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset ('/courses') }}">Our Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void()">Our Events </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void()">Our Teachers </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset ('/contact') }}">Contact</a>
                    </li>
                </ul>
                <a class="get-start" href="#">Get Started Now </a>
            </div>
        </div>
    </nav>

