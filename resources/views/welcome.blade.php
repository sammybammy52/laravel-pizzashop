@extends('layouts.app')


@section('content')
<h1>Click below to order</h1>

<button><a href="/pizzas/create">Order ya pizza</a></button>
<br>
<br>
<p class="mssg">{{ session('mssg') }}</p>
@endsection

