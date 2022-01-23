@extends('layouts.main')

@section('content')
    <div class="container mb-5">
        <h1 class="mb-5">I Nostri corsi di Laurea</h1>

        <section class="">
            <h1 class="mb-5">Corso di Laurea Triennalie</h1>
            @foreach ($degrees as $degree)
                @if($degree->level === 'triennale')
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $degree->name }}</h5>
                            <ul>
                                <li>livello:{{ $degree->level }} </li>
                                <li>via:{{ $degree->address }} </li>
                            </ul>
                            <a href="#" class="btn btn-primary">{{ $degree->website }}</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </section>
        

        <section>
            <h1 class="mb-5 mt-5">Corso di Laurea Magistrale</h1>
            @foreach ($degrees as $degree)
                @if($degree->level === 'magistrale')
                    <h4>{{ $degree->name }}</h4>
                    
                        <ul>
                            <li>{{ $degree->level }} </li>
                            <li>{{ $degree->address }} </li>
                            <li>{{ $degree->email }} </li>
                            <li>{{ $degree->website }} </li>
                        </ul>

                        @if(!$loop->last)
                            <hr>
                        @endif
                @endif
            @endforeach
        </section>
    </div>
@endsection