@extends('layout/template')

@section('content')
  <h1>Modifica dati macchina</h1>

  <div class="edit">
    <form action="{{route('cars.update', $car -> id)}}" method="post">
      @csrf
      @method('PUT')
      <div>
        <label for="brand">Brand</label><br>
        <input type="text" name="brand" placeholder="Inserisci Brand" value="{{ $car -> brand }}">
      </div>
      <div>
        <label for="model">Model</label><br>
        <input type="text" name="model" placeholder="Inserisci Modello" value="{{ $car -> model }}">
      </div>
      <div>
        <label for="displacement">Displacement</label><br>
        <input type="text" name="displacement" placeholder="Inserisci Cilindrata" value="{{ $car -> displacement }}">
      </div>
      <div>
        <label for="max_speed">Max Speed</label><br>
        <input type="text" name="max_speed" placeholder="Inserisci Velocita Max" value="{{ $car -> max_speed }}">
      </div><br>
      <button type="submit" name="button">Save Me</button>
    </form>
  </div>

@stop
