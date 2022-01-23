@extends('layouts.main')

@section('content')
    <section class="movies-section py-3">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($movies as $movie)
                <div class="col-3 p-2 movie-card">
                    <ul>
                        <li>
                            <strong>Titolo del film:</strong> {{ $movie->title }}
                        </li>
                        <li>
                            <strong>Titolo in lingua originale:</strong> {{ $movie->original_title }}
                        </li>
                        <li>
                            <strong>Nazionalità del film:</strong> {{ $movie->nationality }}
                        </li>
                        <li>
                            <strong>Data di pubblicazione:</strong> {{ $movie->date }}
                        </li>
                        <li>
                            <strong>Voto del film:</strong> {{ $movie->vote }}
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

    © 2022 GitHub, Inc.

    Terms
    Privacy
    Security
    Status
    Docs
    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

