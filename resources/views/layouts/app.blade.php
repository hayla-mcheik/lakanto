<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lakanto | Laravel Ecommerce</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--== Ionicon CSS ==-->
    <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet">
    <!--== Simple Line Icon CSS ==-->
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <!--== Line Icons CSS ==-->
    <link href="{{ asset('assets/css/lineIcons.css') }}" rel="stylesheet">
    <!--== Font Awesome Icon CSS ==-->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--== Animate CSS ==-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!--== Swiper CSS ==-->
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <!--== Range Slider CSS ==-->
    <link href="{{ asset('assets/css/range-slider.css') }}" rel="stylesheet">
    <!--== Fancybox Min CSS ==-->
    <link href="{{ asset('assets/css/fancybox.min.css') }}" rel="stylesheet">
    <!--== Slicknav Min CSS ==-->
    <link href="{{ asset('assets/css/slicknav.css') }}" rel="stylesheet">
    <!--== Owl Carousel Min CSS ==-->
    <link href="{{ asset('assets/css/owlcarousel.min.css') }}" rel="stylesheet">
    <!--== Owl Theme Min CSS ==-->
    <link href="{{ asset('assets/css/owltheme.min.css') }}" rel="stylesheet">
    <!--== Spacing CSS ==-->
    <link href="{{ asset('assets/css/spacing.css') }}" rel="stylesheet">

    <!--== Main Style CSS ==-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Custom CSS for Enhanced Footer Design -->
    <style>
        /* Enhanced Footer Styles */
        .footer-connect-section {
            background: black;
            padding: 0px 0;
            color: #fff;
        }
        
        .footer-connect-section .section-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #fff;
            position: relative;
            display: inline-block;
        }
        
        .footer-connect-section .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 60px;
            height: 3px;
            background: #d40707;
        }
        
        .social-connect-box {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 30px;
            height: 100%;
            transition: transform 0.3s ease, background 0.3s ease;
        }
        
        .social-connect-box:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .newsletter-box {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 30px;
            height: 100%;
            transition: transform 0.3s ease, background 0.3s ease;
        }
        
        .newsletter-box:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .social-icons-enhanced {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 25px 0;
        }
        
        .social-icons-enhanced a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: #fff;
            font-size: 20px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-icons-enhanced a:hover {
            background: #d40707;
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(236, 107, 129, 0.3);
        }
        
        .social-icons-enhanced .facebook:hover { background: #3b5998; }
        .social-icons-enhanced .twitter:hover { background: #1da1f2; }
        .social-icons-enhanced .youtube:hover { background: #ff0000; }
        .social-icons-enhanced .instagram:hover { 
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
        }
        
        .newsletter-form-enhanced .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            height: 50px;
            border-radius: 25px;
            padding: 0 20px;
            margin-bottom: 15px;
        }
        
        .newsletter-form-enhanced .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #d40707;
            box-shadow: 0 0 0 0.2rem rgba(236, 107, 129, 0.25);
            color: #fff;
        }
        
        .newsletter-form-enhanced .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .newsletter-form-enhanced .btn-submit-enhanced {
            background: #d40707;
            border: none;
            color: white;
            height: 50px;
            border-radius: 25px;
            padding: 0 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .newsletter-form-enhanced .btn-submit-enhanced:hover {
            background: #d40707;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(236, 107, 129, 0.3);
        }
        
        .connect-description {
            color: rgba(255, 255, 255, 0.8);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 0;
        }
        
        .newsletter-description {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            line-height: 1.5;
            margin-top: 15px;
            margin-bottom: 0;
        }
        
        .alert {
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .footer-connect-section {
                padding: 0px 0;
            }
            
            .social-connect-box,
            .newsletter-box {
                padding: 20px;
                margin-bottom: 30px;
            }
            
            .footer-connect-section .section-title {
                font-size: 24px;
            }
            
            .social-icons-enhanced {
                gap: 10px;
            }
            
            .social-icons-enhanced a {
                width: 45px;
                height: 45px;
                font-size: 18px;
            }
        }
        
        @media (max-width: 576px) {
            .social-icons-enhanced {
                flex-wrap: wrap;
                gap: 8px;
            }
            
            .newsletter-form-enhanced .btn-submit-enhanced {
                padding: 0 20px;
            }
        }
    </style>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
<!--wrapper start-->
<div class="wrapper home-default-wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
      <div class="preloader">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!--== End Preloader Content ==-->


@if(Request::is('/'))
@include('layouts.inc.frontend.navbar')
@else
@include('layouts.inc.frontend.navbar-style-2')
@endif
    <main class="main-content">

            @yield('content')
            
    <!--== Start Contact Info Area Wrapper ==-->
    <section class="bg-black-color">
      <div class="container pt-35 pb-40">
        <div class="row">
          <div class="col-12">
            <div class="contact-info contact-info-static">
              <div class="row">
                <div class="col-border col-12 col-md-6 col-sm-6 border-0">
                  <div class="info-item">
                    <div class="icon-box">
                      <i class="icon las la-phone-volume"></i>
                    </div>
                    <p>00961 3 979504</p>
                  </div>
                </div>
                <div class="col-border col-12 col-md-6 col-sm-6 mt-xs-35">
                  <div class="info-item">
                    <div class="icon-box">
                      <i class="icon las la-envelope"></i>
                    </div>
                    <p>admin@nutrihublb.com</p>
                  </div>
                </div>
        
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Info Area Wrapper ==-->

    <!--== Start Footer Connect Section ==-->
    <section class="footer-connect-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="social-connect-box text-center">
              <h3 class="section-title">Let's Connect On Social</h3>
              <div class="social-icons-enhanced">
                <a href="#" class="facebook"><i class="la la-facebook"></i></a>
                <a href="#" class="twitter"><i class="la la-twitter"></i></a>
                <a href="#" class="youtube"><i class="la la-youtube"></i></a>
                <a href="#" class="instagram"><i class="la la-instagram"></i></a>
              </div>
              <p class="connect-description">Follow us on your favorite platforms. Check out new launch teasers, how-to videos, and share your favorite looks.</p>
            </div>
          </div>
          {{-- <div class="col-lg-6">
            <div class="newsletter-box text-center">
              <h3 class="section-title">Sign Up For Newsletter</h3>
              <div class="newsletter-form-enhanced">
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                @if (session('success'))
                  <div class="alert alert-success">
                    {{ session('success') }}
                  </div>
                @endif
                <form action="{{ url('subscribe') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Your email address" requi#d40707>
                  </div>
                  <button class="btn btn-submit-enhanced" type="submit">Subscribe Now</button>
                </form>
                <p class="newsletter-description">You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
    <!--== End Footer Connect Section ==-->
        </main>
            @include('layouts.inc.frontend.footer')
              <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="ion-md-arrow-up"></span></div>

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-menu-close">menu <i class="icon-arrow-left"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->

     
    </div>

<!--=== Modernizr Min Js ===-->
<script src="{{ asset('assets/js/modernizr.js')}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{ asset('assets/js/jquery-main.js')}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{ asset('assets/js/jquery-migrate.js')}}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<!--=== jQuery Appear Js ===-->
<script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="{{ asset('assets/js/swiper.min.js')}}"></script>
<!--=== jQuery Fancy Box Min Js ===-->
<script src="{{ asset('assets/js/fancybox.min.js')}}"></script>
<!--=== jQuery Slick Nav Js ===-->
<script src="{{ asset('assets/js/slicknav.js')}}"></script>
<!--=== jQuery Waypoints Js ===-->
<script src="{{ asset('assets/js/waypoints.js')}}"></script>
<!--=== jQuery Owl Carousel Min Js ===-->
<script src="{{ asset('assets/js/owlcarousel.min.js')}}"></script>
<!--=== jQuery Match Height Min Js ===-->
<script src="{{ asset('assets/js/jquery-match-height.min.js')}}"></script>
<!--=== jQuery Zoom Min Js ===-->
<script src="{{ asset('assets/js/jquery-zoom.min.js')}}"></script>
<!--=== Countdown Js ===-->
<script src="{{ asset('assets/js/countdown.js')}}"></script>

<!--=== Custom Js ===-->
<script src="{{ asset('assets/js/custom.js')}}"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        window.addEventListener('message', event => {
            console.log('Message event trigge#d40707');
            alertify.set('notifier','position', 'top-right');
            alertify.notify(event.detail.text , event.detail.type);
        });
    </script>

    @yield('script')
    @livewireScripts
    @stack('scripts')
    

</body>
</html>