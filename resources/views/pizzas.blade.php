       @extends('layouts.layout')

       @section('content')
           
       <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 main-title">
                    <h1>Pizza List</h1>
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
                    <div>
                        {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}

                        @if($loop->first)
                            <span>= First in the loop</span>
                        @endif

                        @if ($loop->last)
                            <span>
                                - Last in the loop
                            </span>
                        @endif
                    </div>
                @endforeach
               
            </div>
        </div>

        @endsection