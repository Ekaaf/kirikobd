@extends('layout.master')
@section('content')

<main>
    <!--Inner banner start here-->
    <section class="banner-inner border-zigzag-up" style="background-image: url('public/images/Menu-cover.png');">
        <div class="container">
            <h2 class="banner-title text-uppercase text-center text-white">Our Menu</h2>
        </div>
    </section>


    <section class="order-menu py-110 pb-0" id="order-menu">
        <div class="container">
            <!-- <div class="btn-row mb-5">
                <a href="contact.html" class="btn btn-primary btn-white">
                    planning a party? - book now
                </a>
                <a href="tel:0123-456-789" class="btn btn-primary">
                    download our full menu
                </a>
             </div> -->

             <div class="tabs-bar text-center">
              <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                  @foreach($categories as $cat)
                 <li class="nav-item" role="presentation">
                   <button class="nav-link <?php if($cat->id == 1) echo 'active'; ?>" id="{{$cat->id}}" data-bs-toggle="pill" data-bs-target="#pills-{{$cat->id}}" type="button" role="tab" aria-controls="pills-{{$cat->id}}" aria-selected="true">{{$cat->category}}</button>
                 </li>
                 @endforeach
               </ul>

               
               <div class="tab-content" id="pills-tabContent">
                  @foreach($categories as $cat)
                 <div class="tab-pane fade <?php if($cat->id == 1) echo 'show active'; ?>" id="pills-{{$cat->id}}" role="tabpanel" aria-labelledby="pills-{{$cat->id}}-tab">
                    <!--Brunch menu-->

                    <div class="menubar">
                        <div class="row">
                           <div class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                           <div class="row">
                              @foreach($foods as $food)
                              @if($cat->id == $food->category_id)
                              <div class="col-lg-6 col-md-6">
                                 <div style="float: left;width: 80%;">
                                    <h5>{{$food->title}}</h5>
                                    <p>{{$food->description}}</p>
                                 </div>
                                 <div style="float:right;width: 20%;">
                                    <h5>{{$food->price}}/-</h5>
                                 </div>
                              </div>
                              @endif
                              @endforeach
                           </div>
                           </div>
                        </div>
                     </div>
         
                 </div>
                  @endforeach
               </div>

           </div>
        </div>
    </section>
</main>
<br><br>
@endsection

@section('script')
<script>
</script>
@endsection