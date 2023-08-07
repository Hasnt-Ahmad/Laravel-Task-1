<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function index(){
        $pizzas=[
            ['Type'=> 'hawalian', 'base'=> 'chesy crust'],
            ['Type'=> 'volcano', 'base'=> 'garlic crust'],
            ['Type'=> 'veg supreme', 'base'=> 'thin and crispy'],
        ];
    
        $name=request("name");
        return view("pizzas",['Pizzas'=> $pizzas,'Name'=> $name]);
    }
}
