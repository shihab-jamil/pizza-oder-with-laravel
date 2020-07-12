@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="card p-5">
            <h3>Order of {{$pizza->name}}</h3>
            <p>Type - {{$pizza->pizzaType}}</p>
            <p>Crust - {{$pizza->crust}} </p>
            <p>Extra toppings</p>
            @php
                $toppings = explode(',',$pizza->extraToppings);
            @endphp
            <ul>
                @foreach ($toppings as $item)
                    @if ($item)
                        <li>{{$item}}</li>
                    @endif              
                @endforeach
            </ul>
            <form action="/pizza/order/complete/{{$pizza->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-success">Complete Order</button>
            </form>
        </div>
    </div>
    <div class="container my-3">
        <h5 class="text-center" ><a href="/home" class="nav-item"><< Back to orders</a></h5>
    </div>
@endsection