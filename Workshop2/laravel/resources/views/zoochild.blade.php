@extends('zoo')

@section('animals')
    @foreach($animaux as $animal)
        <h3>{{$animal->animal}}</h3>
        @foreach($animal->miaou as $cri)
        <p>{{$cri->cri}}</p>
        @endforeach
    @endforeach
@endsection