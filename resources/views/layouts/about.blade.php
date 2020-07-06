@extends('layouts/frontLayout/front_master')
@section('content')

    <section id="banner_part">
        <div class="about_banner" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about_banner_text">
                            <h3>About US </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="about_us.html"></a>About Us </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="about_support">
        <div class="container support">
            <div class="row">
                <div class="col-md-4 px-0">
                    <div class="online">
                        <img src="{{ asset('frontend/images/online_class_icon.png') }}" alt="online_class_icon">
                        <div class="text-center">
                            <h4>Online Classes</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-0">
                    <div class="online ">
                        <img src="{{ asset('frontend/images/online_support_icon.png') }}" alt="online_support_icon">
                        <div class="text-center">
                            <h4>Online &amp; Offline Support</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-0">
                    <div class="online ">
                        <img src="{{ asset('frontend/images/lifetime_support_icon.png') }}" alt="lifetime_class_icon">
                        <div class="text-center">
                            <h4>Online Classes</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about_a">
        <div class="about_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider_about">
                            <div class="about_slider">
                                <div class="">
                                    <img src="{{ asset('frontend/images/aboutSlider1.png') }}" class="img-fluid" alt="aboutSlider">
                                </div>
                            </div>
                            <div class="about_slider">
                                <div class="">
                                    <img src="{{ asset('frontend/images/aboutSlider2.png') }}" class="img-fluid" alt="aboutSlider2">
                                </div>
                            </div>
                            <div class="about_slider">
                                <div class="">
                                    <img src="{{ asset('frontend/images/aboutSlider3.png') }}" class="img-fluid" alt="aboutSlider3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6   pr-0">
                        <div class="about_slider_text">
                            <p class="text_top">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus coodo vivera maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                            </p>
                            <p class="text_top">
                                et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </p>
                            <p class="text_top">
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate.<span>  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspicitis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="full_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus coodo vivera maas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section id="about_video">
        <div class="about_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6   pl-0">
                        <div class="about_slider_text">
                            <p class="text_top">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus coodo vivera maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                            </p>
                            <p class="text_top">
                                et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                            </p>
                            <p class="text_top">
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaco laboris nisi ut aliquip exconsectetur adipisicing elit, sed do eiusmod tempor incididunt. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="video_about">
                            <div class="about_video">
                                <div class="vid_img">
                                    <img src="{{ asset('frontend/images/about_page_video_img.png') }}" class="img-fluid" alt="about_page_video_img1">
                                    <div class="overlay">
                                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/bS5P_LAqiVg"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="full_text text-right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus coodo vivera maas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                            </p>
                        </div>
                        <div class="button">
                            <a href="#">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-info">
        <div class="container">
            <div class="content-text">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="cheader-left">
                            <a href="#"><img src="{{ asset('frontend/images/footerlogo.png') }}" alt="footer logo"></a>
                        </div>
                        <div class="c-text-left">
                            <p class="nipa">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullmco laboris nisi ut aliquip ex ea.</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-12">
                        <div class="cheader-center">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-md-7 pl-md-3  col-sm-6 pl-sm-5 ">
                                <div class="c-text-menu1">
                                    <ul>
                                        <li><a href="index.html">Home </a></li>
                                        <li><a href="about_us.html">About us</a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">FAQ’s</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 pl-md-0 col-sm-6 ">
                                <div class="c-text-menu1">
                                    <ul>
                                        <li><a href="our_teacher.html">Our Teachers</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="blog_details.html">Latest News</a></li>
                                        <li><a href="#">Succes Stories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cheader-center">
                            <h3>Contact Informations</h3>
                        </div>
                        <div class="c-text-location">
                            <div class="row">
                                <div class="col-lg-3  col-md-3">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li><a href="#"><i class="fas fa-phone"></i></a></li>
                                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-9  col-md-9">
                                    <div class="address">
                                        <p class="address_title">Location</p>
                                        <p>1234, Parkstreet Avenue, NewyorkAmerica.</p>
                                        <p class="address_title">Phone</p>
                                        <p>+880 1234 567 890, 02 0987 654</p>
                                        <p class="address_title">E-mail</p>
                                        <p>gyan@gmail.com, learning@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
@endsection