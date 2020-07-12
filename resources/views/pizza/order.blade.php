@extends('layouts/app')

@section('content')
    <div class="bg-secondary my-5 mx-5 h-50 p-5">
        <h3 class="text-center">Order a new pizza</h3>
        <div class="container">
            <form action="/pizza/order/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Your name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="pizzaType">Choose type of pizza</label>
                    <select name="pizzaType" id="pizzaType" class="form-control" >
                        <option value="margarita">Margarita</option>
                        <option value="hawaiin">Hawaiin</option>
                        <option value="vegSupreme">Veg Supreme</option>
                        <option value="volcano">Volcano</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pizzaCrust">Choose Crust</label>
                    <select name="pizzaCrust" id="pizzaCrust" class="form-control" >
                        <option value="thick">Thick</option>
                        <option value="thinAndCrusty">Thin and Crusty</option>
                        <option value="cheeseCrust">Cheese Crust </option>
                        <option value="garlicCrust">Garlic Crust</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="extraTopings">Extra toppings</label>
                    <div id="extraTopings">
                        <label><input type="checkbox" name="mushrooms" value="mashroom" class="checkbox mr-1">Mushrooms</label><br>
                        <label><input type="checkbox" name="peppers" value="peppers" class="checkbox mr-1">Peppers</label><br>
                        <label><input type="checkbox" name="garlic" value="garlic" class="checkbox mr-1">Garlic</label><br>
                        <label><input type="checkbox" name="olive" value="olive" class="checkbox mr-1">Olive</label><br>
                    </div>             
                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
            </form>          
        </div>
    </div>
@endsection