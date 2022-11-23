@extends('template')

@section('artikelUpdate')
    
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah kategori</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Tambah kategori</h5>
          
          <form class="row g-3" action="{{route ('kategori.update', $data->id)}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('put')
            <div class="col-12">
                <label for="inputNanme4" class="form-label" hidden>ID</label>
                <input type="number" class="form-control" value="{{ $data->id }}" id="inputNanme4" name="id" hidden>
              </div>
           
            <div class="col-md-12">
              <label class="form-label">Nama Kategori</label>
              <input type="text" class="form-control" name="nama_kategori" value="{{$data->nama_kategori}}">
            </div>
           
            
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </div>
          </form>

        </div>
      </div>
</main>
@endsection