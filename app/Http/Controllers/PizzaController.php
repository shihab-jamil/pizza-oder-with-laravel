<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'order', 'store']]);
    }

    public function index(){
        return view('pizza/index');
    }

    
    public function order(){
        return view('pizza/order');
    }

    public function store(Request $request){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->pizzaType = request('pizzaType');
        $pizza->crust = request('pizzaCrust');
        $pizza->extraToppings = request('mushrooms').','. request('peppers').','. request('garlic').','.request('olive');
        $pizza->save();
        return redirect('/')->with('message','Thanks for ordering');
    }

    public function show($id){
        $pizza = Pizza::find($id);
        return view('pizza/show')->with('pizza',$pizza);
    }

    public function destroy($id){
        $pizza = Pizza::find($id);
        $pizza->delete();
        return redirect('/home');
    }


}
