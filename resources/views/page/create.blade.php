@extends('layout/template')

@section('content')
  <h1>Inserisci Macchina</h1>

  <div class="edit">
    <form action="{{route('cars.store')}}" method="post">
      @csrf
      <div>
        <label for="brand">Brand</label><br>
        <input type="text" name="brand" placeholder="Inserisci Brand">
      </div>
      <div>
        <label for="model">Model</label><br>
        <input type="text" name="model" placeholder="Inserisci Modello">
      </div>
      <div>
        <label for="displacement">Displacement</label><br>
        <input type="text" name="displacement" placeholder="Inserisci Cilindrata">
      </div>
      <div>
        <label for="max_speed">Max Speed</label><br>
        <input type="text" name="max_speed" placeholder="Inserisci Velocita Max">
      </div><br>
      <button type="submit" name="button">Save Me</button>
    </form>
  </div>

@stop
