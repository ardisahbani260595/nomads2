@extends('layouts.app')


@section('title', 'Nomads')

@section('content')
<!-- header -->
<header class="text-center">
    <h1>Explore The Beautiful World <br> As Easy On Click
    </h1>
    <p class="mt-3">You Will See Beautiful <br> Moment You Never See Before</p>
    <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<main>
    <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
            <h2>20K</h2>
            <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>12</h2>
            <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>3K</h2>
            <p>Hotels</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
            <h2>72</h2>
            <p>Partners</p>
        </div>
    </section>


    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>Something You never Try <br> Before in This World</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularcontent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular/pop1.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular/pop2.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BROMO</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular/pop3.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">NUSA PENIDA</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/popular/pop4.png');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">SUKABUMI</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>Companies Are Trusted Us<br> More Than Just A Trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('frontend/images/partner/partner.png')}}" alt="" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <container>
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moments were giving them <br>the best experience</p>
                </div>
            </div>
        </container>
    </section>

    <section class="section section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testimonial/user_pic.png')}}" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Ardi Sahbani</h3>
                            <p class="testimonial">" it wa Glorious and I could<br>
                                not stopto say woohoo for<br>
                                every singgle moment<br>
                                Dankeeee "</p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">Trip To Ubud</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testimonial/testimonial2.png')}}" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Ellie Goudling</h3>
                            <p class="testimonial">" Keur hayang ulin the binggung neangan tempat untung aya NOMAD "</p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">Trip to Bromo, Malang, Indonesia</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testimonial/testimonila3.png')}}" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Sherry Lagoon</h3>
                            <p class="testimonial">" Arek umroh tapi rungsing hayang ngajien Visa untung di pang uruskeun ku NOMAD "</p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">Trip to Sukabumi, Indonesia</p>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
