       @extends('layouts.layout')

       @section('content')
           
       <div class="">
            <div class="container">
                <div class="image">
                    <h1>UVE EAGLE CONFECTIONERIES</h1>
                </div>
                <div class="main-title">
                    <h1>Welcome</h1>
                </div>
                {{-- <p>
                    {{ $type }}
                </p>
                <p>
                    {{ $base }} - {{ $price }}
                </p> --}}

                {{-- @for($i = 0; $i < count($pizzas); $i++)
                    <p>{{ $pizzas[$i]['type'] }}</p>
                @endfor --}}

                @foreach($pizzas as $pizza)
                    <div class="items">
                        {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                    </div>
                @endforeach
               
            </div>
        </div>

        @endsection