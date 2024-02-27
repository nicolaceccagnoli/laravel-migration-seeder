@extends('layouts.app')

@section('page-title', 'Treni di oggi')

@section('main-content')
    <h1>
        Treni di oggi | Laravel Start 1
    </h1>


    <div class="row flex-wrap justify-content-center p-2">
        <div class="col-12 col-sm-3">
            <div class="card">
                <div class="card-body text-center">

                    @foreach ($todayTrain as $singleTrain)
                        <h3>
                            {{ $singleTrain->company }}
                        </h3>

                        <div>
                            Stazione di partenza:
                            <span>
                                {{ $singleTrain->departure_station }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
