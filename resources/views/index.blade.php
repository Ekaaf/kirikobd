@extends('layout.master')
@section('content')
<main>
   <!--banner start here-->
   <section class="home-banner border-zigzag-up">
      <div id="banner-slide" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="item carousel-item active">
               <img src="{{URL::to('public/theme/images/slide1.webp')}}" alt="Los Angeles" class="img-fluid w-100">
               <div class="carousel-caption my-auto">
                  <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                  <h2 class="text-white">Loved by people</h2>
                  <div class="address mb-5">
                     <p class="text-uppercase">1243th Avenue, London</p>
                     <p  class="text-uppercase">Tel: 1 (234) 5555</p>
                  </div>
                  <div class="banner-btn">
                     <a href="menu.html" class="btn btn-outline">View Our Menu</a>
                  </div>
               </div>
            </div>
            <div class="item carousel-item ">
               <img src="{{URL::to('public/theme/images/slide2.webp')}}" alt="Los Angeles" class="img-fluid w-100">
               <div class="carousel-caption my-auto">
                  <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                  <h2 class="text-white">Loved by people</h2>
                  <div class="address mb-5">
                     <p class="text-uppercase">1243th Avenue, London</p>
                     <p class="text-uppercase">Tel: 1 (234) 5555</p>
                  </div>
                  <div class="banner-btn">
                     <a href="menu.html" class="btn btn-outline">View Our Menu</a>
                  </div>
               </div>
            </div>
            <div class="item carousel-item ">
               <img src="{{URL::to('public/theme/images/slide3.webp')}}" alt="Los Angeles" class="img-fluid w-100">
               <div class="carousel-caption my-auto">
                  <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                  <h2 class="text-white">Loved by people</h2>
                  <div class="address mb-5">
                     <p class="text-uppercase">1243th Avenue, London</p>
                     <p class="text-uppercase">Tel: 1 (234) 5555</p>
                  </div>
                  <div class="banner-btn">
                     <a href="menu.html" class="btn btn-outline">View Our Menu</a>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <a class="carousel-control-prev" href="#banner-slide" role="button" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#banner-slide" role="button" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
   </section>
   <!--banner ends here-->
   <!--our story start here-->
   <section class="py-110 story-block">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-6">
                     <div class="story-img-bar">
                        <img src="{{URL::to('public/theme/images/story-img-1.webp')}}" alt="story-img-1">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-6">
                     <div class="story-img-bar mt-5">
                        <img src="{{URL::to('public/theme/images/story-img-2.webp')}}" alt="story-img-2">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-12">
               <div class="story-detail ps-lg-4">
                  <h5 class="font-cursive mb-0 text-start primary">Discover</h5>
                  <h2 class="text-uppercase">Our Story</h2>
                  <p class="font-Av mb-5">Multiply isn't night sixth under second second open he darkness said beast, without whales every herb sea place light life from divide isn't. Deep give greater. Darkness have fifth third open over itself. Third great make form is waters were. Midst green very. </p>
                  <div class="story-btn"><a href="story.html" class="btn btn-primary">Read our full Story</a></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--our story ends here-->
   <!--gallery start here-->
   <section class="gallery-block py-60 primary-bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-12">
               <div class="gallery-bar border border-5">
                  <img src="{{URL::to('public/theme/images/gallery-left-img.webp')}}" alt="img" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-4 col-md-12">
               <a href="gallery.html" class="gallery-content border border-5">
                  <h5 class="font-cursive mb-0">View our</h5>
                  <h2 class="text-white text-uppercase">Gallery</h2>
                  <p>food & Venue</p>
               </a>
            </div>
            <div class="col-lg-4 col-md-12">
               <div class="gallery-bar border border-5">
                  <img src="{{URL::to('public/theme/images/gallery-ryt-img.webp')}}" alt="img" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--gallery ends here-->
   <!--Testimonial start here-->
   <!--Testimonial ends here-->
   <!--private dining start here-->
   <!--private dining ends here-->
   <!--Menu order start here-->
   <!--Menu order ends here-->
   <!--Book order primary section start here-->
   <!--Book order primary section ends here-->
   <!--Instagram Gallery start here-->
   <section class="instagram-gallery-bar pt-5">
      <div class="container">
         <h4 class="primary-title text-uppercase">instagram gallery</h4>
         <h6 class="text-center"><a href="#" class="text-gray">@ ess-restaurant </a></h6>
      </div>
      <div class="container-fluid mt-5 p-0">
         <div class="row m-0">
            <div class="col-lg-3 p-0 col-md-6">
               <div class="insta-box">
                  <img src="{{URL::to('public/theme/images/insta-1.webp')}}" alt="instagram-img">
                  <div class="overlay">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 p-0 col-md-6">
               <div class="insta-box">
                  <img src="{{URL::to('public/theme/images/insta-2.webp')}}" alt="instagram-img">
                  <div class="overlay">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </div>                    
               </div>
            </div>
            <div class="col-lg-3 p-0 col-md-6">
               <div class="insta-box">
                  <img src="{{URL::to('public/theme/images/insta-3.webp')}}" alt="instagram-img">
                  <div class="overlay">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </div>                    
               </div>
            </div>
            <div class="col-lg-3 p-0 col-md-6">
               <div class="insta-box">
                  <img src="{{URL::to('public/theme/images/insta-4.webp')}}" alt="instagram-img">
                  <div class="overlay">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </div>                     
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="instagram-gallery-bar pt-5">
      <div class="container">
         <h4 class="primary-title text-uppercase">Social Media</h4>
      </div>
      <div class="container-fluid mt-5 p-0" style="text-align: center;">
         Social Media
      </div>
   </section>
   <!--Instagram Gallery ends here-->
   <!--Rule-war section start here-->
   <!--Rule-war section ends here-->
   <!--Press-News start here-->
   <!--Press-News ends here-->
   <!--Reservation start here-->
   <!--Reservation ends here-->
   <!--Keepup-date start here-->
   <section class="Keepup-date py-130">
      <div class="container">
         <h4 class="text-default text-center mb-lg-3">KEEP UP TO DATE WITH Us!</h4>
         <p class="text-gray text-center">Sign up to be the first to receive special news and event updates from Restaurant. </p>
         <form class="keepup-form needs-validation" novalidate>
            <div class="formrow">
               <input type="email" class="form-control" required placeholder="Enter Your Email Address">
               <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit">
                     <img src="{{URL::to('public/theme/images/next.png')}}" alt="next">
                  </button>
               </div>
            </div>
         </form>
      </div>
   </section>
   <!--Keepup-date ends here-->
</main>

@endsection

@section('script')
<script>
</script>
@endsection