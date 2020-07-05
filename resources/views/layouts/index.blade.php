@extends('layouts.master')

@section('konten')


<div class="callout callout-info">
    <a href="{{url('/article/create')}}  ">
        <button class="btn btn-warning">Buat artikel</button>
    </a>
</div>

<br>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">judul artikel</th>
        <th scope="col">Isi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{$loop->iteration}} </td>
            <td>{{$value->judul}}</td>
            <td>{{$value->isi}} </td>
            <td>

                <a href="/article/{{$value->id}}">Lihat Detail</a>
                |
                <a href="/article/{{$value->id}}/edit">Edit Artikel</a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection