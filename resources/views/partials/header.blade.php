
@php

// inporto da config il menu dell'header

$mainMenu = config('headerMenues.mainMenu');

$socialMenu = config('headerMenues.socialMenu');
// @dump($mainMenu)
@endphp




  <header>
      <div class="container-header ">

        <div class="row justify-beetween align-center  ">
          <div class="col ">
            <nav>
              <ul class="main-menu">
                @foreach ($mainMenu as $item)

                    <li>
                        <a href="{{ $item['link'] }}"> {{ $item['genere']}}</a>
                    </li>

                @endforeach


              </ul>
            </nav>
          </div>
          <div class="col logo ">
            <img src="{{Vite::asset('resources/img/boolean-logo.png')}}" alt="Logo">
          </div>

          <div class="col ">
            <nav>


              <ul class="social-menu">

                @foreach ($socialMenu as $item)
                    <li :key="`s-${index}`">
                    <a href="{{ $item['link'] }}"> <i class="{{ $item['icon']}}"></i></a>
                    </li>

                @endforeach
              </ul>


            </nav>
          </div>

        </div>
      </div>
    </header>






