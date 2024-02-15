@extends('layout.app')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
        @foreach ($trains as $train)
                    <div class="col-4">
                        <div class="content border rounded m-3">
                            <div class="train-code-container rounded-top">
                                <div>Codice:</div>
                                <div>#{{ $train['train_code'] }}</div>
                            </div>
                        
                        <div class="train-info mt-3">
                            <div class="locations">
                                <div class="location">
                                    <div class="departure">Partenza da:</div>
                                    <div class="departure-info">{{ $train['departure_station'] }}</div>
                                </div>
        
                                <div class="location">
                                    <div class="departure">Arrivo a:</div>
                                    <div class="departure-info">{{ $train['arrival_station'] }}</div>
                                </div>
                            </div>
                            
                            <div class="carriages">
                                <div class="number">Vagoni</div>
                                <div class="number-info">{{ $train['number_carriages'] }}</div>
                            </div>
                            
                        </div>

                        <div class="departure-container">
                            <div class="departure-title">Partenza</div>
                            <div class="departure-date">{{ $train['departure_time'] }}</div>
                        </div>

                        <div class="departure-container">
                            <div class="departure-title">Arrivo</div>
                            <div class="departure-date">{{ $train['departure_time'] }}</div>
                        </div>

                        
                        
                            {{-- <div class="fs-7 text-secondary fw-bolder">{{ $train['agency'] }}</div>
                            <div class="fs-3 fw-bolder">Partenza:</div>
                            <div class="fs-3 fw-bolder">Arrivo: {{ $train['arrival_station'] }}</div>
                            <div>Partenza: </div>
                            <div>Arrivo: {{ $train['arrival_time'] }}</div>
                            <div>Codice treno: {{ $train['train_code'] }}</div>
                            <div>Numero vagoni: {{ $train['number_carriages'] }}</div>
                            <div>{{ $train['punctual'] ? 'In ritardo': 'In orario'}}</div> --}}
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection