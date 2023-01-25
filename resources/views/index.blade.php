@extends('layout.master')
@section('content')
<main>
   <!--banner start here-->
   <section class="home-banner border-zigzag-up">
      <div id="banner-slide" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="item carousel-item active">
               <img src="{{URL::to('public/images/banner1.png')}}" alt="Los Angeles" class="img-fluid w-100">
               <div class="carousel-caption my-auto">
                  <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                  <h2 class="text-white">Loved by people</h2>
                  <!-- <div class="address mb-5">
                     <p class="text-uppercase">1243th Avenue, London</p>
                     <p  class="text-uppercase">Tel: 1 (234) 5555</p>
                  </div> -->
                  <div class="banner-btn">
                     <a href="{{URL::to('menu')}}" class="btn btn-outline">View Our Menu</a>
                  </div>
               </div>
            </div>
            <div class="item carousel-item ">
               <img src="{{URL::to('public/images/banner2.png')}}" alt="Los Angeles" class="img-fluid w-100">
               <div class="carousel-caption my-auto">
                  <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                  <h2 class="text-white">Loved by people</h2>
                  <!-- <div class="address mb-5">
                     <p class="text-uppercase">1243th Avenue, London</p>
                     <p class="text-uppercase">Tel: 1 (234) 5555</p>
                  </div> -->
                  <div class="banner-btn">
                     <a href="{{URL::to('menu')}}" class="btn btn-outline">View Our Menu</a>
                  </div>
               </div>
            </div>
            <div class="item carousel-item ">
               <img src="{{URL::to('public/images/banner3.png')}}" alt="Los Angeles" class="img-fluid w-100">
               <div class="carousel-caption my-auto">
                  <h5 class="font-cursive mb-0 text-start primary">Taste</h5>
                  <h2 class="text-white">Loved by people</h2>
                  <!-- <div class="address mb-5">
                     <p class="text-uppercase">1243th Avenue, London</p>
                     <p class="text-uppercase">Tel: 1 (234) 5555</p>
                  </div> -->
                  <div class="banner-btn">
                     <a href="{{URL::to('menu')}}" class="btn btn-outline">View Our Menu</a>
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
                        <img src="{{URL::to('public/images/homestory1.png')}}" alt="story-img-1">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-6">
                     <div class="story-img-bar mt-5">
                        <img src="{{URL::to('public/images/homestory2.png')}}" alt="story-img-2">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-12">
               <div class="story-detail ps-lg-4">
                  <h5 class="font-cursive mb-0 text-start primary">Discover</h5>
                  <h2 class="text-uppercase">Our Story</h2>
                  <p class="font-Av mb-5">Kiriko BD is a product of love and passion for one of the world’s most renowned cuisines, the exquisite and bursting with flavor, Japanese cuisine. Kiriko brings together the love for Japanese cuisine and the authentic fine dining experience a cuisine as breathtaking as it deserves!
Our Japanese head chef is an award winning chef from the heartland of the cuisine we all love and admire so much. He is a man on a mission to spread the joy and love of Japanese food amongst the long time admirers in the country. From scintillating Teppanyaki to mouth watering desserts such as Matcha Tiramisu, you name it and Chef insert surname has got it all covered.
 </p>
                  <div class="story-btn"><a href="{{URL::to('story')}}" class="btn btn-primary">Read our full Story</a></div>
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
                  <img src="{{URL::to('public/images/homegallery1.png')}}" alt="img" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-4 col-md-12">
               <a href="{{URL::to('gallery')}}" class="gallery-content border border-5">
                  <h5 class="font-cursive mb-0">View our</h5>
                  <h2 class="text-white text-uppercase">Gallery</h2>
                  <p>food & Venue</p>
               </a>
            </div>
            <div class="col-lg-4 col-md-12">
               <div class="gallery-bar border border-5">
                  <img src="{{URL::to('public/images/homegallery2.png')}}" alt="img" class="img-fluid">
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
                  <img src="{{URL::to('public/images/homeinsta1.png')}}" alt="instagram-img">
                  <div class="overlay">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 p-0 col-md-6">
               <div class="insta-box">
                  <img src="{{URL::to('public/images/homeinsta2.png')}}" alt="instagram-img">
                  <div class="overlay">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </div>                    
               </div>
            </div>
            <div class="col-lg-3 p-0 col-md-6">
               <div class="insta-box">
                  <img src="{{URL::to('public/images/homeinsta3.png')}}" alt="instagram-img">
                  <div class="overlay">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </div>                    
               </div>
            </div>
            <div class="col-lg-3 p-0 col-md-6">
               <div class="insta-box">
                  <img src="{{URL::to('public/images/homeinsta4.png')}}" alt="instagram-img">
                  <div class="overlay">
                     <i class="fa fa-instagram" aria-hidden="true"></i>
                  </div>                     
               </div>
            </div>
         </div>
      </div>
   </section>


   <!-- <section class="instagram-gallery-bar pt-5">
      <div class="container">
         <h4 class="primary-title text-uppercase">Social Media</h4>
      </div>
      <div class="container-fluid mt-5 p-0" style="text-align: center;">
         Social Media
      </div>
   </section> -->
   <!--Instagram Gallery ends here-->
   <!--Rule-war section start here-->
   <!--Rule-war section ends here-->
   <!--Press-News start here-->
   <!--Press-News ends here-->
   <!--Reservation start here-->
   <!--Reservation ends here-->
   <!--Keepup-date start here-->
   <!--Keepup-date ends here-->
</main>

@endsection

@section('script')
<script>
</script>
@endsection