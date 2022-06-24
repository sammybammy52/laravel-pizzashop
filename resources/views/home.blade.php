@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-light">
                <div class="card-header bg-dark">{{ __('Dashboard') }}</div>

                <div class="card-body bg-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="vieworders mt-2">
                        <a href="/pizzas"><button class="btn btn-primary">View Orders</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
