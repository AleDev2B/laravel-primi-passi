@extends('layout')

@section('content')

@for ($i=1; $i <= $max; $i++)
  <div class="number">
      {{$i}}
  </div>
  @endfor


@endsection
