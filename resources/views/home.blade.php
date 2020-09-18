@extends('layout.main-layout')

@section('content')
<div class="container">
  <h1>LE LUNGHE</h1>

  <div class="img-container">
    @foreach ($data as $d)
      @if ($d['tipo'] == 'lunga')
        <img src="{{$d['src']}}" alt="">
      @endif
    @endforeach
  </div>

  <h1>LE CORTE</h1>

  <div class="img-container">
    @foreach ($data as $d)
      @if ($d['tipo'] == 'corta')
        <img src="{{$d['src']}}" alt="">
      @endif
    @endforeach
  </div>

  <h1>LE CORTISSIME</h1>

  <div class="img-container">
    @foreach ($data as $d)
      @if ($d['tipo'] == 'cortissima')
        <img src="{{$d['src']}}" alt="">
      @endif
    @endforeach
  </div>
</div>

@endsection
