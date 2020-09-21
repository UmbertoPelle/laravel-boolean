@extends('layout.main-layout')

@section('content')
<div class="container">
  <h1>LE LUNGHE</h1>

  <div class="img-container">
    @foreach ($data as $d)
      @if ($d['tipo'] == 'lunga')
        <div class="content">
          <img src="{{$d['src']}}" alt="">
          <div class="layout">
            <p>{{$d['descrizione']}}</p>
          </div>
        </div>
      @endif
    @endforeach
  </div>

  <h1>LE CORTE</h1>

  <div class="img-container">
    @foreach ($data as $d)
      @if ($d['tipo'] == 'corta')
        <div class="content">
          <img src="{{$d['src']}}" alt="">
          <div class="layout">
            <p>{{$d['descrizione']}}</p>
          </div>
        </div>
      @endif
    @endforeach
  </div>

  <h1>LE CORTISSIME</h1>

  <div class="img-container">
    @foreach ($data as $d)
      @if ($d['tipo'] == 'cortissima')
        <div class="content">
          <img src="{{$d['src']}}" alt="">
          <div class="layout">
            <p>{{$d['descrizione']}}</p>
          </div>
        </div>
      @endif
    @endforeach
  </div>
</div>

@endsection
