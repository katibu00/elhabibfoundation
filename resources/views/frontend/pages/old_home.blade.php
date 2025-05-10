@extends('frontend.layouts.app')
@section('pageTitle','Home')
@section('content')
@include('frontend.layouts.slider')

    <!-- Urgent cause area start -->
    <div class="urgent-cause-area overlay bgs-cover pt-120 pb-90 rel z-1"
        style="background-image: url(/frontend/img/causes/urgent-causes.jpg);">
        <div class="container container-1370">
            <div class="row gap-40">
                <div class="col-xl-3 col-md-6">
                    <div class="urgent-cause-content mb-30 rmb-65">
                        <div class="section-title mb-30">
                            <span class="section-title__subtitle mb-30">Recent Projects</span>
                            <h3>Water for All: Impactful <span>Initiatives</span></h3>
                        </div>Discover our latest projects providing clean water access to communities across Northern Nigeria, transforming lives sustainably.</p>
                        <a class="btn ml-5 mt-35" href="{{ route('projects.all') }}">View All Projects</a>
                    </div>
                </div>
                @foreach ($projects as $project)
                <div class="col-xl-3 col-md-6">
                    <div class="cause-item">
                        <div class="image">
                            <img src="{{ $project->featured_image }}" alt="Cause">
                        </div>
                        <div class="content">
                            <h5><a href="causes.html">{{ $project->title }}</a></h5>
                            <p>{!! Illuminate\Support\Str::limit($project->body, 100, '...') !!}</p>
                            <div class="cause-btn">
                                <a class="btn" href="{{ route('projects.show', ['slug' => $project->slug]) }}">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="urgent-cause-shapes">
            <img class="one top_image_bounce" src="/frontend/img/shapes/half-circle-with-dots.png" alt="Shape">
            <img class="two left_image_bounce" src="/frontend/img/shapes/circle-with-line-red.png" alt="Shape">
            <img class="three right_image_bounce" src="/frontend/img/shapes/circle-with-line-green.png" alt="Shape">
        </div>
    </div>
    <!-- Urgent cause area end -->


  <!-- About us area start -->
  <div class="about-us-two">
      <div class="container">
          <div class="row gap-100 align-items-center">
              <div class="col-xl-6">
                  <div class="about-us-content-part mb-50">
                      <div class="section-title mb-50">
                          <span class="section-title__subtitle mb-10 mt-4">About us</span>
                          <h2><span>Who</span> We Are</h2>
                      </div>
                      <p>El-Habeeb, meaning “the beloved”, is a community-centric foundation that take its root name from enhancing community well-being through comprehensive WASH (Water, Sanitation & Hygiene) programs. Local communities and its “beloved” people are very dear to us, human dignity is paramount and we share in the extreme pains and challenges they face to access WASH as basic necessities.</p>
                      <a href="{{ route('about') }}" class="btn btn-sm"> Read More</a> 
                      <hr class="mt-40">
                      <div class="about-middle-images">
                          <img src="/frontend/image1.jpeg" alt="About">
                          <img src="/frontend/image2.jpeg" alt="About">
                          <img src="/frontend/image3.jpeg" alt="About">
                          <img src="/frontend/image4.jpeg" alt="About">
                          <img src="/frontend/image5.jpeg" alt="About">
                      </div>
                      <hr>
                      <ul class="list-style-one pt-15">
                          <li>Safe Water Access</li>
                          <li>Improved Sanitation</li>
                          <li>Hygiene Education</li>
                          <li>Community Involvement</li>
                          <li>Program Assessment</li>
                          <li>Long-Term Sustainability</li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="about-us-image-part mb-65 rel">
                      <img src="/frontend/image1.jpeg" alt="About">
                      <div class="experiences-year" style="background-image: url(/frontend/image4.jpeg);">
                          <span class="experiences-year__number">5</span>
                          <span class="experiences-year__text">Years Experiences</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About us area end -->

  <!-- Counter area start -->
  <div class="counter-area pt-110 rpt-115 pb-90 bgs-cover rel z-1"
      style="background-image: url(/frontend/image5.jpeg);">
      <div class="container">
          <div class="row justify-content-end">
              <div class="col-xl-8 col-lg-10">
                  <div class="counter-section-content">
                      <div class="section-title">
                          <h2>Touching Lives Across Northern Nigeria</h2>
                      </div>
                      <i>Over the years, our unwavering commitment has resulted in <span>thousands of lives impacted</span>and communities transformed.</i>
                      <div class="counter-btns pt-5 mb-100">
                          <a class="btn" href="{{ route('projects.all') }}">See All Projects</a>
                          <a class="btn btn--yellow" href="#">Contac us</a>
                      </div>
                      <div class="row">
                          <div class="col-md-4 col-sm-6">
                              <div class="counter-item counter-text-wrap">
                                  <div class="counter-item__icon counter-item__icon--green"><i
                                          class="flaticon-solidarity"></i></div>
                                  <div class="counter-item__content">
                                      <span class="count-text" data-speed="3000" data-stop="1000000">0</span>
                                      <h5 class="counter-title">Number of Lives Impacted</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                              <div class="counter-item counter-text-wrap">
                                  <div class="counter-item__icon"><i class="flaticon-help"></i></div>
                                  <div class="counter-item__content">
                                      <span class="count-text" data-speed="3000" data-stop="20">0</span>
                                      <h5 class="counter-title">Community Projects</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                              <div class="counter-item counter-text-wrap">
                                  <div class="counter-item__icon counter-item__icon--yellow"><i
                                          class="flaticon-heart"></i></div>
                                  <div class="counter-item__content">
                                      <span class="count-text" data-speed="3000" data-stop="10">0</span>
                                      <h5 class="counter-title">Years of Service</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Counter area end -->


  <!-- Our Event area start -->
  <div class="our-event-two bgs-cover pt-120 pb-90 rel z-1"
      style="background-image: url(/frontend/image3.jpeg);">
      <div class="container container-1090">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 col-md-10">
                  <div class="section-title text-center mb-55">
                      <span class="section-title__subtitle mb-10">Our Event</span>
                      <h3>Our <span>Upcoming Event</span></h3>
                      <p>Explore our upcoming events and be part of our mission to foster peace and resilience in Northern Nigeria.</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
            {{-- @php
                dd($events);
            @endphp --}}
            @foreach ($events as $event)
            <div class="col-lg-6">
                <div class="event-two-item">
                    <div class="image">
                        <img src="{{ asset($event->featured_image) }}" alt="Event Image">
                    </div>
                    <div class="content">
                        <h6><a href="{{ route('events.show', ['slug' => $event->slug]) }}">{{ $event->title }}</a></h6>
                        <ul>
                            <li><i class="flaticon-pin"></i> {{ $event->location }}</li>
                            <li><i class="flaticon-time"></i> {{ $event->date }}</li>
                        </ul>
                    </div>
                    <div class="date">
                        <b>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->format('d') }}</b>
                        <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->format('M') }}</span>
                    </div>
                </div>
            </div>
        @endforeach
        
            
          </div>
      </div>
  </div>
  <!-- Our Event area end -->


  <!-- Become Volunteer area start -->
  <div class="become-volunteer-two bgc-black py-120 rel z-1">
      <div class="container">
          <div class="row gap-60 align-items-center">
              <div class="col-lg-6">
                  <div class="volunteer-left-image rel rmb-65">
                      <img src="/frontend/image2.jpeg" width="500" height="500" alt="valunteer">
                      <img class="circle" src="/frontend/logo.jpeg"  alt="valunteer">
                      {{-- <img class="shape top_image_bounce" src="/frontend/logo.jpeg" alt="Shape"> --}}
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="volunteer-content form-style-two text-white">
                      <div class="section-title mb-40">
                          <span class="section-title__subtitle mb-10">Be Come Volunteer</span>
                          <h3>Become a <span>volunteer</span></h3>
                      </div>
                      <form action="#" class="volunteer-form">
                          <div class="row">
                              <div class="col-xl-9 mb-30">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                      incididunt</p>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="name">Your Name</label>
                                      <input type="text" id="name" name="name" class="form-control" value=""
                                          placeholder="Your Name" required>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="email">Your Email</label>
                                      <input type="email" id="email" name="email" class="form-control" value=""
                                          placeholder="Email Address" required>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="phone_number">Phone Number</label>
                                      <input type="text" id="phone_number" name="phone_number" class="form-control"
                                          value="" placeholder="Phone Number">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="birth-day">Date Of Birth</label>
                                      <input type="date" id="birth-day" name="birth-day" class="form-control"
                                          value="">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="message">Message</label>
                                      <textarea name="message" id="message" class="form-control" rows="3"
                                          placeholder="Write Your Messages" required></textarea>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group pt-10 mb-0">
                                      <button type="submit" class="btn ml-5">Send us a message</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Become Volunteer area end -->


  <!-- Volunteer area start -->
  <div class="volunteer-area-two pt-120 pb-90 rel z-1">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-10">
                  <div class="section-title text-center mb-60">
                      <span class="section-title__subtitle mb-10">Our Team</span>
                      <h3>Meet <span>With Volunteers</span></h3>
                      <p>Dedicated Individuals Passionate About Positive Change</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-xl-2 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/salisu.jpeg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des">
                          <h6>Alh. Salisu Abdullahi</h6>
                          <span>Board Advisor</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/ibrahim.jpeg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des">
                          <h6>Alh. Ibrahim Aboki</h6>
                          <span>Board Advisor</span>
                      </div>
                  </div>
              </div>
             
              <div class="col-xl-2 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/aisha.jpeg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des valunteer-two-item__des--green">
                          <h6>Mrs. Amal Garba Musa</h6>
                          <span>Executive Director</span>
                      </div>
                  </div>
              </div>
              {{-- <div class="col-xl-2 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/safiyanu.jpeg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des">
                          <h6>Mr. Safiyanu Habibu</h6>
                          <span>Chief Programs Manager</span>
                      </div>
                  </div>
              </div> --}}
              <div class="col-xl-2 col-sm-6">
                  <div class="valunteer-two-item">
                      <div class="valunteer-two-item__img">
                          <img src="/habib.jpeg" alt="Volunteer">
                      </div>
                      <div class="valunteer-two-item__des">
                          <h6>Mr. Habibu AlHassan</h6>
                          <span>Technical Specialist</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-sm-6">
                <div class="valunteer-two-item">
                    <div class="valunteer-two-item__img">
                        <img src="/hafsat.jpeg" alt="Volunteer">
                    </div>
                    <div class="valunteer-two-item__des valunteer-two-item__des--yellow">
                        <h6>Hafsa Magaji Abubakar</h6>
                        <span>Programs Officer</span>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>
  <!-- Volunteer area end -->

  <!-- Call to action area start -->
  <div class="cta-area bgc-black pt-110 rpt-120 pb-120 rel z-1">
      <div class="container container-1170">
          <div class="row justify-content-center">
              <div class="col-xl-8 col-lg-10">
                  <div class="section-title text-center text-white">
                      <h2>Be the Change: Join Our <span>Movement</span></h2>
                      <p>Take action now to support our initiatives, and together, we can create a brighter future for Northern Nigeria. Join us today!</p>
                      <a class="btn mt-35" href="#">Join Now</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="cta-area-shapes">
          <img class="one" src="/frontend/img/valunteer/valunteer-bg.png" alt="Shape">
          <img class="two" src="/frontend/img/valunteer/valunteer-bg2.png" alt="Shape">
      </div>
  </div>
  <!-- Call to action area end -->


  <!-- FAQ area start -->
  <div class="faq-area-two py-120">
      <div class="container">
          <div class="row gap-60">
              <div class="col-lg-6">
                  <div class="faq-video-part rel">
                      <img src="/frontend/image5.jpeg" alt="Video">
                      <a class="video-play video-play--two" href="https://www.youtube.com/embed/Wimkqo8gDZ0"
                          data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="faq-content-part rmt-65">
                      <div class="section-title mb-45 for-hide-summary">
                          <span class="section-title__subtitle mb-10">Faq</span>
                          <h2>Common<span> Questions</span></h2>
                          <p>Find clarity on our mission, initiatives, and impact in Northern Nigeria </p>
                      </div>
                      <div class="faq-accordion-two" id="faqAccordion">
                          <div class="accordion-item">
                              <h5 class="accordion-header" id="headingThree">
                                  <button class="collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseThree" aria-expanded="false"
                                      aria-controls="collapseThree">
                                      How can I get involved with Elhabib Empowerment Foundation?
                                  </button>
                              </h5>
                              <div id="collapseThree" class="accordion-collapse collapse"
                                  aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                  <div class="accordion-body">
                                    ou can get involved by volunteering, donating, or supporting our projects. Visit our "Get Involved" page for more information.
                                  </div>
                              </div>
                          </div>
                          <div class="accordion-item">
                              <h5 class="accordion-header" id="headingOne">
                                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                      aria-expanded="true" aria-controls="collapseOne">
                                      How do you ensure the sustainability of your projects?
                                  </button>
                              </h5>
                              <div id="collapseOne" class="accordion-collapse collapse show"
                                  aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                  <div class="accordion-body">
                                    We work closely with communities, build local capacity, and employ technology for long-term project sustainability and community ownership.
                                  </div>
                              </div>
                          </div>
                          <div class="accordion-item">
                              <h5 class="accordion-header" id="headingTwo">
                                  <button class="collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      What impact have you made in education?
                                  </button>
                              </h5>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                  data-bs-parent="#faqAccordion">
                                  <div class="accordion-body">
                                    We've provided scholarships, educational materials, and teacher training, positively impacting thousands of students across the region.
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- FAQ area end -->


  <!-- Blog area start -->
  <div class="blog-area-two overlay pt-120 pb-90 rel z-1">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 col-md-10">
                  <div class="section-title text-center text-white mb-55">
                      <span class="section-title__subtitle mb-10">Our Blog Post</span>
                      <h2>Our Latest <span>News & Update</span></h2>
                      <p>Stay informed with our latest news, updates, and stories of resilience, as we work towards a better Northern Nigeria.</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              @foreach ($blogs as $blog)
                <div class="col-xl-4 col-md-6">
                    <div class="blog-item blog-item--two">
                        <div class="blog-item__img">
                            <img src="{{ $blog->featured_image }}" alt="featured image">
                        </div>
                        <div class="blog-item__content">
                            <div class="post-date-two">
                                <b>{{ $blog->created_at->format('d') }}</b>
                                <span>{{ $blog->created_at->format('M') }}</span>
                            </div>
                            <ul class="blog-meta">
                                <li><i class="flaticon-user"></i> <a href="#">Admin</a></li>
                                <li><i class="flaticon-bubble-chat"></i> <a href="#">0 Comment</a></li>
                            </ul>
                            <h4><a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h4>
                            <p>{!! Illuminate\Support\Str::limit($blog->body, 100, '....') !!}</p>
                            <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
              @endforeach

             
          </div>
      </div>
  </div>
  <!-- Blog area end -->

@endsection