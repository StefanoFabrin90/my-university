@extends('layouts.main')

@section('content')
    <h1 class="mb-5 text-center">I Nostri corsi di Laurea</h1>
    <div class=" mb-5 degree-main">
        <div class="content">
            <h3 class="mb-5 text-center">Corso di Laurea Triennale</h3>
            <section class="">
                @foreach ($degrees as $degree)
                    @if($degree->level === 'triennale')
                        <div class="card" style="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $degree->name }}</h5>
                                <ul>
                                    <li>level: {{ $degree->level }} </li>
                                    <li>address: {{ $degree->address }} </li>
                                </ul>
                                <a href="#" class="btn">{{  $degree->website }}</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
        </div>    

        <div class="content mt-5">
            <h3 class="mb-5 text-center">Corso di Laurea Magistrale</h3>
            <section class="">
                @foreach ($degrees as $degree)
                    @if($degree->level === 'magistrale')
                        <div class="card" style="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $degree->name }}</h5>
                                <ul>
                                    <li>level: {{ $degree->level }} </li>
                                    <li>address: {{ $degree->address }} </li>
                                </ul>
                                <a href="#" class="btn btn-primary">{{ $degree->website }}</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
        </div>        
    </div>
@endsection