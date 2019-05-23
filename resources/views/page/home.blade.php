@extends('layout/template')

@section('content')
  <h1>Show Cars</h1>

{{-- Estraggo dati dal DB--}}
<table>
  @foreach($cars as $car)
  <tr>
    <td>{{$car -> id}}</td>
    <td>{{$car -> brand}}</td>
    <td>{{$car -> model}}</td>
    <td>{{$car -> displacement}}</td>
    <td>{{$car -> max_speed}}</td>
    <td><a href="{{route('cars.edit', $car -> id)}}"><i class="fas fa-edit"></i></a></td>
    <td>
      <form action="{{ route('cars.destroy', $car -> id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit"><i class="fas fa-trash-alt"></i></button>
      </form>
    </td>
  </tr>
  @endforeach
</table>

<a href="{{route('cars.create')}}">Inserisci Macchina</a>


@stop
