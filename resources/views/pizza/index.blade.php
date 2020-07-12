@extends('layouts/app')

@section('content')
    <div class="container text-center my-5 bg-light mx-5">
        <h3>Welcome to North's best pizza house</h3>
        <a href="/pizza/order">Order a pizza</a>
    </div>
       @if (session('message'))
           <div class="alert alert-success">
               <h4> {{session('message')}}</h4>
           </div>
       @endif
@endsection