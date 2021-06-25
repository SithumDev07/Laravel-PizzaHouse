   
   @extends('layouts.layout')

   @section('content')
       
   <div class="">
    <div class="container">
        <div class="image">
            <h1>UVE EAGLE CONFECTIONERIES</h1>
        </div>

        <p class="message">
            {{ session('message') }}
        </p>
        
        <a href="{{ route('pizzas.create') }}">Order a pizza</a>
       
    </div>
</div>

   
    @endsection