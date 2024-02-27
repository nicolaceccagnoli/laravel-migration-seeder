@extends('layouts.app')

@section('page-title', 'Tutti i treni')

@section('main-content')
    <h1>
        Treni | Laravel Start 1
    </h1>


    <div class="row flex-wrap justify-content-center p-2">
        @foreach ($trains as $index => $singleTrain)
            <div class="col-12 col-sm-3">
                <div class="card">
                    <div class="card-body text-center">

                        <h3>
                            {{ $singleTrain->company }}
                        </h3>

                        <div>
                            Stazione di partenza:
                            <span>
                                {{ $singleTrain->departure_station }}
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        <div class="col-auto">

            <a href="{{ route('trains.show') }}" class="btn btn-primary mt-5">
                Vai ai treni di oggi
            </a>

        </div>
    </div>

@endsection
