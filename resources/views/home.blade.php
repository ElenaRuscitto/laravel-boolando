
@extends('layout.main')

@section('content')

    <div class="container">

        @foreach ($products as $product)


            <div class="product">

                <img id="immagine" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="product.frontImage">
                <img id="immagine-hover" src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" alt="product.backImage"
                >
                <div class="heart"><span>&hearts;</span></div>

                <!-- sconto -->
                {{-- <div class="discount.type">
                    <strong>{{discount.value}}</strong>
                </div> --}}



                <div class="testo">
                <figcaption>{{ $product['brand'] }}</figcaption>
                <h4>{{ $product['name'] }}</h4>
                <span class="costo" ><strong>{{ $product['price'] }} &euro;</strong></span>
                <!-- <span class="ex-costo" >29,99 &euro;</span> -->
                </div>


            </div>


        @endforeach

    </div>


@endsection


