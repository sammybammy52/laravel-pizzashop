@extends('layouts.app')

@section('content')
    <center><div class="wrapper create-pizza">
        <h1>Create a new Pizza</h1>

        <form action="/pizzas" method="POST" class="p-3">

        @csrf

        <label for="name">Your name:</label>
        <input type="text" name="name" id="name" style="background:rgb(221, 221, 221);">

        <br>

        <label for="type">Choose Pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>

        <br>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>

        <fieldset>
            <label>Extra toppings:</label> <br>

            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br>

        </fieldset>

        <input type="submit" value="Order Pizza">


        </form>

        <div class="linkback mt-2">
            <a href="/"><button class="btn btn-primary">Back Home</button></a>
        </div>

    </div></center>
@endsection
