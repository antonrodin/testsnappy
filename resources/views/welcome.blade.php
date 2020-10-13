@extends('layouts.app')

@section('content')
    <h1>Hola...</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, aperiam aspernatur deserunt dicta
        dignissimos, ea explicabo, facilis illo minus porro quae quas recusandae sunt! Dolores dolorum nemo saepe
        veritatis! Et.</p>

    <p>
        <a href="/snappy/invoice" class="btn btn-primary">Ver Invoice</a>
        <a href="/snappy/loadView" class="btn btn-primary">Descargr PDF (Load View)</a>
        <a href="/snappy/loadFile" class="btn btn-primary">Descargar PDF (Load File)</a>
    </p>
@endsection

@section('invoice')
    @include('pdf.invoice')
@endsection
