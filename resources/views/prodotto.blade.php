@php
    $arrayProdotti = config("datarawproducts");
    $prodotto = $arrayProdotti[$id];
@endphp

@extends('layouts.user') {{-- comprende già header e footer --}}

@section('titolo')
    {{$prodotto["titolo"]}}    
@endsection

@section('main')
    <div class="main-prodotto">
        <h2>{{$prodotto["titolo"]}}</h2>
        <img src="{{$prodotto["src-h"]}}" alt="">
        <img src="{{$prodotto["src-p"]}}" alt="">
        <p>{!!$prodotto["descrizione"]!!}</p> {{-- per rimuovere i br presenti nel testo che è passato tutto come stringa --}}
        <div class="frecce">
            <i class="fas fa-chevron-left"></i>
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
@endsection