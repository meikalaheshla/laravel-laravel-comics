@extends('layouts.main')
@section('jumbo-content')
<figure>
    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
</figure>
@endsection

@section('main-content')
<section id="comic-details" class="small-container ">
    <h2>{{$comic['title']}}</h2>
    <div class="details">
        <span> {{$comic['price']}}</span>
        <p>{{$comic['description']}}</p>
    </div>
    <div class="advertisement">
        <img src="{{asset('images/adv.jpg')}}" alt="">
    </div>

    

</section>
@endsection