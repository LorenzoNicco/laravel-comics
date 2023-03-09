@extends('layouts.app')

@section('content')

    
    <div class="jumbotron"></div>

    <section class="sezione-comics bg-dark">
        <div class="container text-center">
            <h3>CURRENT SERIES</h3>

            <div class="row p-4">
                @foreach ($comics as $singleComic)
                    <div class="col-2 text-white text-start">
                        <div class="my-img-container">
                            <img src="https://live.staticflickr.com/65535/52293252663_8c68516eb2_b.jpg" alt="">
                        </div>
    
                        <h6 class="mt-2 mb-4">{{ $singleComic['title'] }}</h6>
                    </div>
                @endforeach
            </div>

            <button class="mb-4">LOAD MORE</button>
        </div>
    </section>

    <section class="blue-section">
        <div class="container-small">
            <div class="icons">
                <img src="{{ Vite::asset('resources/img/laravel-comics/images/buy-comics-digital-comics.png') }}" alt="">

                <span>DIGITAL COMICS</span>
            </div>

            <div class="icons">
                <img src="{{ Vite::asset('resources/img/laravel-comics/images/buy-comics-merchandise.png') }}" alt="">

                <span>DC MERCHANDISE</span>
            </div>

            <div class="icons">
                <img src="{{ Vite::asset('resources/img/laravel-comics/images/buy-comics-subscriptions.png') }}" alt="">

                <span>SUBSCRIPTION</span>
            </div>
            
            <div class="icons">
                <img src="{{ Vite::asset('resources/img/laravel-comics/images/buy-comics-shop-locator.png') }}" alt="">

                <span>COMIC SHOP LOCATOR</span>
            </div>

            <div class="icons">
                <img src="{{ Vite::asset('resources/img/laravel-comics/images/buy-dc-power-visa.svg') }}" alt="">

                <span>DC POWER VISA</span>
            </div>
        </div>
    </section>
@endsection

