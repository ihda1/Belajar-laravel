@extends('layout/dasar')

@section('judul','About laravel')

@section('container')
  <div class="container">
      <div class="row">
          <div class="col-10">
          <h1 class="mt-3">Hello, ini {{$nama}}</h1>
          </div>
      </div>
  </div>
@endsection