<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Janie & Jack Clone</title>
  <link rel="stylesheet" href="./asset/css/style.css">
  <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css'>
</head>

<body>
  <section class="header_main_content">
    <div class="header_content">
      <div class="small_header">
        <div class="container">
          <div class="d-flex justify-content-between my-2">
            <div class="basic_info d-flex">

              <div class="dropdown">
                <a class="btn dropdown-toggle afterr_border px-0 ship_to" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-expanded="false">
                  Ship to : <img src="https://flowcdn.io/util/icons/flags-v2/svg/PAK.svg" alt="">
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <p>We ship internationally. Select the country you would like to ship to and the currency you would
                    like to shop in.</p>
                  <div class="select_country">
                    <select name="" id="">
                      <option selected>select country name</option>
                      <option>Pakistan</option>
                      <option>India</option>
                      <option>USA</option>
                    </select>
                  </div>
                  <a href="">Save & Continue Shopping</a>
                </div>
                <a class="btn px-0 afterr_border store" href="#">
                  <i class="fal fa-map-marker-alt mr-1"></i> Stores
                </a>
                <a class="btn px-0 track" href="#">
                  <i class="fal fa-truck mr-1"></i> Track Order
                </a>
              </div>
            </div>
            <div class="login_info">
              <a class="btn px-0 afterr_border signin" href="#">
                <i class="fal fa-user mr-1"></i> Sign In
              </a>
              <a class="btn px-0 afterr_border wishlist" href="#">
                <i class="fal fa-heart mr-1"></i> WishList
              </a>
              <a class="btn px-0 afterr_border search_icon_main" href="#0">
                <i class="fal fa-search"></i>
              </a>
              <a class="btn px-0" href="#">
                <i class="fal fa-shopping-bag"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="logo_section">
          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <div class="main_img">
                <a href=""> <img
                    src="https://www.janieandjack.com/on/demandware.static/Sites-JanieAndJack-Site/-/default/dw55dc3487/images/Logo.png"
                    alt=""></a>
              </div>
            </div>
            <div class="col-md-4 px-0">
              <div class="search_bar">
                <form action="">
                  <div class="input-group mb-3">
                    <input type="search" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <span class="input-group-text"> <button type="submit" class="btn p-0"> <i
                            class="fal fa-search"></i></button></span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="navigation">
          <nav class="navbar navbar-expand-lg navbar-light">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler navbar_to_open" type="button">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown dropdown_nav">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Girl <br>
                    <span>0-16 yrs</span>
                    <span class="float-right nav-icon">
                      <i class="fas fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown_menu_nav" aria-labelledby="navbarDropdown">
                    <hr>
                    <div class="d-flex">
                      <div class="text_area" style="width:70%">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Sort By Size <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Girl <span class="light-color-theme">5-12 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Toddler <span class="light-color-theme">2T-4 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Baby <span class="light-color-theme">0-24m</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Tween <span class="light-color-theme">0-16 yrs</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="" class="view-more">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Apparel & Accessories <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Shop All</a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Back In : Styles You Love <span class="text-danger">- Up to 60%
                                      off</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">New Arrivals</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sale <span class="text-danger">- Up to 60% off</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Matching Set <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sock Shop <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Dresses</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Rompers & Jumpsuits</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Collections <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Love And Peanst <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Resort 2022 <span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Holiday 2021 <span class="text-danger">On Sale</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Weekend</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Highland</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Chalet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Brown Girls Do Ballet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Harlem's Fashion Row <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                            <div class="content_area">
                              <p>our shops</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Dresses <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Tops & Pants <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Sweaters <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Janie's Dress Shop<span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Outfit Shop<span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">The Classics Edit</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Swim Club</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Special Occasion <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="img_area" style="width:30%">
                        <img src="https://i1.adis.ws/i/janieandjack/091321_Holiday1_G_MegaMenu?w=351" alt="">
                        <div class="text_area">
                          <div class="link_area">
                            <div class="links my-2 text-center">
                              <a href="" class="view-more">Shop New Arrivals <i class="fal fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown_nav">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Boy <br>
                    <span>0-16 yrs</span>
                    <span class="float-right nav-icon">
                      <i class="fas fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown_menu_nav" aria-labelledby="navbarDropdown">
                    <hr>
                    <div class="d-flex">
                      <div class="text_area" style="width:70%">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Sort By Size <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Boy <span class="light-color-theme">5-12 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Toddler <span class="light-color-theme">2T-4 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Baby <span class="light-color-theme">0-24m</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Tween <span class="light-color-theme">0-16 yrs</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="" class="view-more">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Apparel & Accessories <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Shop All</a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Back In : Styles You Love <span class="text-danger">- Up to 60%
                                      off</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">New Arrivals</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sale <span class="text-danger">- Up to 60% off</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Matching Set <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sock Shop <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Dresses</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Rompers & Jumpsuits</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Collections <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Love And Peanst <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Resort 2022 <span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Holiday 2021 <span class="text-danger">On Sale</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Weekend</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Highland</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Chalet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Brown Girls Do Ballet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Harlem's Fashion Row <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                            <div class="content_area">
                              <p>our shops</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Dresses <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Tops & Pants <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Sweaters <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Janie's Dress Shop<span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Outfit Shop<span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">The Classics Edit</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Swim Club</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Special Occasion <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="img_area" style="width:30%">
                        <img src="https://i1.adis.ws/i/janieandjack/091321_Holiday1_B_MegaMenu?w=351" alt="">
                        <div class="text_area">
                          <div class="link_area">
                            <div class="links my-2 text-center">
                              <a href="" class="view-more">Shop New Arrivals <i class="fal fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown_nav">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    New Born <br>
                    <span>0-16 yrs</span>
                    <span class="float-right nav-icon">
                      <i class="fas fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown_menu_nav" aria-labelledby="navbarDropdown">
                    <hr>
                    <div class="d-flex">
                      <div class="text_area" style="width:70%">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="content_area">
                              <p>New Born</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">New Born <span class="light-color-theme">5-12 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Toddler <span class="light-color-theme">2T-4 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Baby <span class="light-color-theme">0-24m</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Tween <span class="light-color-theme">0-16 yrs</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="" class="view-more">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Apparel & Accessories <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Shop All</a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Back In : Styles You Love <span class="text-danger">- Up to 60%
                                      off</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">New Arrivals</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sale <span class="text-danger">- Up to 60% off</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Matching Set <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sock Shop <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Dresses</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Rompers & Jumpsuits</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Collections <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Love And Peanst <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Resort 2022 <span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Holiday 2021 <span class="text-danger">On Sale</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Weekend</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Highland</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Chalet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Brown Girls Do Ballet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Harlem's Fashion Row <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                            <div class="content_area">
                              <p>our shops</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Dresses <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Tops & Pants <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Sweaters <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Janie's Dress Shop<span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Outfit Shop<span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">The Classics Edit</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Swim Club</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Special Occasion <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="img_area" style="width:30%">
                        <img src="https://i1.adis.ws/i/janieandjack/091321_Holiday1_NB_MegaMenu?w=351" alt="">
                        <div class="text_area">
                          <div class="link_area">
                            <div class="links my-2 text-center">
                              <a href="" class="view-more">Shop New Arrivals <i class="fal fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown_nav">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Tween <br>
                    <span>0-16 yrs</span>
                    <span class="float-right nav-icon">
                      <i class="fas fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown_menu_nav" aria-labelledby="navbarDropdown">
                    <hr>
                    <div class="d-flex">
                      <div class="text_area" style="width:70%">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="content_area">
                              <p>New Born</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">New Born <span class="light-color-theme">5-12 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Toddler <span class="light-color-theme">2T-4 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Baby <span class="light-color-theme">0-24m</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Tween <span class="light-color-theme">0-16 yrs</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="" class="view-more">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Apparel & Accessories <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Shop All</a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Back In : Styles You Love <span class="text-danger">- Up to 60%
                                      off</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">New Arrivals</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sale <span class="text-danger">- Up to 60% off</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Matching Set <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sock Shop <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Dresses</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Rompers & Jumpsuits</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Collections <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Love And Peanst <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Resort 2022 <span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Holiday 2021 <span class="text-danger">On Sale</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Weekend</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Highland</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Chalet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Brown Girls Do Ballet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Harlem's Fashion Row <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                            <div class="content_area">
                              <p>our shops</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Dresses <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Tops & Pants <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Sweaters <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Janie's Dress Shop<span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Outfit Shop<span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">The Classics Edit</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Swim Club</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Special Occasion <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="img_area" style="width:30%">
                        <img src="https://i1.adis.ws/i/janieandjack/091321_Holiday1_NB_MegaMenu?w=351" alt="">
                        <div class="text_area">
                          <div class="link_area">
                            <div class="links my-2 text-center">
                              <a href="" class="view-more">Shop New Arrivals <i class="fal fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown_nav">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Disney
                    <span class="float-right nav-icon">
                      <i class="fas fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown_menu_nav" aria-labelledby="navbarDropdown">
                    <hr>
                    <div class="d-flex">
                      <div class="text_area" style="width:70%">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Sort By Size <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Girl <span class="light-color-theme">5-12 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Toddler <span class="light-color-theme">2T-4 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Baby <span class="light-color-theme">0-24m</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Tween <span class="light-color-theme">0-16 yrs</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="" class="view-more">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Apparel & Accessories <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Shop All</a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Back In : Styles You Love <span class="text-danger">- Up to 60%
                                      off</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">New Arrivals</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sale <span class="text-danger">- Up to 60% off</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Matching Set <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sock Shop <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Dresses</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Rompers & Jumpsuits</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Collections <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Love And Peanst <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Resort 2022 <span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Holiday 2021 <span class="text-danger">On Sale</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Weekend</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Highland</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Chalet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Brown Girls Do Ballet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Harlem's Fashion Row <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                            <div class="content_area">
                              <p>our shops</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Dresses <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Tops & Pants <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Sweaters <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Janie's Dress Shop<span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Outfit Shop<span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">The Classics Edit</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Swim Club</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Special Occasion <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="img_area" style="width:30%">
                        <img src="https://i1.adis.ws/i/janieandjack/091321_Holiday1_G_MegaMenu?w=351" alt="">
                        <div class="text_area">
                          <div class="link_area">
                            <div class="links my-2 text-center">
                              <a href="" class="view-more">Shop New Arrivals <i class="fal fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown_nav">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Family Moment <br>
                    <span>On Sale!</span>
                    <span class="float-right nav-icon">
                      <i class="fas fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown_menu_nav" aria-labelledby="navbarDropdown">
                    <hr>
                    <div class="d-flex">
                      <div class="text_area" style="width:70%">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Sort By Size <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Girl <span class="light-color-theme">5-12 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Toddler <span class="light-color-theme">2T-4 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Baby <span class="light-color-theme">0-24m</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Tween <span class="light-color-theme">0-16 yrs</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="" class="view-more">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Apparel & Accessories <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Shop All</a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Back In : Styles You Love <span class="text-danger">- Up to 60%
                                      off</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">New Arrivals</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sale <span class="text-danger">- Up to 60% off</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Matching Set <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sock Shop <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Dresses</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Rompers & Jumpsuits</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Collections <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Love And Peanst <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Resort 2022 <span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Holiday 2021 <span class="text-danger">On Sale</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Weekend</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Highland</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Chalet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Brown Girls Do Ballet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Harlem's Fashion Row <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                            <div class="content_area">
                              <p>our shops</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Dresses <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Tops & Pants <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Sweaters <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Janie's Dress Shop<span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Outfit Shop<span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">The Classics Edit</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Swim Club</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Special Occasion <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="img_area" style="width:30%">
                        <img src="https://i1.adis.ws/i/janieandjack/091321_Holiday1_G_MegaMenu?w=351" alt="">
                        <div class="text_area">
                          <div class="link_area">
                            <div class="links my-2 text-center">
                              <a href="" class="view-more">Shop New Arrivals <i class="fal fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown_nav">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Gift Guide
                    <span class="float-right nav-icon">
                      <i class="fas fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown_menu_nav" aria-labelledby="navbarDropdown">
                    <hr>
                    <div class="d-flex">
                      <div class="text_area" style="width:70%">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Sort By Size <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Girl <span class="light-color-theme">5-12 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Toddler <span class="light-color-theme">2T-4 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Baby <span class="light-color-theme">0-24m</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Tween <span class="light-color-theme">0-16 yrs</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="" class="view-more">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Apparel & Accessories <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Shop All</a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Back In : Styles You Love <span class="text-danger">- Up to 60%
                                      off</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">New Arrivals</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sale <span class="text-danger">- Up to 60% off</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Matching Set <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sock Shop <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Dresses</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Rompers & Jumpsuits</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Collections <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Love And Peanst <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Resort 2022 <span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Holiday 2021 <span class="text-danger">On Sale</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Weekend</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Highland</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Chalet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Brown Girls Do Ballet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Harlem's Fashion Row <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                            <div class="content_area">
                              <p>our shops</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Dresses <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Tops & Pants <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Sweaters <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Janie's Dress Shop<span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Outfit Shop<span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">The Classics Edit</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Swim Club</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Special Occasion <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="img_area" style="width:30%">
                        <img src="https://i1.adis.ws/i/janieandjack/091321_Holiday1_G_MegaMenu?w=351" alt="">
                        <div class="text_area">
                          <div class="link_area">
                            <div class="links my-2 text-center">
                              <a href="" class="view-more">Shop New Arrivals <i class="fal fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown dropdown_nav">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Sale
                    <span class="float-right nav-icon">
                      <i class="fas fa-chevron-down"></i>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown_menu_nav" aria-labelledby="navbarDropdown">
                    <hr>
                    <div class="d-flex">
                      <div class="text_area" style="width:70%">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Sort By Size <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Girl <span class="light-color-theme">5-12 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Toddler <span class="light-color-theme">2T-4 yrs</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Baby <span class="light-color-theme">0-24m</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Tween <span class="light-color-theme">0-16 yrs</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="" class="view-more">View More</a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Apparel & Accessories <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Shop All</a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Back In : Styles You Love <span class="text-danger">- Up to 60%
                                      off</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">New Arrivals</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sale <span class="text-danger">- Up to 60% off</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Matching Set <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Sock Shop <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Dresses</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Rompers & Jumpsuits</a>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-md-3">
                            <div class="content_area">
                              <p>Collections <span class="float-right nav-icon plus_icon"><i
                                    class="fas fa-plus"></i></span></p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">Love And Peanst <span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Resort 2022 <span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Holiday 2021 <span class="text-danger">On Sale</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">Weekend</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Highland</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Chalet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Brown Girls Do Ballet</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Harlem's Fashion Row <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="col-md-3">
                            <div class="content_area">
                              <p>our shops</p>
                              <div class="link_area">
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Dresses <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Tops & Pants <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">The Sale Edit: Sweaters <span class="text-danger">On Sale</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Janie's Dress Shop<span class="light-color-theme">New</span></a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Outfit Shop<span class="light-color-theme">New</span></a>
                                </div>

                                <div class="links my-2">
                                  <a href="">The Classics Edit</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Swim Club</a>
                                </div>
                                <div class="links my-2">
                                  <a href="">Special Occasion <span class="text-danger">On Sale</span></a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="img_area" style="width:30%">
                        <img src="https://i1.adis.ws/i/janieandjack/091321_Holiday1_G_MegaMenu?w=351" alt="">
                        <div class="text_area">
                          <div class="link_area">
                            <div class="links my-2 text-center">
                              <a href="" class="view-more">Shop New Arrivals <i class="fal fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>





              </ul>
              <div class="nav_main_link">
                <hr>
                <a class="btn px-4" href="#">
                  <i class="fal fa-user mr-1"></i> Sign In
                </a>
                <br>
                <a class="btn px-0 afterr_border px-4" href="#">
                  <i class="fal fa-heart mr-1"></i> WishList
                </a>
                <br>
                <a class="btn px-4" href="#">
                  <i class="fal fa-map-marker-alt mr-1"></i> Stores
                </a>
                <br>
                <a class="btn px-4" href="#">
                  <i class="fal fa-truck mr-1"></i> Track Order
                </a>
              </div>
            </div>
          </nav>

        </div>
      </div>
    </div>
