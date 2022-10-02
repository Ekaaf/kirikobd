@extends('layout.master')
@section('content')

<main>
    <!--Inner banner start here-->
    <section class="banner-inner border-zigzag-up" style="background-image: url('public/theme/images/story-bg.webp');">
        <div class="container">
            <h2 class="banner-title text-uppercase text-center text-white">Our Menu</h2>
        </div>
    </section>


    <section class="order-menu py-110 pb-0" id="order-menu">
        <div class="container">
            <div class="btn-row mb-5">
                <a href="contact.html" class="btn btn-primary btn-white">
                    planning a party? - book now
                </a>
                <a href="tel:0123-456-789" class="btn btn-primary">
                    download our full menu
                </a>
             </div>
             <div class="tabs-bar text-center">
              <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                 <li class="nav-item" role="presentation">
                   <button class="nav-link active" id="pills-Brunch-tab" data-bs-toggle="pill" data-bs-target="#pills-Brunch" type="button" role="tab" aria-controls="pills-Brunch" aria-selected="true">Brunch</button>
                 </li>
                 <li class="nav-item" role="presentation">
                   <button class="nav-link" id="pills-Lunch-tab" data-bs-toggle="pill" data-bs-target="#pills-Lunch" type="button" role="tab" aria-controls="pills-Lunch" aria-selected="false">Lunch Menu</button>
                 </li>
                 <li class="nav-item" role="presentation">
                   <button class="nav-link" id="pills-Dinner-tab" data-bs-toggle="pill" data-bs-target="#pills-Dinner" type="button" role="tab" aria-controls="pills-Dinner" aria-selected="false">Dinner Menu</button>
                 </li>
                 <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Kid-tab" data-bs-toggle="pill" data-bs-target="#pills-Kid" type="button" role="tab" aria-controls="pills-Kid" aria-selected="false">Kid's Menu</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-Desserts-tab" data-bs-toggle="pill" data-bs-target="#pills-Desserts" type="button" role="tab" aria-controls="pills-Desserts" aria-selected="false">Desserts</button>
                  </li>
               </ul>
               <div class="tab-content" id="pills-tabContent">
                 <div class="tab-pane fade show active" id="pills-Brunch" role="tabpanel" aria-labelledby="pills-Brunch-tab">
                    <!--Brunch menu-->
                    <div class="menubar">
                       <div class="row">
                          <div class="col-lg-6 col-md-12">
                             <div class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra Aglio e Olio</h5>
                                         <p>olive oil, garlic, chili, Grana Padano 
                                            (add anchovy 2.00)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra al Pomodoro</h5>
                                         <p>tomatoes, garlic, basil, Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Canestri Cacio e Pepe</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Bucatini All’ Amatriciana</h5>
                                         <p>tomato, red onion, guanciale, chili, 
                                            Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Toasted Spaghetti with Clams 
                                            & Shrimp</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Lasagna Verde Bolognese</h5>
                                         <p>bechamel, mozzarella, grana padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Ricotta Ravioli</h5>
                                         <p>squash, bread crumbs, sage, balsamic, 
                                            chili oil</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Marinara</h5>
                                         <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal cheese)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Four Cheese</h5>
                                         <p>mozzarella, fontina, gorgonzola dolce, 
                                            Grana Padano (no tomato)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>House-Made American Pepperoni</h5>
                                         <p>fontina, tomato</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pizza of the Day</h5>
                                         <p>Nduja sweet potato purée, burrata, onion, 
                                            garlic, lime, cilantro, brown butter purée</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Salume Beddu Nduja</h5>
                                         <p>tomato, fior di latte, garlic, oregano, honey</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Hawaiian</h5>
                                         <p>tomato, mozzarella, jalapeno, pineapple, 
                                            house-made Canadian bacon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Broccoli</h5>
                                         <p>garlic, chili, lemon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Brussels Sprouts</h5>
                                         <p>lemon, chili</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Cauliflower</h5>
                                         <p>calabrian chili, pine nut, pickled raisin</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Rainbow Carrots</h5>
                                         <p>hot honey, chives</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!--Brunch menu-->
                 </div>
                 <div class="tab-pane fade" id="pills-Lunch" role="tabpanel" aria-labelledby="pills-Lunch-tab">
                    <!--Lunch menu-->
                    <div class="menubar">
                       <div class="row">
                          <div class="col-lg-6 col-md-12">
                             <div class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra Aglio e Olio</h5>
                                         <p>olive oil, garlic, chili, Grana Padano 
                                            (add anchovy 2.00)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra al Pomodoro</h5>
                                         <p>tomatoes, garlic, basil, Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Canestri Cacio e Pepe</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Bucatini All’ Amatriciana</h5>
                                         <p>tomato, red onion, guanciale, chili, 
                                            Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Toasted Spaghetti with Clams 
                                            & Shrimp</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Lasagna Verde Bolognese</h5>
                                         <p>bechamel, mozzarella, grana padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Ricotta Ravioli</h5>
                                         <p>squash, bread crumbs, sage, balsamic, 
                                            chili oil</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Marinara</h5>
                                         <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal cheese)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Four Cheese</h5>
                                         <p>mozzarella, fontina, gorgonzola dolce, 
                                            Grana Padano (no tomato)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>House-Made American Pepperoni</h5>
                                         <p>fontina, tomato</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pizza of the Day</h5>
                                         <p>Nduja sweet potato purée, burrata, onion, 
                                            garlic, lime, cilantro, brown butter purée</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Salume Beddu Nduja</h5>
                                         <p>tomato, fior di latte, garlic, oregano, honey</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Hawaiian</h5>
                                         <p>tomato, mozzarella, jalapeno, pineapple, 
                                            house-made Canadian bacon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Broccoli</h5>
                                         <p>garlic, chili, lemon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Brussels Sprouts</h5>
                                         <p>lemon, chili</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Cauliflower</h5>
                                         <p>calabrian chili, pine nut, pickled raisin</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Rainbow Carrots</h5>
                                         <p>hot honey, chives</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!--Lunch menu-->
                 </div>
                 <div class="tab-pane fade" id="pills-Dinner" role="tabpanel" aria-labelledby="pills-Dinner-tab">
                    <!--Dinner menu-->
                    <div class="menubar">
                       <div class="row">
                          <div class="col-lg-6 col-md-12">
                             <div class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra Aglio e Olio</h5>
                                         <p>olive oil, garlic, chili, Grana Padano 
                                            (add anchovy 2.00)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra al Pomodoro</h5>
                                         <p>tomatoes, garlic, basil, Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Canestri Cacio e Pepe</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Bucatini All’ Amatriciana</h5>
                                         <p>tomato, red onion, guanciale, chili, 
                                            Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Toasted Spaghetti with Clams 
                                            & Shrimp</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Lasagna Verde Bolognese</h5>
                                         <p>bechamel, mozzarella, grana padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Ricotta Ravioli</h5>
                                         <p>squash, bread crumbs, sage, balsamic, 
                                            chili oil</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Marinara</h5>
                                         <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal cheese)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Four Cheese</h5>
                                         <p>mozzarella, fontina, gorgonzola dolce, 
                                            Grana Padano (no tomato)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>House-Made American Pepperoni</h5>
                                         <p>fontina, tomato</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pizza of the Day</h5>
                                         <p>Nduja sweet potato purée, burrata, onion, 
                                            garlic, lime, cilantro, brown butter purée</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Salume Beddu Nduja</h5>
                                         <p>tomato, fior di latte, garlic, oregano, honey</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Hawaiian</h5>
                                         <p>tomato, mozzarella, jalapeno, pineapple, 
                                            house-made Canadian bacon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Broccoli</h5>
                                         <p>garlic, chili, lemon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Brussels Sprouts</h5>
                                         <p>lemon, chili</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Cauliflower</h5>
                                         <p>calabrian chili, pine nut, pickled raisin</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Rainbow Carrots</h5>
                                         <p>hot honey, chives</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!--Dinner menu-->
                 </div>
                 <div class="tab-pane fade" id="pills-Kid" role="tabpanel" aria-labelledby="pills-Kid-tab">
                    <!--Kid menu-->
                    <div class="menubar">
                       <div class="row">
                          <div class="col-lg-6 col-md-12">
                             <div class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra Aglio e Olio</h5>
                                         <p>olive oil, garlic, chili, Grana Padano 
                                            (add anchovy 2.00)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra al Pomodoro</h5>
                                         <p>tomatoes, garlic, basil, Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Canestri Cacio e Pepe</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Bucatini All’ Amatriciana</h5>
                                         <p>tomato, red onion, guanciale, chili, 
                                            Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Toasted Spaghetti with Clams 
                                            & Shrimp</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Lasagna Verde Bolognese</h5>
                                         <p>bechamel, mozzarella, grana padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Ricotta Ravioli</h5>
                                         <p>squash, bread crumbs, sage, balsamic, 
                                            chili oil</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Marinara</h5>
                                         <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal cheese)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Four Cheese</h5>
                                         <p>mozzarella, fontina, gorgonzola dolce, 
                                            Grana Padano (no tomato)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>House-Made American Pepperoni</h5>
                                         <p>fontina, tomato</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pizza of the Day</h5>
                                         <p>Nduja sweet potato purée, burrata, onion, 
                                            garlic, lime, cilantro, brown butter purée</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Salume Beddu Nduja</h5>
                                         <p>tomato, fior di latte, garlic, oregano, honey</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Hawaiian</h5>
                                         <p>tomato, mozzarella, jalapeno, pineapple, 
                                            house-made Canadian bacon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Broccoli</h5>
                                         <p>garlic, chili, lemon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Brussels Sprouts</h5>
                                         <p>lemon, chili</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Cauliflower</h5>
                                         <p>calabrian chili, pine nut, pickled raisin</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Rainbow Carrots</h5>
                                         <p>hot honey, chives</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!--Kid menu-->
                 </div>
                 <div class="tab-pane fade" id="pills-Desserts" role="tabpanel" aria-labelledby="pills-Desserts-tab">
                    <!--Desserts menu-->
                    <div class="menubar">
                       <div class="row">
                          <div class="col-lg-6 col-md-12">
                             <div class="white-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Entrees</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Wood Oven Roasted Chicken</h5>
                                         <p>Refried beans, rice, grilled chicken, sour cream, salsa verde, cheese, pico.</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Organic Pastas</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra Aglio e Olio</h5>
                                         <p>olive oil, garlic, chili, Grana Padano 
                                            (add anchovy 2.00)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Chitarra al Pomodoro</h5>
                                         <p>tomatoes, garlic, basil, Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Canestri Cacio e Pepe</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Bucatini All’ Amatriciana</h5>
                                         <p>tomato, red onion, guanciale, chili, 
                                            Grana Padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Toasted Spaghetti with Clams 
                                            & Shrimp</h5>
                                         <p>pecorino, Grana Padano, black pepper</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Lasagna Verde Bolognese</h5>
                                         <p>bechamel, mozzarella, grana padano</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Ricotta Ravioli</h5>
                                         <p>squash, bread crumbs, sage, balsamic, 
                                            chili oil</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                             <div class="sky-bg border-gray border-1 menu-in text-start pt-4 pe-5 ps-5 pb-4 mb-4">
                                <h5 class="mb-4 cursive-title primary">Pizza</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Marinara</h5>
                                         <p>tomato, onion, garlic, oregano, basil, pecorino (very minimal cheese)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Four Cheese</h5>
                                         <p>mozzarella, fontina, gorgonzola dolce, 
                                            Grana Padano (no tomato)</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>House-Made American Pepperoni</h5>
                                         <p>fontina, tomato</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pizza of the Day</h5>
                                         <p>Nduja sweet potato purée, burrata, onion, 
                                            garlic, lime, cilantro, brown butter purée</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Salume Beddu Nduja</h5>
                                         <p>tomato, fior di latte, garlic, oregano, honey</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Pastaria Hawaiian</h5>
                                         <p>tomato, mozzarella, jalapeno, pineapple, 
                                            house-made Canadian bacon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                             <div class="white-bg border-gray border-1 menu-in text-start text-start pt-4 pe-5 ps-5 pb-4">
                                <h5 class="mb-4 cursive-title primary">Vegetables</h5>
                                <ul class="menu-listing">
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Broccoli</h5>
                                         <p>garlic, chili, lemon</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Roasted Brussels Sprouts</h5>
                                         <p>lemon, chili</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Cauliflower</h5>
                                         <p>calabrian chili, pine nut, pickled raisin</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                   <li class="d-flex align-items-start">
                                      <div class="leftbar">
                                         <h5>Rainbow Carrots</h5>
                                         <p>hot honey, chives</p>
                                      </div>
                                      <div class="rightbar d-flex align-items-center">
                                         <i class="fa fa-caret-right" aria-hidden="true"></i>
                                         <h5>$15</h5>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!--Desserts menu-->
                 </div>
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