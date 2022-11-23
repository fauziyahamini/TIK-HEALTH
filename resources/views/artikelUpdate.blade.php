@extends('template')

@section('artikelUpdate')
    
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah artikel</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Tambah artikel</h5>
          
          <form class="row g-3" action="{{route ('artikel.update', $data->id)}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('put')
            <div class="col-12">
                <label for="inputNanme4" class="form-label" hidden>ID</label>
                <input type="number" class="form-control" value="{{ $data->id }}" id="inputNanme4" name="id" hidden>
              </div>
           
            <div class="col-md-12">
              <label class="form-label">Judul</label>
              <input type="text" class="form-control" name="judul" value="{{$data->judul}}">
            </div>
            <div class="col-md-12">
              <label class="form-label">Isi</label>
              <input type="text" class="form-control" name="isi" value="{{$data->isi}}">
            </div>
            <div class="col-md-12">
                <label lass="form-label">Foto</label>
                <img src="{{ asset('storage/'.$data->foto) }}" alt="" width="100px">
                <input class="form-control" type="file" name="foto">
              </div>
            {{-- <div class="col-12">
              <label  class="form-label">Sinopsis</label>
              <textarea class="form-control" id="editor" name="sinopsis" rows="4" value="{{$data->sinopsis}}"></textarea>
            </div> --}}
            <div class="col-md-6">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tgl" value="{{$data->tgl}}">
              </div>
            <div class="col-12">
              <label  class="form-label">Kategori</label>
              <select class="form-select" name="kategori_id" value="{{$data->kategori_id}}">
                     @foreach ($kategori as $kategori)
                    <option value="{{ $kategori->id }}" @selected($data->kategori_id==$kategori->id)>
                        {{ $kategori->nama_kategori }}</option>
                     @endforeach
                </select>
            </div>
            
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </div>
          </form>

        </div>
      </div>
</main>
@endsection