<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from euclidesoftwaresolutions.com/themeforest/ess-restaurant/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 10:25:28 GMT -->
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kirikobd</title>
      <!--css links-->
      <link rel="stylesheet" href="{{URL::to('public/theme/css/font-awesome.min.css')}}" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{URL::to('public/theme/font/stylesheet.css')}}" type="text/css">
      <link rel="stylesheet" href="{{URL::to('public/theme/css/bootstrap.css')}}" type="text/css">
      <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme/font/flaticon.css')}}">
      <link rel="stylesheet" href="{{URL::to('public/theme/css/aos.css')}}" type="text/css">
      <link rel="stylesheet" href="{{URL::to('public/theme/css/style.css')}}" type="text/css">
      <link rel="stylesheet" href="{{URL::to('public/theme/css/responsive.css')}}" type="text/css">
   </head>
   <body>
      <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--fade-out" data-bs-abc="true"><i class="fa fa-caret-up" aria-hidden="true"></i>
      </a>
      <!--header start from here-->
      @include('layout.header')
      <!--header ends from here-->
      @yield('content')
      @include('layout.footer')
      <script src="{{URL::to('public/theme/js/aos.js')}}"></script>
      <script> AOS.init();</script>
      <script src="{{URL::to('public/theme/js/jquery.min.js')}}"></script>
      <!-- <script src="../../../cdn.jsdelivr.net/npm/%40popperjs/core%402.10.2/dist/umd/popper.min.js"></script> -->
      <script src="{{URL::to('public/theme/js/bootstrap.js')}}"></script>
      <script src="{{URL::to('public/theme/js/backtotop.js')}}"></script>

      @yield('script')
   </body>

<!-- Mirrored from euclidesoftwaresolutions.com/themeforest/ess-restaurant/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 10:25:42 GMT -->
</html>
