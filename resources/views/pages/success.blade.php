@extends('layouts.success')


@section('title', 'Checkout-Success')


@section('content')
<main>
    <div class="section-succsess d-flex align-item-center">
        <div class="col text-center">
            <img src="{{url('frontend/images/jumbotron/ic_succsess.png')}}" alt="">
            <h1>Yay! Succsess</h1>
            <p>
                We' ve Sent you E-mail for trip instruction <br />
                please read it as well
            </p>
            <a href="{{route('home')}}" class="btn btn-home-page mt-3 px-5"> Home Page</a>
        </div>
    </div>
</main>
@endsection
