@extends('layouts.master')

@section('konten')

<h1>Edit Article</h1>
<br>
<div class="callout callout-info">
    <a href="{{url('/article')}}  ">
        <button class="btn btn-warning">Lihat artikel Lainnya</button>
    </a>
</div>

@foreach ($data as $key=>$value)

<form role="form" action="/article/{{$value->id}}" method="POST">
    {{method_field('put')}}
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="judul">Judul Article</label>
        <input type="text" name="judul"  class="form-control" id="judul" required="required"  placeholder="{{$value->judul}}" > 
        </div>
        <div class="form-group">
            <label>Isi</label>
            <textarea class="form-control"  name="isi" id="isi" rows="3" placeholder="{{$value->isi}}" required="required"></textarea>
        </div>
        <div class="form-group">
          <label>Tag</label>
          <textarea class="form-control"  name="tag" id="tag" rows="2" placeholder="{{$value->tag}}" required="required"></textarea>
      </div>
  
      
  
      <input hidden name="slug" value="judul">
      <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>

@endforeach



    
@endsection