@extends('layout.main-layout')

@section('content')
    <!--about section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="services_taital">Enabling Your Monetary Excursion</h1>
                    <p class="services_text">Your confided in asset for individual budget, speculation guidance, business
                        bits of knowledge, and monetary news.</p>
                    <div class="moremore_bt"><a href="#">Read More </a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="{{ asset('assets/images/header-img.jpg') }}" class="image_1 rounded"></div>
                </div>
            </div>
        </div>
    </div>
    <!--about section end -->


    <!--project section start -->
    <div class="project_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="project_main">
                        <h1 class="services_taital">About Us</h1>
                        <p class="services_text">
                            Finance Center is devoted to aiding people, organizations, and financial backers explore the
                            perplexing universe of money. Whether you're hoping to oversee individual budgets, make more
                            intelligent speculations, or develop your business, we're here to give noteworthy bits of
                            knowledge, apparatuses, and assets.

                            Our group comprises of experienced monetary experts, enthusiastic about making monetary
                            information open to everybody. We have confidence in enabling individuals through training and
                            giving clear, viable guidance that drives genuine outcomes.
                        </p>
                        <div class="moremore_bt"><a href="#">Read More </a></div>
                        <div class="image_6"><img src="{{ asset('assets/images/img-6.png') }}"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="images_main">
                        <div class="images_left">
                            <div class="container_1">
                                <img src="{{ asset('assets/images/i-1.jpg') }}" alt="Avatar" class="image rounded" style="width:100%">
                                <div class="middle">
                                    <div class="text"><img src="{{ asset('assets/images/search-icon.png') }}"></div>
                                    <h2 class="fact_text">Laid out Reality</h2>
                                </div>
                            </div>
                            <div class="container_1">
                                <img src="{{ asset('assets/images/i-2.jpg') }}" alt="Avatar" class="image rounded" style="width:100%">
                                <div class="middle">
                                    <div class="text"><img src="{{ asset('assets/images/search-icon.png') }}"></div>
                                    <h2 class="fact_text">Laid out Reality</h2>
                                </div>
                            </div>
                        </div>
                        <div class="images_right">
                            <div class="container_1">
                                <img src="{{ asset('assets/images/i-3.jpg') }}" alt="Avatar" class="image rounded" style="width:100%">
                                <div class="middle">
                                    <div class="text"><img src="{{ asset('assets/images/search-icon.png') }}"></div>
                                    <h2 class="fact_text">Laid out Reality</h2>
                                </div>
                            </div>
                            <div class="container_1">
                                <img src="{{ asset('assets/images/i-4.jpg') }}" alt="Avatar" class="image" style="width:100%">
                                <div class="middle">
                                    <div class="text"><img src="{{ asset('assets/images/search-icon.png') }}"></div>
                                    <h2 class="fact_text">Laid out Reality</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project_section_2 layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="icon_1"><img src="{{ asset('assets/images/icon-3.png') }}"></div>
                    <h3 class="accounting_text_1">100+</h3>
                    <p class="yers_text">Expert Advisors</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="icon_1"><img src="{{ asset('assets/images/icon-4.png') }}"></div>
                    <h3 class="accounting_text_1">100+</h3>
                    <p class="yers_text">Projects Delivered</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="icon_1"><img src="{{ asset('assets/images/icon-2.png') }}"></div>
                    <h3 class="accounting_text_1">80+</h3>
                    <p class="yers_text">Happy Clients</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="icon_1"><img src="{{ asset('assets/images/icon-1.png') }}"></div>
                    <h3 class="accounting_text_1">100+</h3>
                    <p class="yers_text">Tailored Solutions</p>
                </div>
            </div>
        </div>
    </div>
    <!--project section end -->



    <!--services section start -->
    <div class="what_we_do_section layout_padding my-4">
        <div class="container">
            <h1 class="what_taital">WHAT WE DO</h1>
            <p class="what_text">We offer a scope of administrations to assist you with accomplishing your monetary objectives
            </p>
            <div class="what_we_do_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="icon_1"><img src="{{ asset('assets/images/icon-1.png') }}"></div>
                            <h3 class="accounting_text">Personal Finance</h3>
                            <p class="lorem_text">
                                Master tips on planning, obligation the board, and reserve funds systems to assist you with assuming command over your monetary future.
                            </p>
                            <div class="moremore_bt_1"><a href="#">Read More </a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main active">
                            <div class="icon_1"><img src="{{ asset('assets/images/icon-2.png') }}"></div>
                            <h3 class="accounting_text">Investment Guidance</h3>
                            <p class="lorem_text">
                                From fledgling agreeable securities exchange tips to cutting edge venture methodologies, we guide you on the way to developing your abundance.
                            </p>
                            <div class="moremore_bt_1"><a href="#">Read More </a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="icon_1"><img src="{{ asset('assets/images/icon-3.png') }}"></div>
                            <h3 class="accounting_text">Business Finance Solutions</h3>
                            <p class="lorem_text">Whether you're an entrepreneur or a business person, we give experiences on overseeing income, getting credits, and anticipating development.</p>
                            <div class="moremore_bt_1"><a href="#">Read More </a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="icon_1"><img src="{{ asset('assets/images/icon-4.png') }}"></div>
                            <h3 class="accounting_text">Insurance and Retirement Planning</h3>
                            <p class="lorem_text">We assist you with safeguarding what makes the biggest difference and plan for an agreeable retirement.</p>
                            <div class="moremore_bt_1"><a href="#">Read More </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services section end -->


@endsection
