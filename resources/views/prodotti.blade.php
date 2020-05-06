@php
    $cards = config("datarawproducts");
            $lunghe = [];
            $corte = [];
            $cortissime = [];

            foreach ($cards as $key => $card) {  
                if ($card["tipo"] == "lunga") {
                    $lunghe[$key] = $card; //key in questa riga serve per passare la posizione del file json come chiave univoca e evitare che ci siano posizioni simili visto che gli array sono diversi, sono tre e ci sarebbero 3 posizioni 0, 3 posizioni 1 ecc... in questo modo prendo le posizioni dal json, dove gli elementi erano tutti in fila e assegnati a una posizione diversa. 
                } elseif ($card["tipo"] == "corta") {
                    $corte[$key] = $card; //nota idem come su
                } elseif ($card["tipo"] == "cortissima") {
                    $cortissime[$key] = $card; //nota idem come su su 
                }
            }


@endphp



@extends('layouts.user')

@section('titolo')
    Prodotti
@endsection
    


@section('main')
    <main>
    @include("partials.main")
    </main>
@endsection

    