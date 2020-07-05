@extends('layouts.master');

@section('konten')
<div class="callout callout-info">
    <a href="{{url('/article')}}  ">
        <button class="btn btn-warning">Lihat artikel Lainnya</button>
    </a>
</div>

<br>


@foreach ($data as $key=>$value)
<div class="callout callout-info">
    <h1>Judul : {{$value->judul}} </h1>
    <p>ID : {{$value->id}}  </p>

<p> Tanggal dibuat {{$value->tanggal_dibuat}} || Tanggal diperbaharui {{$value->tanggal_diperbaharui}} </p>
    <h4>Slug : {{$value->slug}} </h4>
    <p>{{$value->isi}}</p>
    <p>Tag : {{$value->tag}}</p>
    
 </div>
@endforeach
    
@endsection