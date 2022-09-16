@extends('layouts.main')


    @section('main-content')
    <section id="comics" class="container">
        <button id="current-series-button" class="button-primary">CURRENT
            SERIES</button>
            <div class="comics-wrapper">
                @foreach ($comics as $comic)
                <div  class="comic-col">
                    <div class="comic-card">
                        <a href="{{route('comic', ['id' => $loop -> index])}}">

                            <figure>
                                
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            </figure>
                            <span>{{ $comic['type'] }}</span>
                        </a>
                    </div>
                </div>
                
                @endforeach
                
            </div>
            <button id="load-more-button" class="button-primary">LOAD MORE</button>
            
        </section>
        @endsection; 
        