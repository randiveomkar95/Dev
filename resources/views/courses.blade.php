@extends('layouts/frontLayout/front_master')
@section('content')

    <section id="course_banner_part">
        <div class="about_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about_banner_text">
                            <h3>Our Courses </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> <a href="our_course.html"></a>Our Courses </li>
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
                        <img src="{{ asset('frontend/images/online_class_icon.png') }}" alt="#">
                        <div class="text-center">
                            <h4>Online Classes</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-0">
                    <div class="online ">
                        <img src="{{ asset('frontend/images/online_support_icon.png') }}" alt="#">
                        <div class="text-center">
                            <h4>Online &amp; Offline Support</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-0">
                    <div class="online ">
                        <img src="{{ asset('frontend/images/lifetime_support_icon.png') }}" alt="#">
                        <div class="text-center">
                            <h4>Online Classes</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our_course">
        <div class="container">
            <div class="row course_page_slider">


                <div class="col-lg-4   col-md-6  col-sm-6">
                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/ourcourse1.png') }}" class="w-100" alt="1">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/ourcourse1Image.png') }}" alt="1 profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Sujon Shaha</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-0">
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                        <p>4.8 Ratings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="crs-details">
                                    <h4>Advance Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4  col-4  p-0">
                                <div class="crs_footer">
                                    <p><span>Course</span> Duration</p>
                                    <p class="m_name">5 Months</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Course Fee</p>
                                    <p class="m_name">375 USD</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Total Classes</p>
                                    <p class="m_name">40 Classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="enroll">
                            <a href="#">Enroll Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4   col-md-6  col-sm-6">
                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/ourcourse2.png') }}" class="w-100" alt="1">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/ourcourse2Image.png') }}" alt="1 profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Sakeba Irin</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-0">
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                        <p>4.8 Ratings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="crs-details">
                                    <h4>Advance Web Design</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4  col-4  p-0">
                                <div class="crs_footer">
                                    <p><span>Course</span> Duration</p>
                                    <p class="m_name">5 Months</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Course Fee</p>
                                    <p class="m_name">375 USD</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Total Classes</p>
                                    <p class="m_name">40 Classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="enroll">
                            <a href="#">Enroll Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4   col-md-6  col-sm-6">

                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/ourcourse3.png') }}" class="w-100" alt="1">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/ourcourse3Image.png') }}" alt="1 profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Mehedi Tahsan</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-0">
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                        <p>4.8 Ratings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="crs-details">
                                    <h4>SEO/Online Marketing</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4  col-4  p-0">
                                <div class="crs_footer">
                                    <p><span>Course</span> Duration</p>
                                    <p class="m_name">5 Months</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Course Fee</p>
                                    <p class="m_name">375 USD</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Total Classes</p>
                                    <p class="m_name">40 Classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="enroll">
                            <a href="#">Enroll Now</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4  col-md-6  col-sm-6">
                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/Our_Courses_page_04.png') }}" class="w-100" alt="1">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/Conductor%2001.png') }}" alt="1 profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Shohan Hossain</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-0">
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                        <p>4.8 Ratings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="crs-details">
                                    <h4> Web Development</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4  col-4  p-0">
                                <div class="crs_footer">
                                    <p><span>Course</span> Duration</p>
                                    <p class="m_name">5 Months</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Course Fee</p>
                                    <p class="m_name">375 USD</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Total Classes</p>
                                    <p class="m_name">40 Classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="enroll">
                            <a href="#">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6  col-sm-6">

                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/Ethical%20Hacking.jpg') }}" class="w-100" alt="1">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/Conductor%2002.png') }}" alt="1 profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Shamima Nipa</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-0">
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                        <p>4.8 Ratings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="crs-details">
                                    <h4>Certified Ethical Hacking</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4  col-4  p-0">
                                <div class="crs_footer">
                                    <p><span>Course</span> Duration</p>
                                    <p class="m_name">5 Months</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Course Fee</p>
                                    <p class="m_name">375 USD</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Total Classes</p>
                                    <p class="m_name">40 Classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="enroll">
                            <a href="#">Enroll Now</a>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4  col-md-6  col-sm-6">

                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/Our_Courses_page_06.png') }}" class="w-100" alt="1">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/ourcourse6Image.png') }}" alt="1 profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Johan Michalvina</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-0">
                                    <div class="pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                        <p>4.8 Ratings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="crs-details">
                                    <h4>Wordpress Development</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4  col-4  p-0">
                                <div class="crs_footer">
                                    <p><span>Course</span> Duration</p>
                                    <p class="m_name">5 Months</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Course Fee</p>
                                    <p class="m_name">375 USD</p>
                                </div>
                            </div>
                            <div class="col-lg-4  col-4 p-0">
                                <div class="crs_footer">
                                    <p>Total Classes</p>
                                    <p class="m_name">40 Classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="enroll">
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