@extends('layout.master')
@section('content')


<main>
    <!--Inner banner start here-->
    <section class="banner-inner border-zigzag-up" style="background-image: url('public/images/Menu-cover.png');">
        <div class="container">
            <h2 class="banner-title text-uppercase text-center text-white">Who we are</h2>
        </div>
    </section>
    <!--Inner banner start here-->
    <!--Rule-war section start here-->
    <section class="rule-war py-110 border-zigzag-up">
        <div class="container  max-880">
           <h4 class="letter-spacing-0 text-default text-center mb-0">Located at the State of the Art Anabil tower in the capital’s Gulshan area, the rooftop restaurant provides stunning outdoor scenic views and gorgeous interiors bringing the Japanese fine dining culture to your doorstep.</h4>
        </div>
     </section>
     <!--Rule-war section ends here-->
     <!--Story-boxes start here-->
     <section class="story-boxes">
        <div class="container-fluid p-0 m-0">
            <div class="row m-0 align-items-center">
                <div class="col-md-6 p-0">
                    <div class="story-img">
                        <img src="{{URL::to('public/images/philosophy.png')}}" alt="story-img">
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="story-content text-center">
                        <h4 class="text-default mb-3 text-uppercase">Philosophy</h4>
                        <p>Kiriko brings together the love for Japanese cuisine and the authentic fine dining experience a cuisine as breathtaking as it deserves!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row m-0 align-items-center flex-col-reverse">
                <div class="col-md-6 p-0">
                    <div class="story-content text-center">
                        <h4 class="text-default mb-3 text-uppercase">Founder</h4>
                        <p>Kiriko BD is the brain child of our Founder Tawsif Wahid who is an avid food lover. He has travelled the world and fallen in love with the Japanese cuisine and the exotic culture surrounding it. Being a Japanese cuisine enthusiast himself, he felt the lack of a proper Japanese fine dining experience in a city which is absolutely crazy about a proper dining experience! Therefore, he decided to bring to the people what they did or maybe didn’t know they were missing, the ultimate Japanese fine dining experience in the country!
                        </p>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="story-img">
                        <img src="{{URL::to('public/images/Founder.png')}}" alt="story-img">
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!--Story-boxes ends here-->
     <!--Testimonial start here-->
     <section class="Testimonial-block primary-bg py-110 content-white">
        <div class="container">
           <div class="row">
              <div class="col-lg-12 col-md-12">
                 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="testimonial-bar text-center">
                          <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                          <p class="reviewbar text-white">The set one creepeth given air behold bring herb so thing sixth spirit moveth lesser thing air without cattle itself darkness greater. </p>
                          <h6 class="review-name text-white font-Av">– Javed Harji</h6>
                        </div>
                      </div>
                      <div class="carousel-item">
                       <div class="testimonial-bar text-center">
                         <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                         <p class="reviewbar text-white">The set one creepeth given air behold bring herb so thing sixth spirit moveth lesser thing air without cattle itself darkness greater. </p>
                         <h6 class="review-name text-white font-Av">– John Deo</h6>
                       </div>
                     </div>
                     <div class="carousel-item">
                       <div class="testimonial-bar text-center">
                         <i class="text-white fa fa-quote-left" aria-hidden="true"></i>
                         <p class="reviewbar text-white">The set one creepeth given air behold bring herb so thing sixth spirit moveth lesser thing air without cattle itself darkness greater. </p>
                         <h6 class="review-name text-white font-Av">– Michel Richard</h6>
                       </div>
                     </div>
                    </div>
                    <div class="carousel-indicators">
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Testimonial ends here-->
     <!--private dining start here-->
     <!--private dining ends here-->
     <!--Keepup-date start here-->
     <!--Keepup-date ends here-->
  </main>

  
@endsection

@section('script')
<script>
</script>
@endsection