@extends('layouts.app')

@section('page-title', 'Treni di oggi')

@section('main-content')
    <h1>
        Treni di oggi | Laravel Start 1
    </h1>


    <div class="row flex-wrap justify-content-center p-2">
        <div class="col-auto col-sm-3">
            @foreach ($todayTrain as $singleTrain)
                <div class="card">
                    <div class="card-body text-center">

                        <h3>
                            {{ $singleTrain->company }}
                        </h3>

                        <ul>
                            <li>
                                Stazione di partenza:
                                <span>
                                    {{ $singleTrain->departure_station }}
                                </span>
                            </li>
                            <li>
                                Stazione di arrivo:
                                <span>
                                    {{ $singleTrain->arrival_station }}
                                </span>
                            </li>
                            <li>
                                Partenza:
                                <span>
                                    {{ $singleTrain->departure_hour }}
                                </span>
                            </li>
                            <li>
                                Arrivo previsto:
                                <span>
                                    {{ $singleTrain->arrival_hour }}
                                </span>
                            </li>
                            @if (!$singleTrain->on_time && !$singleTrain->deleted)
                                <li>
                                    Il treno purtroppo è in ritardo
                                </li>
                            @endif
                            @if (!$singleTrain->on_time && $singleTrain->deleted)
                                <li>
                                    Il treno è stato cancellato
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
