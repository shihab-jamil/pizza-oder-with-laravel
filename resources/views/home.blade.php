@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body ">
                    @if (count($pizzas) > 0)
                        @foreach ($pizzas as $pizza)
                            <div class="card my-2 bg-secondary">
                                <h4><a href="/pizza/order/show/{{$pizza->id}}" class="nav-link text-white">{{$pizza->name}}</a></h4>
                            </div>
                        @endforeach
                    @else
                    <h3>Opps, No order yet!!</h3></h3>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
