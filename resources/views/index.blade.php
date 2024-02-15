@extends('layout.app')

@section('content')
    @foreach ($trains as $train)
        <div class="my-5">
            <div>{{ $train['agency'] }}</div>
            <div>{{ $train['departure_station'] }}</div>
            <div>{{ $train['arrival_station'] }}</div>
            <div>{{ $train['departure_time'] }}</div>
            <div>{{ $train['arrival_time'] }}</div>
            <div>{{ $train['train_code'] }}</div>
            <div>{{ $train['number_carriages'] }}</div>
            <div>{{ $train['punctual'] }}</div>
        </div>
    @endforeach
@endsection