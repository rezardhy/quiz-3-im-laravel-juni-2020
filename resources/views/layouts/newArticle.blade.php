@extends('layouts.master');
@section( 'konten')

<form role="form" action="/article" method="POST">
  @csrf
  <div class="card-body">
      <div class="form-group">
          <label for="judul">Judul Article</label>
          <input type="text" name="judul"  class="form-control" id="judul" placeholder="Masukan Judul" required="required">
      </div>
      <div class="form-group">
          <label>Isi</label>
          <textarea class="form-control"  name="isi" id="isi" rows="3" placeholder="Masukan isi Article" required="required"></textarea>
      </div>
      <div class="form-group">
        <label>Tag</label>
        <textarea class="form-control"  name="tag" id="tag" rows="2" placeholder="masukan tag" required="required"></textarea>
    </div>

    

    <input hidden name="slug" value="judul">
    <div class="card-footer">
          <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
  </div>
</form>

@endsection