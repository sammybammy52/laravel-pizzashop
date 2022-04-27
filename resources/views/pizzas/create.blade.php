@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a new Pizza</h1>

        <form action="/pizzas" method="POST" class="p-3" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Pizza Name</label>
                <input type="text" class="form-control" placeholder="Enter Pizza Name" name="pizza_name">

            </div>

            <div class="form-group">
                <label>Pizza Description</label>
                <textarea type="text" class="form-control" placeholder="Enter Pizza Description"
                    name="pizza_description"></textarea>

            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Pizza Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" class="form-control" placeholder="Enter Price" name="price">

            </div>

            <button type="submit" class="btn btn-primary">Create Pizza</button>


        </form>


    </div>
@endsection
