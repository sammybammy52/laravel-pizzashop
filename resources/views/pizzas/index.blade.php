
@extends('layouts.layout')

@section('content')

    <h1 style="text-align: center;">PIZZA is good!!!!!</h1>


    <?php /*this foreach is used to print out everything in the array, $pizzas which
     was passed as 'pizzas' to the the pizzas page contains everything in the database table
     the foreach below means for each of the arrays(db rows ) in $pizzas as $i*/
    ?>


    @foreach($pizzas as $i)

        <div>
        {{$i->name}} and type is {{$i->type}} and base is {{$i->base}}

        <button class="btn btn-primary" style="background: rgb(104, 69, 69); border:none"> {{$i->name}} button </button>
        </div>
    @endforeach

@endsection
