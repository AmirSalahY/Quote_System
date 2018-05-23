@extends('father')

@section('title', 'الرئيسية')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection


@section('sb-left')


    <div class="sb-slidebar sb-left">
        <form method="get" class="form-search" id="search-global-form">
            <input class="form-search__input" type="text" placeholder="Search">
            <button class="form-search__btn"><i class="icon fa fa-search"></i></button>
        </form>
        <nav class="main-nav">
            <ul class="navig-menu list-unstyled">
                <li class="navig-menu__item">
                    <a class="navig-menu__link" href="home.html">Home</a>
                </li>
                <li class="navig-menu__item">
                    <a class="navig-menu__link" href="shop-catalog-page.html">Pizza menu</a>
                </li>
                <li class="navig-menu__item">
                    <a class="navig-menu__link" href="pizza-builder.html">pizza builder</a>
                </li>
                <li class="navig-menu__item">
                    <a class="navig-menu__link" href="blog.html">blog</a>
                </li>
                <li class="navig-menu__item">
                    <a class="navig-menu__link" href="blog-details.html">pages</a>
                </li>
                <li class="navig-menu__item">
                    <a class="navig-menu__link" href="about.html">about us</a>
                </li>
                <li class="navig-menu__item">
                    <a class="navig-menu__link" href="contact.html">contact</a>
                </li>
            </ul>
        </nav>
        <!-- end main-nav -->

        <div class="border-bottom"></div>
        <a class="link-account" href="javascript:void(0);">login</a>
        <a class="link-account" href="javascript:void(0);">my account </a>
        <a class="link-account" href="javascript:void(0);">checkout</a>
    </div>
    <!-- end sb-left -->
@endsection


@section('header')

    <div class="main-slider slider-pro" id="my-slider"
         data-slider-width="1920"
         data-slider-height="1080">

        <div class="sp-slides">

            <!-- Slide 1 -->
            <div class="sp-slide">
                <img class="sp-image img-responsive" src="assets/media/main-slider/main-slider_bg-1.jpg" height="1080" width="1920" alt="slider">
                <span class="sp-layer main-slider__title"
                      data-horizontal="0"
                      data-vertical="-23%"
                      data-position="centerCenter"
                      data-show-transition="up"
                      data-hide-transition="down"
                      data-show-duration="800"
                      data-show-delay="400"
                      data-hide-delay="400">
									Get it while it’s hot!
								</span>
                <div class="sp-layer main-slider__text text-center"
                     data-horizontal="0"
                     data-vertical="19%"
                     data-position="centerCenter"
                     data-width="45%"
                     data-height="30%"
                     data-show-transition="up"
                     data-hide-transition="down"
                     data-show-duration="800"
                     data-show-delay="1200"
                     data-hide-delay="1200">
                    <p class="hidden-xs">We create custom, personal pizzas with quality ingredients in only five minutes.</p>
                    <a class="ui-btn ui-btn_mod-a btn-effect" href="javascript:void(0);">order online</a>
                </div>
            </div>
            <!-- end sp-slide -->

            <!-- Slide 2 -->
            <div class="sp-slide">
                <img class="sp-image img-responsive" src="assets/media/main-slider/main-slider_bg-1.jpg" height="1080" width="1920" alt="slider">

                <span class="sp-layer main-slider__title"
                      data-horizontal="0"
                      data-vertical="-23%"
                      data-position="centerCenter"
                      data-show-transition="up"
                      data-hide-transition="down"
                      data-show-duration="800"
                      data-show-delay="400"
                      data-hide-delay="400">
									Get it while it’s hot!
								</span>

                <div class="sp-layer main-slider__text text-center"
                     data-horizontal="0"
                     data-vertical="19%"
                     data-position="centerCenter"
                     data-width="45%"
                     data-height="30%"
                     data-show-transition="up"
                     data-hide-transition="down"
                     data-show-duration="800"
                     data-show-delay="1200"
                     data-hide-delay="1200">
                    <p class="hidden-xs">We create custom, personal pizzas with quality ingredients in only five minutes.</p>
                    <a class="ui-btn ui-btn_mod-a btn-effect" href="javascript:void(0);">order online</a>
                </div>
            </div>
            <!-- end sp-slide -->

        </div>
        <!-- end sp-slides -->
    </div>
    <!-- end main-slider -->

    <!-- HEADER -->
    <header class="header clearfix wow slideInUp" data-wow-duration="2s">
        <div class="header__wrap">
            <span class="sb-toggle-left"><i class="icon pe-7s-menu"></i></span>
            <a class="logo" href="home.html"><img class="img-responsive" src="assets/img/logo_mod-a.png" alt="Logo"></a>
            <span class="header-basket sb-toggle-right"><i class="icon pe-7s-cart"></i><span class="header-basket__number">2</span></span>
        </div>
    </header>
    <!-- end header -->

@endsection



@section('content1')
    <section class="section-default">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block wow fadeInUp" data-wow-duration="2s">{{$maqoola->quote}}</h2>
                    <p class="ui-subtitle-block wow fadeInUp" data-wow-duration="2s">{{$maqoola->author}}</p>

                    <div class="advantages">
                        <div class="row">
                            @foreach($quotes as $quote)
                                <div class="col-md-4">
                                    <div class="advantages__item wow fadeInUp" data-wow-duration="2s" style="text-align: justify;background-color: #c8c5c54d; padding:10px;text-align-last: center;  text-space-trim: trim-inner;">
                                        {{--<i class="icon pe-7s-medal"></i>--}}
                                        <h3 class="advantages__title ui-title-inner">{{$quote->quote}}</h3>
{{--                                        <div class="advantages__description">{{$quote->author}}</div>--}}

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- end advantages -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end section-default -->

@endsection