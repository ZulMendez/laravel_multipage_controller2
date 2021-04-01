@extends('layouts.index')

@section('content')
@foreach ($produits as $item)
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex  rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">{{$item->titre}}</span>
                                <span class="section-heading-lower">{{$item->sousTitre}}</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{asset($item->photo)}}
                        alt="">
                    <div class="product-item-description d-flex">
                        <div class="bg-faded p-5 rounded">
                            <p class="mb-0">{{$item->texte}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endforeach

@endsection