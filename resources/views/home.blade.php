@extends('layout.main')

@section('content')

<h1>Trains</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">company</th>
        <th scope="col">slug</th>
        <th scope="col">firstStation</th>
        <th scope="col">lastStation</th>
        <th scope="col">arrivingTime</th>
        <th scope="col">trainCode</th>
        <th scope="col">vagonNumber</th>
        <th scope="col">is_onTime</th>
        <th scope="col">is_cancelled</th>

      </tr>
    </thead>
    <tbody>
        @foreach ( $trains as $train )
        <tr>
          <th scope="row">{{ $train->id}}</th>
          <th scope="row">{{ $train->company}}</th>
          <th scope="row">{{ $train->slug}}</th>
          <th scope="row">{{ $train->firstStation}}</th>
          <th scope="row">{{ $train->lastStation}}</th>
          <th scope="row">{{ $train->arrivingTime}}</th>
          <th scope="row">{{ $train->trainCode}}</th>
          <th scope="row">{{ $train->vagonNumber}}</th>
          <th scope="row">{{ $train->is_onTime}}</th>
          <th scope="row">{{ $train->is_cancelled}}</th>

        </tr>

        @endforeach

    </tbody>
  </table>
@endsection
