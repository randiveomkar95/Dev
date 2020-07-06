@extends('layouts/frontLayout/front_master')
@section('content')

    <section id="banner">
        <div class="full_slider">
            <div class="slider">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bnr_text">
                                <h1><span>Let’s Learn</span> For Bright Future</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus comodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <a class="start_course" href="our_course.html">Start a Course</a>
                                <a class="take_tour" href="index.html">Take a Tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider slider1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bnr_text">
                                <h1><span>Let’s Learn</span> For Bright Future</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus comodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <a class="start_course" href="our_course.html">Start a Course</a>
                                <a class="take_tour" href="index.html">Take a Tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider slider2">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bnr_text">
                                <h1><span>Let’s Learn</span> For Bright Future</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus comodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <a class="start_course" href="our_course.html">Start a Course</a>
                                <a class="take_tour" href="index.html">Take a Tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
    <!--********************
     banner part end
    ********************-->


    <!--********************
     Support part Start
    **********************-->
    <section id="support">
        <div class="container support">
            <div class="row">
                <div class="col-lg-4 col-md-4  px-0">
                    <div class="online">
                        <img src="{{ asset('frontend/images/online_class_icon.png') }}" alt="online_class_icon">
                        <div class="text-center">
                            <h4>Online Classes</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4  px-0">
                    <div class="online ">
                        <img src="{{ asset('frontend/images/online_support_icon.png') }}" alt="online_support_icon">
                        <div class="text-center">
                            <h4>Online &amp; Offline Support</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 px-0">
                    <div class="online ">
                        <img src="{{ asset('frontend/images/lifetime_support_icon.png') }}" alt="lifetime_support_icon">
                        <div class="text-center">
                            <h4>Online Classes</h4>
                            <a href="#">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--********************
     Support part end
  **********************-->

    <!--********************
     About part Start
  **********************-->
    <section id="about">
        <div class="about_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title">
                            <h1>About us</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider_about">
                            <div class="about_slider">
                                <div class="">
                                    <img src="{{ asset('frontend/images/aboutSlider1.png') }}" class="img-fluid" alt="aboutSlider1">
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
                    <div class="col-lg-6">
                        <div class="about_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus coodo vivera maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <p>et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="button">
                                        <a class="active" href="about_us.html">Know More</a>
                                        <a href="our_course.html">Enroll Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--********************
     About part end
    **********************-->


    <!--********************
     Counter  part Start
    **********************-->
    <section id="counter_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <h3 class="counter">567</h3>
                        <h5>Teachers</h5>
                        <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border Bottom">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <h3 class="counter">1758</h3>
                        <h5>Students</h5>
                        <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border Bottom">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <h3 class="counter">102</h3>
                        <h5>Offline Courses</h5>
                        <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border Bottom">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="counter_item">
                        <h3 class="counter">57</h3>
                        <h5>Online Classes</h5>
                        <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border Bottom">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--********************
     Counter  part end
    **********************-->


    <!--********************
     Our Courses part start
    **********************-->
    <section id="our_course">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Our Courses</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row course-slider">
                <div class="col-lg-12 ">
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
                                        <img src="{{ asset('frontend/images/ourcourse1Image.png') }}" alt="profile pic">
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
                            <a href="our_course.html">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/ourcourse2.png') }}" class="w-100" alt="ourcourse2">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/ourcourse2Image.png') }}" alt=" profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Joha Jichalvina</h5>
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
                            <a href="our_course.html">Enroll Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 ">
                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/Our_Courses_page_04.png') }}" class="w-100" alt="Our_Courses_page_04">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/ourcourse4Image.png') }}" alt="profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Sabeka Irin</h5>
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
                            <a href="our_course.html">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/ourcourse3.png') }}" class="w-100" alt="Our_Courses_page_04">
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
                                        <h5>Johan Deo</h5>
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
                            <a href="our_course.html">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/Ethical%20Hacking.jpg') }}" class="w-100" alt="Our_Courses_page_04">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/Conductor%2002.png') }}" alt="profile pic">
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
                                    <h4>Ethical Hacking</h4>
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
                            <a href="our_course.html">Enroll Now</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="course-one">
                        <div class="course-banner">
                            <img src="{{ asset('frontend/images/3D%20Animation.jpg') }}" class="w-100" alt="Our_Courses_page_04">
                            <div class="course-banner-overlay">
                                <a href="#"> <i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="trainer_pro_details">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="Pro_img">
                                        <img src="{{ asset('frontend/images/Conductor%2001.png') }}" alt="profile pic">
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="profile">
                                        <p>Conduct by:</p><br>
                                        <h5>Alexaia Alex</h5>
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
                                    <h4>3D Animation</h4>
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
                            <a href="our_course.html">Enroll Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--********************
     Our Courses part end
    **********************-->


    <!--*****************************
     Our Event part start
    **********************-->
    <section id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Our Events</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6  col-md-12">
                       
                        <div id="pb-calendar" class="pb-calendar">
                            <h2>Calendar of the Month of</h2>
                        </div>
                    </div>
                <div class="col-lg-6 col-md-12">
                    <div class="event_bg">
                        <div class="row event-details-top">
                            <div class="col-lg-5  col-sm-5 ">
                                <div class="event-img">
                                    <img src="{{ asset('frontend/images/event2.png') }}" class="w-100" alt="ux">
                                    <div class="event-img-text">
                                        <p>15 <span>Nov</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-7">
                                <div class="event-text">
                                    <h3>UI/UX Bootcamp Meetup 2019</h3>
                                    <p>Lorem ipsum dolor sit amet, consecteturng elit sed do eiusmod temor</p>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <P class="sem_title"> Seminar Room</P>
                                    <i class="far fa-clock  icon"></i>
                                    <P class="sem_title"> 9:00 AM - 1:00 PM</P>
                                    <div class="">
                                        <a href="event_details.html">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event_bg">
                        <div class="row event-details-top">
                            <div class="col-lg-5  col-sm-5">
                                <div class="event-img1">
                                    <img src="{{ asset('frontend/images/event2.png') }}" class="w-100" alt="ux">
                                    <div class="event-img1-text">
                                        <p>25 <span>Nov</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-7">
                                <div class="event-text">
                                    <h3>UI/UX Bootcamp Meetup 2019</h3>
                                    <p>Lorem ipsum dolor sit amet, consecteturng elit sed do eiusmod temor</p>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <P class="sem_title"> Seminar Room</P>
                                    <i class="far fa-clock  icon"></i>
                                    <P class="sem_title"> 9:00 AM - 1:00 PM</P>
                                    <div class="">
                                        <a href="event_details.html">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*****************************
     Our Event part end
    **********************-->


    <!--*****************************
     Our Testimonial & FAQ part start
    *******************************-->
    <section id="test-faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Our Testimonial &amp; FAQ</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="row test_full_slider">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="test-image">
                                        <div class="faq-img">
                                            <img src="{{ asset('frontend/images/eventSlider1.png') }}" class="img-fluid w-100" alt="eventSlider1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="test-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiudr incididunt ut labore et dolore magna aliqua. Ut enim a minim eniam, quis nostrud exercitation ullamco laboris nisi ut liquip ex ea cmmodo consequat.</p>
                                        <h3>Tahsina Michalvina <span>- Satisfied Student</span></h3>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="test-image">
                                        <div class="faq-img">
                                            <img src="{{ asset('frontend/images/Testimonial%2002.jpg') }}" class="img-fluid w-100" alt="Testimonial%2002">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="test-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiudr incididunt ut labore et dolore magna aliqua. Ut enim a minim eniam, quis nostrud exercitation ullamco laboris nisi ut liquip ex ea cmmodo consequat.</p>
                                        <h3>Shamima Sultana <span>- Satisfied Student</span></h3>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="test-image">
                                        <div class="faq-img">
                                            <img src="{{ asset('frontend/images/Testimonial%2003.jpg') }}" class="img-fluid w-100" alt="images/Testimonial%2003">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="test-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiudr incididunt ut labore et dolore magna aliqua. Ut enim a minim eniam, quis nostrud exercitation ullamco laboris nisi ut liquip ex ea cmmodo consequat.</p>
                                        <h3>Sabeka Aney <span>- Satisfied Student</span></h3>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="test-accordian">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                        Why we join on your school? <i class="fa fa-angle-right "></i>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What facilities we will get? <i class="fa fa-angle-right "></i>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Why we join on your school? <i class="fa fa-angle-right "></i>
                                    </button>

                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--******************************
     Our Testimonial & FAQ  part end
    *******************************-->


    <!--*********************************
          Our Teacher part start
    *******************************-->
    <section id="teacher">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Our Teacher’s</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row teacher-slide">
                <div class="col-lg-12 ">
                    <div class="teacher-prof">
                        <div class="techer-img">
                            <img src="{{ asset('frontend/images/teacher2.png') }}" alt="teacher1" class="img-fluid  w-100">
                        </div>
                        <div class="teacher-text">
                            <h3>Shamima Sultana</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid ">
                        </div>
                        <div class="teacher-text-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <h3>Shamima Sultana</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="teacher-prof">
                        <div class="techer-img">
                            <img src="{{ asset('frontend/images/teacher3.png') }}" alt="teacher1" class="img-fluid w-100">
                        </div>
                        <div class="teacher-text">
                            <h3>Sujon Shaha</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                        <div class="teacher-text-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <h3>Sujon Shaha</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="teacher-prof">
                        <div class="techer-img">
                            <img src="{{ asset('frontend/images/teacher4.png') }}" alt="teacher1" class="img-fluid w-100">
                        </div>
                        <div class="teacher-text">
                            <h3> Rouhe Deo</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                        <div class="teacher-text-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <h3>Rouhe Deo</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="teacher-prof">
                        <div class="techer-img">
                            <img src="{{ asset('frontend/images/teacher1.png') }}" alt="teacher1" class="img-fluid w-100">
                        </div>
                        <div class="teacher-text">
                            <h3>Alexander Alex</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                        <div class="teacher-text-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <h3>Alexander Alex</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="teacher-prof">
                        <div class="techer-img">
                            <img src="{{ asset('frontend/images/Teacher%2005.jpg') }}" alt="teacher1" class="img-fluid w-100">
                        </div>
                        <div class="teacher-text">
                            <h3>Edward Leo</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                        <div class="teacher-text-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <h3>Edward Leo</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="teacher-prof">
                        <div class="techer-img">
                            <img src="{{ asset('frontend/images/Teacher%2008.jpg') }}" alt="teacher1" class="img-fluid w-100">
                        </div>
                        <div class="teacher-text">
                            <h3>Shohan Ean</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                        <div class="teacher-text-hover">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <h3>Shohan Ean</h3>
                            <p>Sr. Faculty Member</p>
                            <img src="{{ asset('frontend/images/counterPartBorderBottom.png') }}" alt="border" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*********************************
            Our Teacher part end
    *******************************-->


    <!--*********************************
    Our Blog header part start
    *******************************-->
    <section id="blog_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1>Our Blog’s</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--*********************************
    Our Blog header part end
    *******************************-->


    <!--*********************************
     Our Blog Galarry part start
    *******************************-->
    <section id="blog_gal">
        <div class="blog-galarry">
            <div class="container">
                <div class="gal-top">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="blog_item">
                                <img src="{{ asset('frontend/images/blogBig1.png') }}" class="img-fluid w-100" alt="blog img 1">
                                <div class="blog-gtop1">
                                    <div class="blog_gtop_text ">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                        <div class="bgal-text">
                                            <h4> <a href="blog_details.html"> “Education is the Backbone of a nation” It’s Proven</a></h4>
                                            <a href="#">https://education.com</a>
                                        </div>
                                        <div class="g-top1-footer">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="date">
                                                        <p>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            Published Date: 26 October 2018
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="view">
                                                        <p><i class="fa fa-eye" aria-hidden="true"></i> 2.5k Views</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="share">
                                                        <p><i class="fa fa-share" aria-hidden="true"></i> 2.5k Shares</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="blog_item">
                                <img src="{{ asset('frontend/images/blogBig2.png') }}" class="img-fluid w-100" alt="blog img 1">
                                <div class="blog-gtop1">
                                    <div class="blog_gtop_text">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                        <div class="bgal-text">
                                            <h4> <a href="blog_details.html"> “Education is the Backbone of a nation” It’s Proven</a></h4>

                                            <a href="#">https://education.com</a>
                                        </div>
                                        <div class="g-top1-footer">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="date">
                                                        <p><i class="fa fa-calendar" aria-hidden="true"></i> Published Date: 26 October 2018</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="view">
                                                        <p><i class="fa fa-eye" aria-hidden="true"></i> 2.5k Views</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="share">
                                                        <p><i class="fa fa-share" aria-hidden="true"></i> 2.5k Shares</p>
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
                <!-- =============gal bottom===============-->
                <div class="gal-bottom">
                    <div class="row">
                        <div class="col-lg-3  col-sm-6">
                            <div class="blog_item">
                                <img src="{{ asset('frontend/images/blogsmall1.png') }}" class="img-fluid w-100" alt="blog img 1">
                                <div class="btm-text1">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                    <div class="bgal-text">
                                        <h4> Traditional Elementary Education</h4>
                                        <p>https://education.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="blog_item">
                                <img src="{{ asset('frontend/images/blogsmall2.png') }}" class="img-fluid  w-100" alt="blog img 1">
                                <div class="btm-text1">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                    <div class="bgal-text">
                                        <h4> Ideas and tips on using blogs </h4>
                                        <p>https://education.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="blog_item">
                                <img src="{{ asset('frontend/images/blogsmall3.png') }}" class="img-fluid w-100" alt="blog img 1">
                                <div class="btm-text1">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                    <div class="bgal-text">
                                        <h4> Nominated best blogs in 2018</h4>
                                        <p>https://education.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="blog_item">
                                <img src="{{ asset('frontend/images/blogsmall4.png') }}" class="img-fluid w-100" alt="blog img 1">
                                <div class="btm-text1">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                    <div class="bgal-text">
                                        <h4> Blogs for Education &amp; Knowledge</h4>
                                        <p>https://education.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*********************************
         Our Blog Galarry part end
    *******************************-->


    <!--*********************************
         Our ContactInfo part start
    *******************************-->
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