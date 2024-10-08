    <!-- footer area start -->
    <footer class="footer-area footer-area--two text-white pt-120">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-xl-3 col-sm-6">
                  <div class="widget widget_about">
                      <div class="logo_footer mb-25">
                          <a href="index.html">
                              <img src="/frontend/logo.jpeg" width="70" alt="Logo">
                          </a>
                      </div>
                      <p>Elhabib Empowerment Foundation is dedicated to transforming Northern Nigeria through clean water initiatives, education, women's empowerment, youth development, and fostering peace and unity.</p>
                      <div class="social-style-one pt-20">
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="flaticon-google-plus-logo"></i></a>
                          <a href="#"><i class="flaticon-linkedin"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-sm-3 col-6">
                  <div class="widget widget_nav_menu">
                      <h5 class="widget-title">About</h5>
                      <ul>
                          <li><a href="{{ route('homepage') }}">Home</a></li>
                          {{-- <li><a href="#">Donation</a></li> --}}
                          <li><a href="{{ route('about') }}">About Us</a></li>
                          <li><a href="#">Event</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl-2 col-sm-3 col-6">
                  <div class="widget widget_nav_menu">
                      <h5 class="widget-title">Quick links</h5>
                      <ul>
                          <li><a href="{{ route('projects.all') }}">Projects</a></li>
                          <li><a href="{{ route('contact') }}">Contact Us</a></li>
                          {{-- <li><a href="#">New campaign</a></li> --}}
                          <li><a href="#">Site map</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl-5">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="widget widget_gallery">
                              <h4 class="widget-title">Photo Gallery</h4>
                              <div class="gallery-photos">
                                  <a href="/frontend/image1.jpeg"><img src="/frontend/image1.jpeg" alt="Gallery"></a>
                                  <a href="/frontend/image2.jpeg"><img src="/frontend/image2.jpeg" alt="Gallery"></a>
                                  <a href="/frontend/image3.jpeg"><img src="/frontend/image3.jpeg" alt="Gallery"></a>
                                  <a href="/frontend/image4.jpeg"><img src="/frontend/image4.jpeg" alt="Gallery"></a>
                                  <a href="/frontend/image5.jpeg"><img src="/frontend/image5.jpeg" alt="Gallery"></a>
                                  <a href="/frontend/image1.jpeg"><img src="/frontend/image1.jpeg" alt="Gallery"></a>


                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="widget widget_subscribe">
                              <h4 class="widget-title">Newsletter</h4>
                              <p>Subscribe to our newsletter</p>
                              <form action="#">
                                  <input type="email" placeholder="Email address" required>
                                  <button type="submit"><i class="flaticon-right-arrow"></i></button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom mt-70">
          <div class="container">
              <div class="footer-bottom__inner">
                  <div class="donate-by">
                      <span>Developed by:</span><a href="https://fb.me/katibu1">IntelliSAS Solution</a>
                  </div>
                  <div class="copyright">
                      <p>Copyright 2022 All Right Reserved</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer area end -->