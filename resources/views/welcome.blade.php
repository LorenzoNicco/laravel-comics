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

<style lang="scss" scoped>

    h3 {
        color: white;
        background-color: rgb(0, 132, 255);
        padding: 1rem 2rem;
        width: fit-content;
        position: relative;
        bottom: 33px;
    }


    img {
        height: 10rem;
        width: 100%;
        object-fit: contain
    }
    .jumbotron {
        height: 20rem;
        width: 100%;
        background-image: url('..img/laravel-comics/images/vue-dc-comics-1/img/jumbotron.jpg');
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
    }

    button {
        color: white;
        background-color: rgb(0, 132, 255);
        padding: 0.5rem 3rem;
        margin: 2rem auto 0;
        cursor: pointer;
        border: none;
    }

    .blue-section {
    background-color: rgb(0, 132, 255);

    }

    .container-small {
        width: 1000px;
        height: 6rem;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;

    }
    .icons {
        cursor: pointer;
    }

    .icons > img {
        height: 2rem;
        vertical-align: middle;
    }

    span {
        vertical-align: middle;
        margin-left: 0.5rem;
    }

}
</style>
