

@extends('layouts.layout')
        
@section('content')
        <div>
            {{$Name}}
            <p>{{print_r($Pizzas)}}</p>
            @for($i=0; $i < count($Pizzas);$i++)
                <p>Type = {{$Pizzas[$i]['Type']}} base= {{$Pizzas[$i]['base']}}</p>
            @endfor
            <br/>
            @foreach($Pizzas as $pizz)
                <div>{{$loop->index}} - {{$pizz['Type']}}</div>
            @endforeach
        </div>
@endsection