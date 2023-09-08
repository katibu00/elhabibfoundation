@extends('frontend.layouts.app')
@section('pageTitle','About Us')
@section('content')

    <!-- page banner start -->
    <div class="page-banner-area bgs-cover overlay text-white py-165 rpy-125 rmt-65"
        style="background-image: url(/frontend/img/background/page-banner.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">About Us</h2>
                        <ul class="page-list">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page banner end -->


    <!-- Client Logo area start -->
    <div class="client-logo-area py-75"
        style="background-image: url(/frontend/img/client-logo/client-logo-section-bg.jpg);">
        <div class="container">
            <div class="client-logo-wrap">
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo1.png" alt="Client Logo"></a>
                </div>
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo2.png" alt="Client Logo"></a>
                </div>
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo3.png" alt="Client Logo"></a>
                </div>
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo4.png" alt="Client Logo"></a>
                </div>
                <div class="client-logo-item">
                    <a href="#"><img src="/frontend/img/client-logo/client-logo5.png" alt="Client Logo"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Logo area end -->


    <!-- About area start -->
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image-part">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="image">
                                    <img src="/frontend/image1.jpeg" alt="About">
                                </div>
                                <div class="project-complete mb-30">
                                    <div class="project-complete__icon">
                                        <i class="flaticon-charity"></i>
                                    </div>
                                    <div class="project-complete__content">
                                        <h5>We Complate 10+ Project</h5>
                                        <span>Done for charity</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="image mt-65 rmt-15 rel">
                                    <img src="/frontend/image2.jpeg" alt="About">
                                    <div class="experiences-years">
                                        <span class="experiences-years__number">5</span>
                                        <span class="experiences-years__text">Years Experiences</span>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="/frontend/image3.jpeg" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-part rmt-65">
                        <div class="section-title mb-60">
                            <span class="section-title__subtitle mb-10">About us</span>
                            <h2>Empowering Northern Nigeria Through <span>Sustainable Initiatives</span></h2>
                        </div>
                        <p>Elhabib Empowerment Foundation is a not-for-profit organization driven by a clear vision: to create a positive and lasting impact in Northern Nigeria. With a relentless commitment to change, we focus on five core pillars: clean water access, education for all, women's empowerment, youth development, and promoting peace and unity.</p>
                        <p>Our journey began with the belief that every individual deserves clean and safe drinking water, a quality education, and the opportunity to thrive. Over the years, we've tirelessly worked on projects that have transformed communities, empowered women, educated youth, and brought clean water to those who need it most.</p>
                        <p>Our success stories are a testament to the dedication of our team, the support of our partners, and the resilience of the communities we serve. We invite you to join us in this inspiring journey of impact and change, as we continue to build a brighter and more sustainable future for Northern Nigeria. Together, we can make a difference that lasts for generations to come.</p>
                        
                        <a class="btn ml-5 mt-25" href="{{ route('projects.all') }}">See Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About area end -->

@endsection